<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //インスタンスクラスを読み込み
use Validator;
use App\Models\Time;
use App\Models\Schedule;
use App\Models\Treatment;

class TimeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index($schedule_id)
    {


       $schedule = Schedule::findOrFail($schedule_id);
       $times = $schedule -> times()->get();
       dd($times);



        return view('admin.time.index',
        compact('times'));


    }


    public function create(Schedule $schedule)
    {
         return view('admin.time.create', compact('schedule'));
    }


    public function store(Request $request, Schedule $schedule)
    {
        $time = new Time;
        $time->schedule_id = $schedule -> id;
        $time->time = $request->time;
        $time->content = $request->content;
        $time->is_move = $request->is_move;
        $time->risk_title1 = $request->risk_title1;
        $time->risk_content1 = $request->risk_content1;
        $time->risk_title2 = $request->risk_title2;
        $time->risk_content2 = $request->risk_content2;
        $time->risk_title3 = $request->risk_title3;
        $time->risk_content3 = $request->risk_content3;
        // dd($time);
        $time->save();

        return redirect()->route('admin.time.index',$schedule->id);
    }


    public function show($id)
    {
//
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
