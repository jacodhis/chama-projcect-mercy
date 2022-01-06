<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\account;

class AccountsController extends Controller
{
    //
    public function borrow($userId){
       $user = User::findorFail($userId);
    //    $accounts = account::where('user_id',)
    }
    public function deposit(){
        // dd('hi');
        return view('accounts.deposit');
    }
    public function userdeposits($userId){
         dd($userId);
    }
}
