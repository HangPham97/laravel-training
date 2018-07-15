<?php

namespace Modules\TestModule\Entities;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    protected $fillable = ['cate_id','name','note'];
    public function news(){
        return $this->belongsTo('Modules\TestModule\Entities\News');
    }
}
