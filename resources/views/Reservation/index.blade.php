@extends('welcome')
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <link href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" defer></script>

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
            <li class="nav-item"><a href="{{('takeaway')}}" class="nav-link">Takeaway List</a></li>
            <li class="nav-item"><a href="{{('Acceptedlist')}}" class="nav-link">Acceptedlist</a></li>
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

<hr>
<body>

<div id="page-wrapper" >
           <div id="page-inner">
           <center><h1>Book A Table</h1></center>
<hr/>

    <center>
      <form method="post">
        @csrf

        <div class="form-group row">
   <label  class="col-sm-2 col-form-label" >FirstName</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="fname"  >
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Last Name</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" name="lname" >
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label" >Date</label>
   <div class="col-sm-10">
     <input type="date" class="form-control" name="date" >
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Time</label>
   <div class="col-sm-10">
     <input type="time" class="form-control" name="time">
   </div>
 </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Email</label>
   <div class="col-sm-10">
     <input type="email" class="form-control" name="email">
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Phone</label>
   <div class="col-sm-10">
     <input type="message" class="form-control" name="phone"/>
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Number of Guest</label>
   <div class="col-sm-10">
     <input type="message" class="form-control" name="person"/>
   </div>
 </div>
 <div class="form-group row">
   <label  class="col-sm-2 col-form-label">Message</label>
   <div class="col-sm-10">
     <input type="message" class="form-control" name="message"/>
   </div>
 </div>

<center>
<h4 style="color: red"> @foreach($errors->all() as $err)
   {{$err}} <br>
 @endforeach</h4>
{{session('msg')}}
</center>

 <div class="form-group row">
   <label class="col-sm-2 col-form-label"></label>
   <div class="col-sm-10">
     <center><button type="submit"  class="btn btn-primary" >Book Table</button></center>
   </div>
 </div>
</form>

</center>

   </div>
            <!-- /. PAGE INNER  -->


</body>
</html>
