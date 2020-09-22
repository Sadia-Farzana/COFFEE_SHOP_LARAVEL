<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Takeaway extends Model
{
      protected $table = "takeaway";
	  	public $timestamps = false;
	    protected $primaryKey = "id";
	    protected  $fillable = ['order_number','user','status','grand_total','item_count','is_paid','payment_method','shipping_name','shipping_address','shipping_city','shipping_phone','shipping_notes'];

}
