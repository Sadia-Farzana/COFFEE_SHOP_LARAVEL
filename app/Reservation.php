<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservation";
	public $timestamps = false;
    protected $primaryKey = "id";
   protected  $fillable = ['fname','lname','date','time','email','phone','message','person'];
}
