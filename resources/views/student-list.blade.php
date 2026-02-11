<div>
<h1>Student List</h1>

<table border="2">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>CreatedAt</td>
        <td>Operations</td>

    </tr>
    @foreach($lists as $list)
    <tr>
        <td>{{$list->name}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->phone}}</td>
        <td>{{$list->created_at}}</td>
        <td><a href="{{'delete/'.$list->id}}">Delete</a>
    <a href="{{'edit/'.$list->id}}">Edit</a>
    </td>
    </tr>
    @endforeach
</table>
</div>
