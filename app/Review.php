<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['avatar','name','text','social_icon'];

    public static function all_review(){

        $reviews = Review::orderBy('id','asc')->get();
        $res = array();
        if ($reviews) {
            foreach ($reviews as $key => $review) {
                $res[$key]['id'] = $review->id;
                $res[$key]['avatar'] = $review->avatar;
                $res[$key]['name'] = $review->name;
                $res[$key]['text'] = $review->text;
                $res[$key]['social_icon'] = $review->social_icon;

            }
        }
        return $res;
    }
}
