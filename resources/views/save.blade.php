<center>
<h1>Add Members</h1>
<form action = "save" method ="POST">
@csrf 
<input type = "text" name = "name" placeholder = "Enter Your Name"><br><br>
<input type = "email" name = "email" placeholder = "Enter Your Email"><br><br>
<input type = "password" name = "password" placeholder = "Create Your Password"><br><br>
<button type="submit">Save</button>
</form>
</center>