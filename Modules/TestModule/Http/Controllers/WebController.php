<?php

namespace Modules\TestModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\TestModule\Entities\News;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function getChart()
    {

        $months_count = DB::table("news")
            ->select(DB::raw("extract(MONTH from created_at) as month"), DB::raw("(COUNT(*)) total_news"))
            ->groupBy(DB::raw("extract(MONTH from created_at)"))
            ->orderBy(DB::raw("extract(MONTH from created_at)"))
            ->get();
        $data = news::renameMonth($months_count);
        $data = json_encode($data);
//        dd($data);
        return view('testmodule::chartTemplate', compact('data'));
    }

    public static function test()
    {
        $months_count = DB::table("news")
            ->select(DB::raw("extract(MONTH from created_at) as month"), DB::raw("(COUNT(*)) total_news"))
            ->groupBy(DB::raw("extract(MONTH from created_at)"))
            ->orderBy(DB::raw("extract(MONTH from created_at)"))
            ->get();

        foreach ($months_count as $month_count) {
            $data[] = $month_count->total_news;

            $label[] = News::renameMonth($month_count);
        }

        $data = json_encode($data);
//        $label = json_encode($label);
        dd($label);
        return view('testmodule::chartTemplate', compact('data', 'label'));
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
    public function edit()
    {
        return view('testmodule::edit');
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
