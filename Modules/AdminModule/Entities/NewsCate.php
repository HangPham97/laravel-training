<?php

namespace Modules\AdminModule\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model
{

    protected $table = "news_cate";
    protected $fillable = ['news_id','cate_id'];
    public $timestamps = false;
    public $incrementing = false;
    /*
     *getCateNam
     * return name of cate
     * @params $new_id
     */
    public static  function getCateName($news_id){
        $categories = NewsCate::where('news_id',$news_id)
            ->join('category','category.cate_id','=','news_cate.cate_id')->get();
        return $categories;
    }
}
