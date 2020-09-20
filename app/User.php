<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
      protected $table = "users";
	  	public $timestamps = false;
	    protected $primaryKey = "id";
	    protected  $fillable = ['name','username','password','phone','address','gender','email','salary','image','userType'];

}
