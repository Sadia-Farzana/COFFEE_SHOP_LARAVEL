@extends('welcome')
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
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
            <li class="nav-item"><a href="{{route('home.food')}}" class="nav-link">Menu</a></li>
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
            <li class="nav-item"><a href="{{route('logout.index')}}" class="nav-link">LogOut</a></li>
            <li class="nav-item cart"><a href="{{route('cart.index')}}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center">
            <small>
            	{{Cart::getContent()->count()}}
            </small></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
@endsection
<br>
<br>
<br>
<br>
<body>
	<h2>Cart</h2>
<div class="cart-list">
<table class="table">
	<thead class="thead-primary">
		<tr class="text-center">
			<th>Name</th>
			<th>price</th>
			<th>Quantity</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody class="text-center">
		@foreach($carts as $cart)
		<tr>
			<td class="price">{{$cart->name}}</td>
			<td class="price">
				{{Cart::get($cart->id)->getPriceSum()}}
			</td>
			<td >
				<form action="{{route('cart.update',$cart->id)}}">
				{{csrf_field()}}
					<input type="number" name="quantity"  value="{{$cart->quantity}}">
					<input type="submit" value="Save" min="1" max="100">
				</form>	
			</td>
			<td class="product-remove">
				<a href="{{route('cart.destroy',$cart->id)}}"><span class="icon-close">Delete</span></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<h2 class="total">Total Price: {{Cart::getSubTotal()}}</h2>	
<a href="{{ route('cart.checkout') }}" class="btn btn-primary" role="button">CheckOut</a>
</body>
</html>