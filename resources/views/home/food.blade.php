@extends('welcome')

<!DOCTYPE html>
<html>
<head>
	<title> User</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/d3js/6.1.1/d3.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="p-3 mb-2 bg-primary text-white">

	<h1>Menu</h1>

	<a href="{{route('home.index')}}">Back</a>
	<form method="get">
		<div class="col-md-6">
	<input type="text" name="search" id="search" class="form-control" placeholder="Search item"/>
	<div>
		{{csrf_field()}}
		@foreach($foods as $food)
		<br>
		<fieldset>
			<table class="table table-striped table-bordered">
			<legend ><h4>{{ $food->name }}</h4></legend>
    			<tr>
    				<th>ID</th>
									<th>NAME</th>
							<th>Price/item</th>
							<th>Status</th>
							<th>Ingredients</th>


				</tr>
				<tbody id="ajax">
				</tbody>
				<tbody id="stable">
				<tr>
    	        <td>{{ $food->id }}</td>
    				 <td>{{ $food->name }}</td>


          			<td>{{ $food->price }}</td>
          			<!--<td><a href="/customer/comment/<%= userList[i].id %>">review</a></td>-->
				       <td>{{ $food->status }}</td>

    				<td>{{ $food->ingredients }}</td>
    			</tr>
    			<tr>
    				<td><a href="{{route('cart.add', $food->id)}}" class="btn btn-dark">Add cart</a></td>
    			</tr>
				</tbody>
		</table>
	</fieldset>
	@endforeach
	</form>
	</div>
</body>



<script type="text/javascript">
$('#search').on('keyup',function(){
	var value =$(this).val();
	$.ajax({
	 type:'POST',
	 url:'/search',
	 data:{
		 search:value,
	 },
	 success:function(data){
		 $('#stable').hide();
		 $('#ajax').html(data);

	 },
	    error: function(jqXHR,textStatus,errorThrown){
	    console.log("ajax error:"+textStatus+':'+errorThrown);
	},
    });

});

</script>
<script type="text/javascript">
$.ajaxSetup({headers:{'csrftoken':'{{csrf_token()}}'}});
</script>
</html>
