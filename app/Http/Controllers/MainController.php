<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;

class MainController extends Controller
{
    // без доступа в контроллер не попасть
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('main',[
            'main' => Main::find(1)
        ]);
    }

    public function edit(){

        $main = Main::find(1);
        return view('main.edit',[
            'main' =>   $main
        ]);

    }

    public function update(Request $request){

        $main = Main::find(1);

        $main->description_criemea = $request->get('description_criemea');
        $main->description_abkhazia = $request->get('description_abkhazia');
        $main->about_text = $request->get('about_text');
        $main->company_phone = $request->get('company_phone');
        $main->company_email = $request->get('company_email');
      	if($request->get('leads_email')){
       		 $main->leads_email = $request->get('leads_email');
        }  else {
           $main->leads_email = '';
        }
       
        $main->link_vk = $request->get('link_vk');
        $main->link_fb = $request->get('link_fb');
        $main->link_inst = $request->get('link_inst');
        $main->video_title = $request->get('video_title');

        if($request->get('video') == ''){
            $main->video = '';
        } else {
            $main->video = substr($request->get('video'), -11);
        }

        $main->save();

        return redirect()->route('main');
    }
}
