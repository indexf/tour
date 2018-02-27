<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Tour;
class PhotoController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('photo',[
            'photos' => Photo::all_photo(),
            'tours' => Tour::all_tour()
        ]);
    }

    public function create(){

        return view('photo.create',[
            'tours' => Tour::all_tour()
        ]);

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $photo = Photo::find($id);
        return view('photo.edit',[
            'photo' => $photo
        ]);

    }

    public function update(Request $request, $id){

        $photo = Photo::find($id);

        $photo->tour_id = $request->get('tour_id');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/photo'), $file_name);
            $photo->path = $file_name;
        }

        $photo->save();

        return redirect()->route('photo');
    }

    public function destroy($id){

        Photo::find($id)->delete();
        return redirect()->route('photo');

    }

    public function upload(Request $request)
    {

        $photo = new Photo;

        $photo->tour_id = $request->get('tour_id');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/photo'), $file_name);
            $photo->path = $file_name;
        }

        $photo->save();

        return redirect()->route('photo');
    }
}
