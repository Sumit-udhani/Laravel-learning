<div>
<h1>Student List</h1>
<form action="search" method ="get">
    <input type="text" name="search" placeholder="Search by name">
    <button>Search</button>
</form>
<form action="delete-multi" method="post">
    @csrf
    <button>Delete</button>
<table border="2">
    <tr>
        <td>Section</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>CreatedAt</td>
        <td>Operations</td>

    </tr>
    @foreach($lists as $list)
    <tr>
        <td><input type="checkbox" name="ids[]" value="{{$list->id}}"></td>
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
</form>
</div>
{{$lists->links()}}
<style>
    .w-5.h-5{
        width: 20px;
    }
</style>