<center>
<h1>User Data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Profile Pic</td>
    </tr>
    @foreach($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td><img src="{{$item['avatar']}}"></td>
    </tr>
    @endforeach
</table>
</center>