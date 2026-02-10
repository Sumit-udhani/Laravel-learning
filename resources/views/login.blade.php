<div>
<h1>Login form</h1>
<form action="/login" method="post">
@csrf
<input type="email" name="email" placeholder="Enter your email"> <br>
<input type="password" name="password" placeholder="Enter your password"> <br>
<button>Submit</button>
</form>
</div>
