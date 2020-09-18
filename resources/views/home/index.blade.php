@extends('welcome')
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
	@section('nav-bar')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{('/')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{('login')}}" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="{{('register')}}" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="room.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
@endsection
<br>
<br>
<br>
<br>
	<h1>Welcome home!<br>{{$users->username}}</h1>

	<a href="{{route('logout.index')}}" class="btn btn-dark" style="float:right;"> logout</a>
	<a href="{{route('home.create')}}" class="btn btn-dark" style="float:right;">Create User</a> 
	<a href="{{route('home.food')}}" class="btn btn-dark" style="float:right;">Menu</a>
	

<form method="post" enctype="multipart/form-data" align="center">
	@csrf

	
	<br>
	<br>
	<br>
	<table align="center">
		<tr>
			<td>Name</td>
			<td>{{$users->name}}</td></tr>
		<tr>
			<td>User Name</td>
			<td>{{$users->username}}</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>{{$users->password}}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$users->phone}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$users->email}}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$users->address}}</td>
		</tr>	
		<tr>
			<td>Membership</td>
			<td>{{$users->membership}}</td>
		</tr>
		</tr>
		<tr><td><a href="{{route('home.edit',$users->c_id)}}" class="btn btn-dark">Edit</a></td></tr>
	</table>
</form>
</body>
</div>
</html>