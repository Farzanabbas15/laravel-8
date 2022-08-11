<h1>login user</h1>

<form action="user" method="POST">
    @csrf
<input type="text" name="user" placeholder="Enter user name "/> <br><br>
<input type="password" name="password" placeholder="Enter user password "/><br><br>
<button>login</button>

</form>