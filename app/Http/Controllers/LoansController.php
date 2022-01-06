<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loan;

class LoansController extends Controller
{
    //
    public function index(){
       $loans = loan::get();
    //    dd($users);
       return view('admin.loans.index',compact('loans'));
    }
}
