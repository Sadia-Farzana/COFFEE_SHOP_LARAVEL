@extends('welcome')
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
  <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="abc/style.css">
<!-- BOOTSTRAP STYLES-->
<link href="/abc/css/bootstrap.css" rel="stylesheet" />
 <!-- FONTAWESOME STYLES-->
<link href="/abc/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
<link href="/abc/css/custom.css" rel="stylesheet" />
 <!-- GOOGLE FONTS-->
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
<body>
<hr>
<center><h1>All Take Away List</h1></center>
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
   <tr>
     <th> Id</th>
       <th>Order Id</th>
       <th>User Name</th>
       <th>Order Status</th>
       <th>Total Items</th>
       <th>Is Paid</th>
       <th>Payement Method</th>
       <th>Shipping Name</th>
       <th>Shipping Address</th>
       <th>Contact No</th>
       <th>Phone</th>
       <th>Note</th>
       <th><center>Option</center></th>

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

       <td><center><button  onclick="document.location='/deliveryman/accept/{{$takeaway->id}}'" type="button" class="btn btn-info">Accept</button>
           <button  type="button" onclick="document.location='/deliveryman/reject/{{$takeaway->id}}'" class="btn btn-danger">Decline</button></center></td>

   </tr>
@endforeach
</tbody>


</table>
