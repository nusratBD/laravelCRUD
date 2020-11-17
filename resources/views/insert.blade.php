<center>
<h1>Register New User</h1>
<form method="POST" action="insert">
@csrf
<input type="text" name="name" placeholder="Name"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<button type="submit">Register Now</button>
</form>
</center>