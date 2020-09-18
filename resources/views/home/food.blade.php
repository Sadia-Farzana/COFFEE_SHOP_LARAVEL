@extends('welcome')

<!DOCTYPE html>
<html>
<head>
	<title> User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="p-3 mb-2 bg-primary text-white">

	<h1>Menu</h1>

	<a href="{{route('home.index')}}">Back</a>
	<form method="get">
		
		{{csrf_field()}}
		@foreach($foods as $food)
		<br>
		<fieldset>
		<table class="center">
			<legend ><h4>{{ $food->name }}</h4></legend>
    			<tr>
    				<th>ID</th>
    				<td>{{ $food->id }}</td>
				</tr>
				<tr>
    				<th>NAME</th>
    				<td>{{ $food->name }}</td>
				</tr>
				<tr>
          			<th>Price/item</th>
          			<td>{{ $food->price }}</td>
          			<!--<td><a href="/customer/comment/<%= userList[i].id %>">review</a></td>-->
				</tr>
				<tr>
    				<th>Status</th>
    				<td>{{ $food->status }}</td>
				</tr>
				<tr>
    				<th>Ingredients</th>
    				<td>{{ $food->ingredients }}</td>
    			</tr>
		</table>
	</fieldset>
	@endforeach
	</form>
	</div>
</body>
</html>