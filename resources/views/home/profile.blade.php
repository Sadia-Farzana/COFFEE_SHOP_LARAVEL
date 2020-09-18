<!DOCTYPE html>
<html>
<head>
	<title> User</title>
</head>
<body>

	<h1>Your Profile</h1>

	<a href="{{route('home.index')}}">Back</a>
	<form method="get">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="{{$user['username']}}"></td>
			</tr>

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{$user['name']}}"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$user['password']}}"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value="{{$user['phone']}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$user['email']}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="{{$user['address']}}" ></td>
			</tr>
			<tr>
			</tr>
		</table>
	</form>
</body>
</html>