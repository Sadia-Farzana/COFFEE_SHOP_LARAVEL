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
<body>
  <br>
  <br>
  <br>
  <br>
<center><h1>Accepted Orderlist List</h1></center>
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

       <td><center><button  onclick="document.location='/deliveryman/download/{{$takeaway->id}}'" type="button" class="btn btn-info">Download Order History</button>

   </tr>
@endforeach
</tbody>


</table>
