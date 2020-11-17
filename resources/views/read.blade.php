<center>
    <h1>All Users Data</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach($data as $data)
        <tr>
            <td>{{$data['id']}}</td>
            <td>{{$data['name']}}</td>
            <td>{{$data['email']}}</td>
            <td><a href="dlt/{{$data['id']}}">Delete</a> <a href="edit/{{$data['id']}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</center>