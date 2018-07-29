<?php

namespace Modules\TestModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DataTables;

use Modules\TestModule\Entities\News;
use Modules\TestModule\Entities\Category;
use Modules\TestModule\Entities\NewsCate;
class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
//    public function index()
//    {
//        return view('adminmodule::index');
//
//    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function apiTable(){
        $news = news::all();
        foreach ($news as $new){
            $category = NewsCate::getCateName($new->news_id);
            $new->category = $category;
            $sample_content = substr($new->content,0,200)."...";
            $new->content = $sample_content;
            $new->image = News::getDataUrl($new->image);
        }
        return DataTables::of($news)
            ->addColumn('action', function($news){
                return view('testmodule::url',compact('news'));
            })
            ->addColumn('category',function($news){
                return view('testmodule::cate_display',compact('news'));})
            ->rawColumns(['action','category'])->make(true);

    }

    public function getCustomFilterData(Request $request)
    {
        return News::getCustomFilterData($request);
    }

//    public function test()
//    {
//        $news = news::all();
//        foreach ($news as $new){
//            $sample_content = substr($new->content,0,100);
//            $new->sub_content = $sample_content;
//            dd($new->sub_content);
//        }
//    }

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
        return view('adminmodule::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('adminmodule::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
