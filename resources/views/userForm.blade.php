<div>
<h1>User Form</h1> 
<h2>Add user</h2>
<!-- @if($errors->any())
@foreach($errors->all() as $error)
<div style="color:red">
    {{$error}}
</div>
@endforeach
@endif -->
  <form action="addUser" method="post">
    @csrf
  <div>
 <input type="text" name="name" placeholder="Enter a userName" value="{{old('name')}}">
 <span>@error('name'){{$message}} @enderror</span>
  </div>  
 <div>
<input type="text" name="email" placeholder="Enter a email" value="{{old('email')}}">
 <span>@error('email'){{$message}} @enderror</span>

 </div>
    
    <button>Add New User</button>
  </form>
</div>
