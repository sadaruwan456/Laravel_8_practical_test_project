<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>
        Registration Page
    </h1>
<form action="regi" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name..."><br><br>
    <input type="text" name="email" placeholder="email..."><br><br>
    <input type="text" name="address" placeholder="Address..."><br><br>
    <button type="submit">Register</button>
</form>
</body>
</html>
