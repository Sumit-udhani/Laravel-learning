<div>
<h1>Add Students</h1>
<form action="/add-students" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Studend name"><br>
    <input type="email" name="email" placeholder="Enter Studend email"><br>
    <input type="text" name="phone" placeholder="Enter Studend phone"><br>
<button>Add</button>

</form>
</div>
