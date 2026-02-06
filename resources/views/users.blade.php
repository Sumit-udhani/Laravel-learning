<div>
<h1>Users List</h1>
<!-- {{print_r($users)}} -->
 <table border="1">
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
