<?php

namespace Modules\TestModule\Entities;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['title','sample','content'];
    protected $table = "news";
    public $timestamps = false;
    public $incrementing = false;
    public function cate(){
        return $this->belongsToMany('Modules\TestModule\Entities\Category','news_cate','news_id','cate_id')->withPivot('news_id', 'cate_id');;
    }
}
