<h1>This is a User Page</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>address</td>
        <td>Delete</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href={{'remo/'.$item['id']}}>delete</a></td>
    </tr>

    @endforeach
</table>
<br><br>
<a href="/newuser"><button>New User</button></a>

{{-- <span>{{$collection->links()}}</span>

<style>
    .w-5{
        display: none;
    }
</style> --}}
