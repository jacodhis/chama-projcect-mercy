<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;
use App\Models\account;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        // dd('admin');
        $accounts =  account::get();
        // return        
        $loans = loan::get();
        return view('admin.dashboard',compact('loans','accounts'));
    }
}
