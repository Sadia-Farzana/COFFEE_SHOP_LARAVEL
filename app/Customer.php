<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
	public $timestamps = false;
    protected $primaryKey = "c_id";
   protected  $fillable = ['name','username','password','phone','email','address','gender','image','membership'];
}
