<?php

namespace Modules\TestModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TestModule\Entities\Category;
use Modules\TestModule\Entities\NewsCate;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function show()
    {
        $cate = Category::all();
        return view('testmodule::categoryTable', compact('cate'));
    }

    public function create()
    {

        return view('testmodule::addCategory');
    }

    public function store(Request $request)
    {
        $cate = new Category();
        $cate->cate_id = $request->cate_id;
        $cate->name = $request->name;
        $cate->note = $request->note;
        $cate_search = Category::where('cate_id',$cate->cate_id)->first();
        if(!empty($cate_search)){
            return redirect('/testmodule/create/category')->with("success", "ID này đã tồn tại", compact('cate'))->withInput($request->input());
        } else {
            $cate->save();
            return redirect('/testmodule/category')->with("success", "Thêm thành công!");
        }
    }

    public function edit($cate_id)
    {
        $cate = Category::where('cate_id', $cate_id)->first();
        return view('testmodule::editCategory', compact('cate'));
    }

    public function update(Request $request, $cate_id)
    {
        $cate_update = [];
        $cate_update['name'] = $request->name;
        $cate_update['note'] = $request->note;
        Category::where('cate_id', $cate_id)->update($cate_update);
        return redirect('/testmodule/category')->with("success", "Chỉnh sửa thành công!");

    }

    public function delete($cate_id)
    {
        Category::where('cate_id', $cate_id)->delete();
        NewsCate::where('cate_id', $cate_id)->delete();
        return redirect('/testmodule/category')->with("success", "Xóa thành công");
    }
}