@include('common.header',['page'=>"this is home page"])
<x-message-banner msg="User Login successfully"/>
<x-message-banner msg="User signup successfully"/>
<h1>Home Page</h1>
@if($name =='sumit')
<h2>this is {{$name}}</h2>
@else
<h2>Other person</h2>
@endif
<a href="{{route('faq')}}">Go to faq page</a>
<div>
    @foreach($users as $user)
    <h2>{{$user}}</h2>
    @endforeach
</div>
