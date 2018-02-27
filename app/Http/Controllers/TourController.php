<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Tour;
use App\Photo;
class TourController extends Controller
{
    public function index(Request $request){

        $id = $request->input('id'); // получили get запрос
        if($id == null){
            return redirect()->route('index');
        }


        return view('tour',[
            'id' => $id,
            'main' => Main::get_main(),
            'photos' => Photo::all_photo(),
            'tour' => Tour::get_tour($id),
            'price_included' => Tour::get_price_included($id),
            'tour_included' => Tour::get_tour_included($id),
            'tour_this' => Tour::get_tour_this($id),
            'route' => Tour::get_route($id)
        ]);
    }


}
