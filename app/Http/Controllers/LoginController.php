<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

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

    function userlogin(Request $req)
    {
       $validation = Validator::make($req->all(), [
            'username'=>'bail|required|exists:users,username',
            'password'=>'required|exists:users,password'

        ]);

        if($validation->fails()){
            return back()
                    ->with('errors', $validation->errors())
                    ->withInput();

            return redirect()->route('/login')
                            ->with('errors', $validation->errors())
                            ->withInput();
            }

            else {
                 $user = DB::table('users')
                    ->where('username', $req->username)
                    ->where('password', $req->password)
                    ->first();
         if ( $user) {

         if($user->userType=='deliveryman'){
                   $req->session()->put('username', $req->username);
                   return redirect()->route('deliveryman.index');
               }

               else{

                   return redirect()->route('login.index');
               }
         }
         else
         {
           $req->session()->flash('msg', 'Please,cheack Your username and password again');
           return redirect()->route('login.index');
         }


          // }


             }
   }
}
