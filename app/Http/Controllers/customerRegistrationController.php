<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;

class customerRegistrationController extends Controller
{
    public function registration()
    {
        return view('registration.customerRegistration');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required|string|alpha|max:100',
        'username' => 'required|string|max:100',
        'password' => 'required|min:6',
        'phone' => 'required|string|unique:customers',
        'email' => 'required|email|unique:customers',
        'address' => 'required|string|max:200',
        'image' => 'required|mimes:jpge,jpg,png|max:5000',
        'membership' => 'string|min:4',
        
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }

    protected function create(array $data)
    {
        $user = Customer::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' =>$data['password'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'membership' => $data['membership'],
            
        ]);

         if (request()->hasFile('image')) {
        $file = request()->file('image');
//            dd($file);
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'. $extension;
        $file->move('img/profile/', $filename);
        $user->image =$filename;
        $user->save();
    }
    return $user;
    }
    
}
