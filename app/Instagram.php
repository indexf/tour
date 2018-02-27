<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $fillable = ['path','link'];

    public static function all_instagram(){

        $instagrams = Instagram::orderBy('id','asc')->get();
        $res = array();
        if ($instagrams) {
            foreach ($instagrams as $key => $instagram) {
                $res[$key]['id'] = $instagram->id;
                $res[$key]['path'] = $instagram->path;
                $res[$key]['link'] = 'https://'.(str_replace('https://','',$instagram->link));

            }
        }
        return $res;
    }
}
