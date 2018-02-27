<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instagram;

class InstagramController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('instagram',[
            'instagrams' => Instagram::all_instagram(),
        ]);
    }

    public function create(){

        return view('instagram.create');

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $instagram = Instagram::find($id);
        return view('instagram.edit',[
            'instagram' => $instagram
        ]);

    }

    public function update(Request $request, $id){

        $instagram = Instagram::find($id);

        $instagram->link = $request->get('link');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/instagram'), $file_name);
            $instagram->path = $file_name;
        }

        $instagram->save();

        return redirect()->route('instagram');
    }

    public function destroy($id){

        Instagram::find($id)->delete();
        return redirect()->route('instagram');

    }

    public function upload(Request $request)
    {

        $instagram = new Instagram;

        $instagram->link = $request->get('link');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/instagram'), $file_name);
            $instagram->path = $file_name;
        }

        $instagram->save();

        return redirect()->route('instagram');
    }
}
