<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class PublicController extends Controller{
    function index(){
        
        // $users= \App\User::all();
        $users= DB::table('users')
                ->where('approved',1)
                ->get();

      
        return view('public.index',['all_users'=>$users ]);
    }

}
