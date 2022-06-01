<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    public function index()
    {
        $data = Food::all();
        return view("home",compact("data"));
    }
    public function redirect()
    {
        $data = Food::all();
        $userType = Auth::user()->usertype;
        if($userType=='1'){
            return view('admin.adminHome');
        }else{
            return view('home',compact("data"));
        }
    }
}
