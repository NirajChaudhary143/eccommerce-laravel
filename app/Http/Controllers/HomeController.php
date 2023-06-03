<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        $usertype = Auth::user()->user_type;
        if($usertype == '0'){
            return view('home.userpage');
        }
        elseif($usertype == '1'){
            return view('admin.home');
        }
    }
    public function userPage(){
        return view('home.userpage');
    }

    
}
