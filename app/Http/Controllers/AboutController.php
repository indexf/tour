<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Guide;
use App\Review;
class AboutController extends Controller
{
    public function index(){
        return view('about',[
            'main' => Main::get_main(),
            'guides' => Guide::all_guide(),
            'reviews' => Review::all_review()
        ]);
    }
}
