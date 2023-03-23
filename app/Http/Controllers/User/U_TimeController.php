<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Time; //Elquentエロクアント
use App\Models\Schedule;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\DB; //QueryBuilderクエリビルダ

class U_TimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:users');
    }
    public function show($id)//timeのIDが入る
    {

        //whereHas() -> 対象のモデルに紐づく別のモデルに対して条件を付与して検索クエリを発行する
       $time = Time::whereHas('schedule',function($query){
        $query -> where('user_id',Auth::user()->id);
       }) ->find($id);

     dd($time);
        return view('user.time.show',
        compact('time'));


    }


}
