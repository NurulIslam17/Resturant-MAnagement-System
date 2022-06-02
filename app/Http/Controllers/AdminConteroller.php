<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\reservation;
use App\Models\Chef;

class AdminConteroller extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.user', compact("data"));
    }

    public function deleteUser($id)
    {
        $del = User::find($id);
        $del->delete();
        return redirect()->back();
    }

    public function food()
    {
        return view('admin.food');
    }

    public function addFood(Request $request)
    {
        $data = new Food();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $image = $request->img;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->img->move('FoodImage', $imageName);
        $data->image = $imageName;
        $data->Save();
        return redirect('/viewFood');
    }
    // View Foods
    public function viewFood()
    {
        $data = Food::all();
        return view('admin.viewFood', compact("data"));
    }

    //delete food menu
    public function deleteFood($id)
    {
        $delFood = Food::find($id);
        $delFood->delete();
        return redirect()->back();
    }
    //update food
    public function updateFood($id)
    {
        $data = Food::find($id);
        return view('admin.updateFood', compact("data"));
    }
    //Update food menu
    public function update(Request $request, $id)
    {
        $data = Food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->desc = $request->desc;

        $image = $request->img;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->img->move('FoodImage', $imageName);
        $data->image = $imageName;
        $data->Save();
        return redirect('/viewFood');
    }

    //Make a reservation
    public function reserveTable(Request $request)
    {
        $data = new reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->data = $request->date; // data means date in DB
        $data->time = $request->time;
        $data->msg = $request->message;
        $data->save();
        return redirect()->back();
    }
    //add chef
    public function addChef(){
        return view('admin.addChef');
    }
    //Upload chef
    public function uploadchef(Request $request){
        $chefData = new Chef();
        $chefData->name = $request->name;
        $chefData->speciality = $request->speciality;

        $chefImg= $request->image;
        $imageName = time().'.'.$chefImg->getClientOriginalExtension();
        $chefImg->move('ChefImage',$imageName);
        $chefData->image = $imageName;
        $chefData->save();
        return redirect('/chef');
    }

    //chef
    public function chef()
    {
        return view('admin.chef');
    }

    //reservetion
    public function reservation()
    {
        $data = reservation::all();
        return view('admin.reservation', compact("data"));
    }

    // delete reservation
    public function deleteReservation($delReserve){
        $del = reservation::find($delReserve);
        $del->delete();
        return redirect()->back();
    }
}
