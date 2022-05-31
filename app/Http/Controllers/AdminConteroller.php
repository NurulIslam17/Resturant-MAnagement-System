<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


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

    public function chef(){
        return view('admin.chef');
    }

    public function reservation(){
        return view('admin.reservation');
    }
}
