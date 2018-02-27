<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = ['description_criemea','description_abkhazia','about_text','company_phone','company_email',
                            'leads_email','link_vk','link_fb','link_inst','video','video_title'];

    public static function get_main(){

        $array = Main::orderBy('id','asc')->get();
        $res = array();
        if ($array) {
            foreach ($array as $key => $main) {
                $res['description_criemea'] = $main->description_criemea;
                $res['description_abkhazia'] = $main->description_abkhazia;
                $res['about_text'] = $main->about_text;
                $res['company_phone'] = $main->company_phone;
                $res['company_email'] = $main->company_email;
                $res['leads_email'] = $main->leads_email;
                $res['link_vk'] = $main->link_vk;
                $res['link_fb'] = $main->link_fb;
                $res['link_inst'] = $main->link_inst;
                $res['video'] = $main->video;
                $res['video_title'] = $main->video_title;
            }
        }
        return $res;
    }

}
