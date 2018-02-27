<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name','phone','text'];


    /**
     * @return array -  список всех сообщений и имён авторов
     */
    public static function all_leads(){

        $leads = Lead::orderBy('id','desc')->get();
        $res = array();
        if ($leads) {
            foreach ($leads as $key => $lead) {
                $res[$key]['phone'] = $lead->phone;
                $res[$key]['name'] = $lead->name;
                $res[$key]['text'] = $lead->text;
                $res[$key]['date'] = date_format($lead->created_at, 'd-m-Y H:i:s');
            }
        }
        return $res;
    }
}
