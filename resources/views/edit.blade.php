<form action="edit" method="POST">
    @csrf
    <input type="hidden" name="id" value={{$data['id']}}>
    <input type="text" name="name" value={{$data['name']}}><br><br>
    <input type="int" name="age" value={{$data['age']}}><br><br>
    <input type="text" name="email" value={{$data['email']}}> <br><br>
    <button type="submit">Update</button>
</form>