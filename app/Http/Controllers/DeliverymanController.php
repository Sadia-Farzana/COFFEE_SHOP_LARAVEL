<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class DeliverymanController extends Controller
{

  function index(Request $request){

      $users = DB::table('users')->where('username',$request->session()->get('username'))->first();
      //$user =
      return view('deliveryman.index')->with('users', $users);
      //echo $request->session()->get('username');
  }
  function edit($id){
      $user = User ::find($id);
    return view('deliveryman.edit')->with('user', $user);

  }

  function update($id, Request $request){


      $user =User::find($id);
      $user->name         = $request->name;
      $user->username     = $request->username;
      $user->password     = $request->password;
      $user->phone        = $request->phone;
      $user->gender        = $request->gender;
      $user->email        = $request->email;
      $user->address      = $request->address;

      if (request()->hasFile('image')) {
      $file = request()->file('image');
//            dd($file);
      $extension = $file->getClientOriginalExtension();
      $filename = time().'.'. $extension;
      $file->move('img/profile/', $filename);
      $user->image =$filename;
      $user->save();
  }

      $user->save();

    return redirect()->route('deliveryman.index');

  }
}
