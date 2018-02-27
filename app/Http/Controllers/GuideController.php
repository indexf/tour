<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
class GuideController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('guide',[
            'guides' => Guide::all_guide(),
        ]);
    }

    public function create(){

        return view('guide.create');

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $guide = Guide::find($id);
        return view('guide.edit',[
            'guide' => $guide
        ]);

    }

    public function update(Request $request, $id){

        $guide = Guide::find($id);

        $guide->name = $request->get('name');
        $guide->description = $request->get('description');
        $guide->link_vk = $request->get('link_vk');
        $guide->link_fb = $request->get('link_fb');
        $guide->link_inst = $request->get('link_inst');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/guide'), $file_name);
            $guide->avatar = $file_name;
        }

        $guide->save();

        return redirect()->route('guide');
    }

    public function destroy($id){

        Guide::find($id)->delete();
        return redirect()->route('guide');

    }

    public function upload(Request $request)
    {

        $guide = new Guide;

        $guide->name = $request->get('name');
        $guide->description = $request->get('description');
        $guide->link_vk = $request->get('link_vk');
        $guide->link_fb = $request->get('link_fb');
        $guide->link_inst = $request->get('link_inst');

        foreach ($request->file() as $file) {
            $file_name = time().'_'.$file->getClientOriginalName();
            $file->move(storage_path('../public/img/content/guide'), $file_name);
            $guide->avatar = $file_name;
        }



        $guide->save();

        return redirect()->route('guide');
    }
}
