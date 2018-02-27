<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $fillable = ['avatar','name','description','link_vk','link_fb','link_inst'];

    public static function all_guide(){

        $guides = Guide::orderBy('id','asc')->get();
        $res = array();
        if ($guides) {
            foreach ($guides as $key => $guide) {
                $res[$key]['id'] = $guide->id;
                $res[$key]['avatar'] = $guide->avatar;
                $res[$key]['name'] = $guide->name;
                $res[$key]['description'] = $guide->description;
                $res[$key]['link_vk'] = 'https://'.(str_replace('https://','',$guide->link_vk));
                $res[$key]['link_fb'] = 'https://'.(str_replace('https://','',$guide->link_fb));
                $res[$key]['link_inst'] = 'https://'.(str_replace('https://','',$guide->link_inst));
            }
        }
        return $res;
    }
}
