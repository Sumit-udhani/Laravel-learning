<div>
 <h1>Users</h1>
 <table border="1px">
    <tr>
        <td>Name</td>
        <td>Email</td>

    </tr>
    @foreach($users as $user)
    <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>

    </tr>
    @endforeach
 </table>
</div>
