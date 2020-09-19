@extends('welcome')

<!DOCTYPE html>
<html>
<head>
	<title> User</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="p-3 mb-2 bg-primary text-white">
	<h1>Menu</h1>

	<a class="btn btn-primary" href="{{route('home.index')}}">Back</a>
	<h3 align="center">Total Data : <span id="total_records"></span></h3>

	<form method="get">
	<div class="col-md-6">
<input type="text" name="search" id="search" class="form-control" placeholder="Search item"/>
<div>

		<br>
		<fieldset>
	<table class="table table-striped table-bordered">

    			<thread>
    				<th>ID</th>
						<th>Name</th>
    					<th>Price/item</th>
							<th>Status</th>
								<th>Ingredients</th>
								<!--<td><a href="/customer/comment/<%= userList[i].id %>">review</a></td>-->
				</thread>
				<tbody>

				</tbody>
    			<tr>
    			</tr>
		</table>
	</fieldset>

	</form>
	</div>
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){

 search();

 function search(query = '')
 {
  $.ajax({
   url:"{{ route('Sfood.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
search(query);
 });
});
</script>
