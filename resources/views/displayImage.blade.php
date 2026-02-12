<div>
<h1>Images from Db</h1>
@foreach($data as $img)
<img src="{{url('storage/'.$img->path)}}"  width="500"alt="">
@endforeach
</div>
