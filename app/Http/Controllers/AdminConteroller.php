<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;


class AdminConteroller extends Controller
{
    public function user(){
        $data = user::all();
        return view('admin.user',compact("data"));
    }

    public function deleteUser($id){
        $del = User::find($id);
        $del->delete();
        return redirect()->back();
    }

    public function food(){
        return view('admin.food');
    }

    public function addFood(Request $request){
        $data = new Food();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $image=$request->img;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->img-> move('FoodImage',$imageName);
        $data->image=$imageName;
        $data->Save();
        return redirect()->back();

    }

    public function chef(){
        return view('admin.chef');
    }

    public function reservation(){
        return view('admin.reservation');
    }
}
