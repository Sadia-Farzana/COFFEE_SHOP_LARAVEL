@extends('welcome')
<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<h1>Edit user page</h1>

	<a href="{{route('home.index')}}">Back</a>
	<form action="{{url('customer/edit/'.$user->c_id) }}" method="post" enctype="multipart/form-data">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Namename</td>
				<td><input type="text" name="name" value="{{$user->name}}"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{$user->username}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user->password}}"></td>
			</tr>

			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="{{$user->phone}}"></td>
			</tr>

			
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$user->email}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{$user->address}}"></td>
			</tr>
			<tr>
				<td>Image</td>
				<td><input type="file" name="image" value="{{$user->image}}"><br>
					<img src="{{$user->image}}"><br>
					<input type="hidden" name="old_photo" value="{{$user->image}}">
				</td>
			</tr>
			<tr>
				<td>MemberShip</td>
				<td><input type="text" name="membership" value="{{$user->membership}}" ></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
	</form>
</body>
</html>