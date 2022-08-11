<h1>This is the list of members</h1>

<table border="1px">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Email</td>
        <td>Operation</td>

        
    </tr>
    @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->email}}</td>
        
    </tr>
    @endforeach
</table>

