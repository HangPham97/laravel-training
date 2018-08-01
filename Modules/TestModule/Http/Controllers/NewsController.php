<?php

namespace Modules\TestModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TestModule\Entities\News;
use Modules\TestModule\Entities\Category;
use Modules\TestModule\Entities\NewsCate;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('testmodule::index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $cate_name = Category::all();
        return view('testmodule::create', compact('cate_name'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $news = new news();
        $news['news_id'] = $request->news_id;
        $news['title'] = $request->title;
        $news['content'] = $request->news_content;
        $news['sample'] = $request->sample;
        if ($request->hasFile('image')) { //check if has input image
            $img = $request->file('image')->getClientOriginalName();
            $request->image->move('images', $img); //move image to serve
            $news['image'] = $img;
        }
        $news_search = news::where('news_id', $news['news_id'])->first();
        if (!empty($news_search)) {
            return redirect('/testmodule/create')->with("success", "ID này đã tồn tại", compact('news'))->withInput($request->input());
        } else{
            $new_list_cates = $request->cate;
            if (!empty($new_list_cates)) {
                foreach ($new_list_cates as $list_cate) {
                    $news_cate = new NewsCate();
                    $news_cate->news_id = $request->news_id;;
                    $news_cate->cate_id = $list_cate;
                    $news_cate->save();
                }
            }
            $news->save();
            return redirect('/testmodule/news')->with("success", "Thêm thành công!");
        }
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($news_id)
    {
        $news = news::where('news_id', $news_id)->first();
        $cate_name = Category::all();
        $cate_name_of_news = NewsCate::getCateName($news_id);
        return view('testmodule::edit', compact('news', 'cate_name', 'cate_name_of_news'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $news_update = [];
        $news_update['title'] = $request->title;
        $news_update['content'] = $request->news_content;
        $news_update['sample'] = $request->sample;
        $list_cates = $request->cate;
        if ($request->hasFile('image')) {
            $img = $request->file('image')->getClientOriginalName();
            $request->image->move('images', $img);
            $news_update['image'] = $img;
        }
        NewsCate::where('news_id', '=', $id)->delete();
        if (!empty($list_cates)) {
            foreach ($list_cates as $list_cate) {
                $news_cate = NewsCate::where(function ($query) use ($id, $list_cate) {
                    $query->where('news_id', '=', $id);
                    $query->where('cate_id', '=', $list_cate);
                })
                    ->first();
                if (empty($news_cate)) {
                    $news_cate = new NewsCate();
                    $news_cate->news_id = $id;
                    $news_cate->cate_id = $list_cate;
                    $news_cate->save();
                }
            }
        }


        News::where('news_id', $id)->update($news_update);
        return redirect('/testmodule/news')->with("success", "Chỉnh sửa thành công!");
    }

    public function delete($news_id)
    {
        News::where('news_id', $news_id)->delete();
        NewsCate::where('news_id', $news_id)->delete();
        return redirect('/testmodule/news')->with("success", "Xóa thành công!");
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
