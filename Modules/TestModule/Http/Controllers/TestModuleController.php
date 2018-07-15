<?php

namespace Modules\TestModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TestModule\Entities\News;
use Modules\TestModule\Entities\Category;
use Modules\TestModule\Entities\NewsCate;

class TestModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $news = news::all();
/*        $posts = NewsCate::where('news_id',$news->news_id)
            ->join('category','category.cate_id','=','news_cate.cate_id')->get();*/
        return view('testmodule::index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('testmodule::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('testmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($news_id)
    {
        $news = news::where('news_id',$news_id)->first();
        $cate_name = Category::all();
        $cate_name_of_news = NewsCate::getCateName($news_id);
        return view('testmodule::edit',compact('news','cate_name','cate_name_of_news'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $list_cates = $request->cate;
        $news_update = [];
        $news_update['title'] = $request->title;
        $news_update['content'] = $request->news_content;
        $news_update['sample'] = $request->sample;
        NewsCate::where('news_id', '=',$id)->delete();
        foreach ($list_cates as $list_cate){
//            $news_cate_item = NewsCate::where('news_id',$id)->get();
//            if(count()
            $news_cate = NewsCate::where(function ($query) use ($id,$list_cate) {
                $query->where('news_id', '=', $id);
                $query->where('cate_id', '=', $list_cate);})
                ->first();
            if (empty($news_cate)){
                $news_cate = new NewsCate();
                $news_cate->news_id = $id;
                $news_cate->cate_id = $list_cate;
                $news_cate->save();
            }
        }


        News::where('news_id',$id)->update($news_update);
        return redirect('/testmodule/')->with("success","Chỉnh sửa thành công!");
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
