<?php

namespace Modules\TestModule\Entities;

use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model
{
    protected $fillable = ['news_id','cate_id'];
    protected $table = "news_cate";
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
