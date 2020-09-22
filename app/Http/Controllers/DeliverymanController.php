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
    function takeaway(Request $request){

     	$takeaway = DB::table('takeaway')
                        ->where('status','pending')
                        ->orderby('id','desc')
                        ->get();

 		return view('deliveryman.takeaway')
                     ->with('takeaway',$takeaway);
     }

     public function accept($id){

       $accept = DB::table('takeaway')
                  ->where('id',$id)
                   ->update( ['status' =>'accepted' ]);

       return redirect()->route('deliveryman.accept');
   }

   function Acceptedlist(Request $request){

      $takeaway = DB::table('takeaway')
                       ->where('status','accepted')
                       ->orderby('id','desc')
                       ->get();

     return view('deliveryman.accept')
                    ->with('takeaway',$takeaway);
    }
    public function export( $id)
       {
           $data = DB::table('takeaway')->where('id',$id)->orderBy('id','DESC')->first();
           $proData="";
           if(count((array)$data)>0){
               $proData .='<table align="center">
               ';

               foreach ($data as $key=>$item) {
                    $proData .='
                    <tr>
                    <td>'.$key.'</td>
                    <td align="center">'.$item.'</td>
                    </tr>';
               }
               $proData .='</table>';
           }
           header('Content-Type: application/xls');
           header('Content-Disposition: attachment; filename=order receipt.xls');
           echo $proData;
           //var_dump($data);
           //echo count($data);
           //return response()->json($data);
       }



}
