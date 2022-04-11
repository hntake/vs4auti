<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $schedule = Schedule::orderBy('created_at', 'desc')->first();
        
        if(empty($schedule)) {
            return view('create');
        }
        else{

            //scheduleより最新のデータを取得

            return view('home',compact('schedule'));
        }

    }
}
