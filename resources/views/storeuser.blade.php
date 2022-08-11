<h1>Add New Member</h1>
@if(session('user'))
<h3>Data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"><br><br>
    <input type="password" name="password" placeholder="Enter user password"><br><br>
    <input type="text" name="email" placeholder="Enter user email"><br><br>
    <button type="submit">Ass User</button>
</form>