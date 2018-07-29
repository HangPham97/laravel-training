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
        return $this->belongsToMany('Modules\TestModule\Entities\Category','news_cate','news_id','cate_id')->withPivot('news_id', 'cate_id');
    }
    public static function getDataUrl($data)
    {
        if (!empty($data)) {
            return env("APP_URL") . "images" . "/{$data}" ;
        }
        return env("APP_URL") . '/img/placeholder.jpg';
    }

    public static function getCustomFilterData($request)
    {
        $news = News::select(['news_id', 'title', 'sample', 'content', 'image']);

        return Datatables::of($news)
            ->filter(function ($query) use ($request) {
                if ($request->has('title')) {
                    dd($request->title);
                    $query->where('title', 'like', $request->title);
                }
            })
            ->make(true);
    }
}
