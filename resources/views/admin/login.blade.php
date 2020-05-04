<!DOCTYPE html>
<html>
<head>
	<title>BattleC19</title>
</head>
<body>
<form method="post" action="{{url('admin/authenticate')}}">
	{{ csrf_field() }}
	<table>
		<tr>
			<td>Email</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Login"></td>
		</tr>
	</table>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>