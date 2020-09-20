<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    function index(){
    	return view('login.index');
    }

    function verify(Request $request){


        $data = DB::table('customers')
                    ->where('username', $request->username)
                    ->where('password', $request->password)
                    ->get();

        //print_r($data);
        //echo $data[0]->type;

    	if(count($data) > 0 ){
           $request->session()->put('username', $request->username);
    		   return redirect()->route('home.index');
    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login.index');
        }
    }

    function userlogin(Request $request)
    {
          $user = new User;
          $test=$user->where('username',$request->username)
                 ->where('password',$request->password)
                 ->get();

         if(count($test) > 0){

               if($test[0]['userType']=="deliveryman")
               {

                 $request->session()->put('username',$request->username);
                   return redirect()->route('deliveryman.index');
               }
               else
               {
                 return redirect('login.index');
               }
         }
         else{
           $request->session()->flash('msg','Invalid username/password');
           return redirect()->route('login.index');
         }
   }
}
