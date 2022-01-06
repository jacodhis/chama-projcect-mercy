<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_as == '1'){
                // dd('admin here');
                return $next($request);
                
            } //0 is user,1 is admin
            else{
                // dd('not admin');
                return redirect ('/home')->with('status','Access Denied . !! you are not Admin');
            }
            
            }else{
                return redirect ()->back()->with('status','Access Denied . !! Please Login First');
            }   
        
        }
}
