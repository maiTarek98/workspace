<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use App\User;
use DB;

class adminController extends Controller
{
    public function index()
    {
        $usersNo = DB::table('users')->count();
        $userlatest=Subscribe::orderBy('id','desc')->take(2)->get();
        return view('admin/index',compact('usersNo','userlatest'));
    }
    
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('home');
      }
}
