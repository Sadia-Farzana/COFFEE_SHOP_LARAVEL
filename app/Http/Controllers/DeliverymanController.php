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
}
