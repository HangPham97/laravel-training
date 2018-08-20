<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DataTables;

use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;
use Modules\AdminModule\Entities\NewsCate;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __construct() {
        $this->middleware('auth');
    }
    public function apiTable(Request $request)
    {
        $newses = News::select(['news.news_id', 'title', 'sample', 'content', 'image']);

        return DataTables::of($newses)
            ->filter(function ($query) use ($request) {


                if ($request->has('title')) {
                    $query->where('title', 'like', $request->get('title') . '%');
                }
//                dd($request->get('category'));
//                dd($request->get("category"));
                if ($request->get('category') != "none") {
                    $query->join('news_cate','news.news_id','=','news_cate.news_id')
                    ->where('news_cate.cate_id', $request->category);
                }
            })->addColumn('images', function (News $news) {
                $image = News::getDataUrl($news->image);
                $news->images = $image;
                return view('adminmodule::imageDisplay', compact('news'));
            })
            ->addColumn('display_sample', function (News $news) {
                $sample = substr($news->sample,0,80).' ...';
                $news->display_sample =  $sample;
                return $news->display_sample;
            })

            ->addColumn('display_content', function (News $news) {
                $sample_content = substr($news->content,0,100).' ...';
                $news->display_content =  $sample_content;
//                dd($news->display_content);
                return $news->display_content;
            })

            ->addColumn('action', function (News $news) {
                return view('adminmodule::actionNews', compact('news'));
            })
            ->addColumn('category', function (News $news) {
                $category = NewsCate::getCateName($news->news_id);
                $news->category = $category;
                return view('adminmodule::cateDisplay', compact('news'));
            })
            ->rawColumns(['action', 'category', 'images'])
            ->make(true);

    }

    public function cateDataTable(){
        $categories = Category::select(['cate_id','name','note']);
        return DataTables::of($categories)
            ->addColumn('action', function (Category $cate) {
                    return view('adminmodule::actionCategory', compact('cate'));
            })
            ->rawColumns(['action'])
            ->make(true);
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
