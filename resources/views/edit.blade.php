<div>
<h1>Update data</h1>
<form action="/update-student/{{$data->id}}" method="post">
@csrf
<input type="hidden" name="_method" value="put">
<label for="name">Name:</label>
<input type="text" name="name" value="{{$data->name}}"><br>
<label for="email">Email:</label>
<input type="text" name="email" value="{{$data->email}}"><br>
<label for="phone">Phone:</label>
<input type="text" name="phone" value="{{$data->phone}}"><br>
<button>Update Student</button>
</form>
</div>
