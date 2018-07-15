<?php

namespace Modules\Blogb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Blogb\Entities\productImages;
class BlogbController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $slide = productImages::where('cate_id','slide')->get();
        $logo = productImages::where('cate_id','logo')->get();
        $ava = productImages::where('cate_id','ava')->get();
        $men = productImages::where('cate_id','men')->get();
        $women = productImages::where('cate_id','women')->get();
        $blog = productImages::where('cate_id','blog')->get();
        $best_seller = productImages::where('cate_id','best_seller')->get();
        $new_product = productImages::where('cate_id','new_product')->get();
        return view('blogb::index',compact('slide','logo','ava','men','women','blog','best_seller','new_product'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('blogb::create');
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
        return view('blogb::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('blogb::edit');
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
