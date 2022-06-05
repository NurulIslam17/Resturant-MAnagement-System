<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        $data = Food::all();
        $chef = Chef::all();
        return view("home", compact("data", "chef"));
    }
    public function redirect()
    {
        $data = Food::all();
        $chef = Chef::all();
        $userType = Auth::user()->usertype;
        if ($userType == '1') {
            return view('admin.adminHome');
        } else {
            $user = Auth::id();
            $count = Cart::where('user_id', $user)->count();
            return view('home', compact("data", "chef", "count"));
        }
    }

    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::id();
            // dd($user_id);
            $foodId = $id;

            $cart = new Cart();
            $cart->user_id = $user;
            $cart->food_id = $foodId;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }


    public function showCart(Request $request, $id)
    {
        $count = Cart::where('user_id', $id)->count();
        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        $delId = Cart::select('*')->where('user_id', '=', $id)->get();
        return view('showCart', compact("count", "data", "delId"));
    }

    public function removeCart($id)
    {
        $remove = Cart::find($id);
        $remove->delete();
        return redirect()->back();
    }

    // orderedConform

    public function orderedConform(Request $request)
    {
        foreach ($request->fName  as $key => $fName) 
        {
            $data = new Order();
            $data->food_name = $fName;
            $data->price = $request->fprice[$key];
            $data->quantity = $request->fquantity[$key];
            $data->user_name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }
        return redirect()->back();
    }
}
