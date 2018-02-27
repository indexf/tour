<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class ATourConrtoller extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('atour',[
            'tours' => Tour::all_tour(),
        ]);
    }

    public function create(){

        return view('atour.create');

    }

    public function edit(Request $request){

        $id = $request->input('id');
        $tour = Tour::find($id);
        return view('atour.edit',[
            'tour' => $tour
        ]);

    }

    public function update(Request $request, $id){

        $tour = Tour::find($id);


        $file = $request->file();
      	if(isset($file["avatar"])){
        	$file_name = time().'avatar';;
            $file["avatar"]->move(storage_path('../public/img/content/atour'), $file_name);
        	$tour->avatar = $file_name;
        }
        
       if(isset($file["main_img"])){
       		 $file_name = time().'main_img';;
             $file["main_img"]->move(storage_path('../public/img/content/atour'), $file_name);
             $tour->main_img = $file_name;
       }

       

        $tour->name = $request->get('name');
        $tour->page_title = $request->get('page_title');
        $tour->group = $request->get('group');
        $tour->description = $request->get('description');
        $tour->tour_included = $request->get('tour_included');
        $tour->price_included = $request->get('price_included');
        $tour->tour_this = $request->get('tour_this');
        $tour->route = $request->get('route');
        $tour->price = $request->get('price');
        if($request->get('video') == ''){
            $tour->video = '';
        } else {
            $tour->video = substr($request->get('video'), -11);
        }

        $tour->video_title = $request->get('video_title');

        $tour->save();

        return redirect()->route('atour');
    }

    public function destroy($id){

        Tour::find($id)->delete();
        return redirect()->route('atour');

    }

    public function upload(Request $request)
    {

         $tour = new Tour;
//        dd($request);

            $file = $request->file();
            $file_name = time().'avatar';
            $file["avatar"]->move(storage_path('../public/img/content/atour'), $file_name);
            $tour->avatar = $file_name;

            $file_name = time().'main_img';
            $file["main_img"]->move(storage_path('../public/img/content/atour'), $file_name);
            $tour->main_img = $file_name;

//        }



        $tour->name = $request->get('name');
        $tour->page_title = $request->get('page_title');
        $tour->group = $request->get('group');
        $tour->description = $request->get('description');
        $tour->tour_included = $request->get('tour_included');
        $tour->price_included = $request->get('price_included');
        $tour->tour_this = $request->get('tour_this');
        $tour->route = $request->get('route');
        $tour->price = $request->get('price');

        if($request->get('video') == ''){
            $tour->video = '';
        } else {
            $tour->video = substr($request->get('video'), -11);
        }

        $tour->video_title = $request->get('video_title');

        $tour->save();

        return redirect()->route('atour');
    }
}
