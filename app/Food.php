<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $timestamps = false;
    protected $primaryKey = "id";
    protected  $fillable = ['name','price','discount_amount','status','ingredients','image','suggested'];
}
