<?php

namespace Modules\Blogb\Entities;

use Illuminate\Database\Eloquent\Model;

class productImages extends Model
{
    protected $table = 'productImages';
    protected $fillable = [
        'id','name','cate_id'
    ];

}
