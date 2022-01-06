<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;
use App\Models\account;
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
    public function index()
    {
        $accounts = auth()->user()->accounts;
        // $account = account::get();
        // dd($account);

            return view('home',compact('accounts'));
       
       
       
       
    }
}
