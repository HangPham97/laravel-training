<?php

namespace Modules\AdminModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AdminModule\Entities\News;
use Modules\AdminModule\Entities\Category;
use Modules\AdminModule\Entities\NewsCate;
class adminmoduleController extends Controller
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
        return view('adminmodule::index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $cate_name = Category::all();
        return view('adminmodule::create',compact('cate_name'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate(
            $request,
            ['title' => 'required'],
            ['title.required'=> 'this is my custom error message for required']
        );
        $news = new news();

        $news['news_id'] = $request->news_id;
        $news['title'] = $request->title;
        $news['content'] = $request->news_content;
        $news['sample'] = $request->sample;
        $list_cates = $request->cate;
        if(!empty($list_cates)){

            foreach ($list_cates as $list_cate){
                $news_cate = new NewsCate();
                $news_cate->news_id = $request->news_id;;
                $news_cate->cate_id = $list_cate;
                $news_cate->save();
            }
        }
        $news->save();
        return redirect('/adminmodule/')->with("success","Thêm thành công!");

    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function showCategory()
    {
        $cate = Category::all();
        return view('adminmodule::category',compact('cate'));
    }
    public function createCate(){

        return view('adminmodule::addCategory');
    }
    public function storeCategory(Request $request)
    {
        $cate = new Category();
        $cate->cate_id = $request->cate_id;
        $cate->name = $request->name;
        $cate->note = $request->note;
        $cate->save();
        return redirect('/adminmodule/category')->with("success","Thêm thành công!");
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
        return view('adminmodule::edit',compact('news','cate_name','cate_name_of_news'));
    }
    public function editCate($cate_id){
        $cate = Category::where('cate_id',$cate_id)->first();
        return view('adminmodule::editCategory',compact('cate'));
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
        if(!empty($list_cates)){
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
        }


        News::where('news_id',$id)->update($news_update);
        return redirect('/adminmodule/')->with("success","Chỉnh sửa thành công!");
    }

    public function updateCate(Request $request, $cate_id){
        $cate_update = [];
        $cate_update['name'] = $request->name;
        $cate_update['note']  = $request->note;
        Category::where('cate_id',$cate_id)->update($cate_update);
        return redirect('/adminmodule/category')->with("success","Chỉnh sửa thành công!");

    }

    public function deleteNews($news_id){
        News::where('news_id',$news_id)->delete();
        return redirect('/adminmodule/')->with("success","Xóa thành công!");
    }
    public function deleteCate($cate_id){
        Category::where('cate_id',$cate_id)->delete();
        NewsCate::where('cate_id',$cate_id)->delete();
        return redirect('/adminmodule/category')->with("success","Xóa thành công");
    }
    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
