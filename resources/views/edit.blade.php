<center>
    <h1>Edit User Info<h1>
    <form method = "POST" action = "/edit">
    @csrf
    <input type = "hidden" name = "id" value = "{{$data['id']}}"><br><br>
    <input type = "text" name = "name" value = "{{$data['name']}}"><br><br>
    <input type = "eamil" name = "email" value = "{{$data['email']}}"><br><br>
    <button type="submit">Edit Now</button>
    </form>
</center>