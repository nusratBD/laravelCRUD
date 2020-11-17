<center>
<h1>Update User Data</h1>
<form method="POST" action="/updateSuccess">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}"><br><br>
<input type="text" name="name" value="{{$data['name']}}"><br><br>
<input type="email" name="email" value="{{$data['email']}}"><br><br>
<button type="submit">Update Now</button>
</form>
</center>