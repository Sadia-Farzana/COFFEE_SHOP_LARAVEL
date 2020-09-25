<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use App\Reservation;
class ReservationController extends Controller
{
      public function index()
      {
          return view('Reservation.index');
      }

      public function insert(Request $request)
      {
          $validation = Validator::make($request->all(), [
          'fname' => 'required|string|alpha|max:100',
          'lname' => 'required|string|alpha|max:100',
          'date' => 'required|string|max:100',
          'time' => 'required',
          'email' => 'required|email|unique:reservation',
          'phone' => 'required|string|unique:customers',
          'message' => 'required|string|max:300',
          'person' => 'required|max:100',


          ]);
          if($validation->fails()){
              return back()
                      ->with('errors', $validation->errors())
                      ->withInput();

              return redirect()->route('Reservation.index')
                              ->with('errors', $validation->errors())
                              ->withInput();
              }

                else
               {
         DB::table('reservation')->insert([
              'fname' =>$request->fname ,
              'lname' =>$request->lname ,
              'date' =>$request->date ,
              'time' =>$request->time ,
              'email' =>$request->email ,
              'phone' => $request->phone,
              'message' => $request->message,
              'person' => $request->person,

          ]);
          return redirect()->route('Reservation.index');


        }


      }
}
