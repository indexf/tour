<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Instagram;
use App\Tour;
class LandingController extends Controller
{
    public function index(){

        return view('index',[
            'tours' => Tour::all_tour(),
            'instagrams' => Instagram::all_instagram(),
            'main' => Main::get_main()
        ]);
    }
}
