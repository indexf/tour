<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['path','tour_id'];

    public static function all_photo(){

        $photos = Photo::orderBy('id','asc')->get();
        $res = array();
        if ($photos) {
            foreach ($photos as $key => $photo) {
                $res[$key]['id'] = $photo->id;
                $res[$key]['path'] = $photo->path;
                $res[$key]['tour_id'] = $photo->tour_id;
            }
        }
        return $res;
    }


}
