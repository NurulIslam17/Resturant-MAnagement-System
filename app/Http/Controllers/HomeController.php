<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index()
    {
        $data = Food::all();
        $chef = Chef::all();
        return view("home",compact("data","chef"));
    }
    public function redirect()
    {
        $data = Food::all();
        $chef = Chef::all();
        $userType = Auth::user()->usertype;
        if($userType=='1'){
            return view('admin.adminHome');
        }else{
            return view('home',compact("data","chef"));
        }
    }

    public function addCart(Request $request,$id){
        if(Auth::id()){
            $user=Auth::id();
            // dd($user_id);
            $foodId=$id;

            $cart = new Cart();
            $cart->user_id = $user;
            $cart->food_id = $foodId;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
}
