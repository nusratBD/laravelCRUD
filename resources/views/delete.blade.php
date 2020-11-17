<center>
<h1>User Data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td><a href="delete/{{$item['id']}}">Delete</a> 
        <a href="update/{{$item['id']}}">Update</a></td>
    </tr>
    @endforeach
</table>
</center>