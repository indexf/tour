<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name','page_title','avatar','main_img','group','description','tour_included','price_included','tour_this','route','price','video','video_title'];

    public static function all_tour(){

        $tours = Tour::orderBy('id','asc')->get();
        $res = array();
        if ($tours) {
            foreach ($tours as $key => $tour) {
                $res[$key]['id'] = $tour->id;
                $res[$key]['name'] = $tour->name;
                $res[$key]['page_title'] = $tour->page_title;
                $res[$key]['avatar'] = $tour->avatar;
                $res[$key]['main_img'] = $tour->main_img;
                $res[$key]['group'] = $tour->group;
                $res[$key]['description'] = $tour->description;
                $res[$key]['tour_included'] = $tour->tour_included;
                $res[$key]['price_included'] = $tour->price_included;
                $res[$key]['tour_this'] = $tour->tour_this;
                $res[$key]['route'] = $tour->route;
                $res[$key]['price'] = $tour->price;
                $res[$key]['video'] = $tour->video;
                $res[$key]['video_title'] = $tour->video_title;
            }
        }
        return $res;
    }


    public static function get_tour($id){

        $tour = Tour::find($id);
        return $tour;

    }

    public static function get_tour_included($id){
        $tour = Tour::find($id);
        $tour_included = explode(',',$tour['tour_included']);
        return $tour_included;
    }

    public static function get_price_included($id){
        $tour = Tour::find($id);
        $price_included = explode(',',$tour['price_included']);
        return $price_included;
    }
  
    public static function get_tour_this($id){
        $tour = Tour::find($id);
        $tour_this = explode(',',$tour['tour_this']);
        return $tour_this;
    }

    public static function get_route($id){
        $tour = Tour::find($id);
        $route = explode(',',$tour['route']);
        return $route;
    }
  
  
  
}
