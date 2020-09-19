@extends('welcome')
<h2>Checkout</h2>

<h3>Order Information</h3>
<form action="{{route('orders.store')}}" method="post">
	@csrf
	

	<table>
	<tr>	
		<div class="form-group">
		<td><label for="firstname">Full Name</label></td>
		<td><input type="text" name="shipping_name" id="" class="form-control"></td>
		</div>
	</tr>

	<tr>
	<div class="form-group">
		<td><label>Address</label></td>
		<td><input type="text" name="shipping_address" id="" class="form-control"></td>
	</div>
	</tr>

	<tr>
		<div class="form-group">
		<td><label>City</label></td>
		<td><input type="text" name="shipping_city" id="" class="form-control"></td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		<td><label>Phone</label></td>
		<td><input type="text" name="shipping_phone" id="" class="form-control"></td>
		</div>
	</tr>

	<tr>
		<div class="form-group">
		<td><label>Notes</label></td>
		<td><input type="text" name="shipping_notes" id="" class="form-control"></td>
		</div>
	</tr>

	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-primary">Place order</button></td>
	</tr>
	</table>
</form>