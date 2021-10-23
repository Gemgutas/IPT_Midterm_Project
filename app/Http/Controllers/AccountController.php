<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;


class AccountController extends Controller
{
    public function index(){
        $list_accounts = Account::all();
        return view('pages.accounts',['list_accounts'=>$list_accounts]);
    }
}
