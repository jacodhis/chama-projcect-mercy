<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class MebersController extends Controller
{
    //
    public function index(){
        $users = User::where('id',"!=",auth()->user()->id)->get();
        return view('admin.members.index',compact('users'));
    }
    public function moreinformation($memberId){
       $user = User::findorFail($memberId);
       return view('admin.members.moreinformation',compact('user'));
    }
    public function destroy($memberId){
        $user = User::findorFail($memberId);
        $user->delete();

        return back()->with('success','member deleted successfully');
     }
}
