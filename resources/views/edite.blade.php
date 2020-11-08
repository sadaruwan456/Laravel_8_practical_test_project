<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
    <h1>
        User Update Page
    </h1>
<form action="/update" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="name" value="{{$data['name']}}"><br><br>
    <input type="text" name="email" value="{{$data['email']}}"><br><br>
    <input type="text" name="address" value="{{$data['address']}}" ><br><br>
    <div class="dbtn">
        <button class="btn1" type="submit">Update</button>
        <button class="btn2"><a href="/user">Back</a></button>

    </div>
<style>
    .dbtn{
        display: flex;
        flex-direction: row;
    }

    .btn1{
        margin-left: 20px;
        margin-right: 50px;
    }


</style>
</form>
</body>
</html>
