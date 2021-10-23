<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $list_users = User::all();
        return view('pages.users',['list_users'=>$list_users]);
    }
}
