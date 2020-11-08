<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Login Page</h1>


<form action="users" method="POST">
    @csrf
<span>Username</span>



<input type="text" class="username" name="username" placeholder="type your Username.."><br>
<span style="color: red">@error('username'){{$message}}@enderror</span>
<br><br>

<span>Password</span>
<input type="password" class="password" name="password" placeholder="type your password..."><br>
<span style="color: red">@error('password')
{{$message}}
@enderror</span>
<br><br>
<button type="submit">Login</button>
</form>
</body>
</html>
