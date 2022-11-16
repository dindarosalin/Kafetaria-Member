<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class memberController extends Controller
{
    //
    public function card()
    {
        //dd(Auth::user());
        return view("member.member");
    }

    public function list()
    {
        $users = DB::table('users')->get();
        return view("member.list", [
            'users' => $users
        ]);
    }
}
