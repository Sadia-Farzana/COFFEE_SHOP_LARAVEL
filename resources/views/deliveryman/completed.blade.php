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
            <li class="nav-item"><a href="{{('Completedlist')}}" class="nav-link">Completed List</a></li>

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

<center><h1>Completed Delivery List</h1></center>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
  <tr>
      <th> Id</th>
      <th>Order Id</th>
      <th>User Name</th>
      <th>Order Status</th>
      <th>Total Amount</th>
      <th>Total Items</th>
      <th>Is Paid</th>
      <th>Payement Method</th>
      <th>Shipping Name</th>
      <th>Shipping Address</th>
      <th>Contact No</th>

      <th>Note</th>


  </tr>
</thead>


<tbody>
@foreach($takeaway as $takeaway)
  <tr>

      <td>{{$takeaway->id}} </td>
      <td>{{$takeaway->order_number}} </td>
      <td>{{$takeaway->user}}</td>
      <td>{{$takeaway->status}}</td>
      <td>{{$takeaway->grand_total}}</td>
      <td>{{$takeaway->item_count}} </td>
      <td>{{$takeaway->is_paid}} </td>
      <td>{{$takeaway->payment_method}} </td>
      <td>{{$takeaway->shipping_name}} </td>
      <td>{{$takeaway->shipping_address}} </td>
      <td>{{$takeaway->shipping_phone}} </td>
      <td>{{$takeaway->shipping_notes}} </td>


   </tr>
@endforeach
</tbody>


</table>
