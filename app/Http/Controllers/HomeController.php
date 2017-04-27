<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              // $users= \App\User::all();
        $users= DB::table('users')
                ->where('approved',1)
                ->orderBy('dateGraduated', 'asc')
                ->get();

      
        return view('home',['all_users'=>$users]);
    }
}
