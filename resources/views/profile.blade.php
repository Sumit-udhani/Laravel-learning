<div>
<h1>
Profile page
</h1>
@if(session('email'))
<h2> welcome {{session('email')}}</h2>
<a href="/logout">Logout</a>
@else
<h1>No session found</h1>
<a href="/login">Login</a>
@endif
</div>
