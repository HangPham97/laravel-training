<?php

namespace Modules\TestModule\Entities;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
class news extends Model
{
    protected $fillable = ['title','sample','content'];
    protected $table = "news";
    public $incrementing = false;
    public function cate(){
        return $this->belongsToMany('Modules\TestModule\Entities\Category','news_cate','news_id','cate_id')->withPivot('news_id', 'cate_id');
    }
    public static function getDataUrl($data)
    {
        if (!empty($data)) {
            return env("APP_URL") . "images" . "/{$data}" ;
        }
        return env("APP_URL") . '/images/placeholder.jpg';
    }
    public static function renameMonth($months){
        $data = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($months as $month_count){
            if($month_count->month == "1"){
                $data[0] = $month_count->total_news;
            }
            if($month_count->month == "2"){
                $data[1] = $month_count->total_news;
            }
            if($month_count->month == "3"){
                $data[2] = $month_count->total_news;
            }
            if($month_count->month == "4"){
                $data[3] = $month_count->total_news;
            }
            if($month_count->month == "5"){
                $data[4] = $month_count->total_news;
            }
            if($month_count->month == "6"){
                $data[5] = $month_count->total_news;
            }
            if($month_count->month == "7"){
                $data[6] = $month_count->total_news;
            }
            if($month_count->month == "8"){
                $data[7] = $month_count->total_news;
            }
            if($month_count->month == "9"){
                $data[8] = $month_count->total_news;
            }
            if($month_count->month == "10"){
                $data[9] = $month_count->total_news;
            }
            if($month_count->month == "11"){
                $data[10] = $month_count->total_news;
            }
            if($month_count->month == "12"){
                $data[11] = $month_count->total_news;
            }
        }
        return $data;
    }
}
