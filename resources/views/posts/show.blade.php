 @extends('layouts.app')
 @section('content')
 <div class="row">
 	<div class="col-sm-6">
 		<a href="/posts" class="btn btn-success">Go Back</a>
 <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
 	</div>
 	<div class="col-sm-6">
 		 {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
	{{Form::hidden('_method','DELETE')}}
	{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
 	</div>
 </div>
 

<h2> {{$post->title}}</h2>
 <small><b>Created at:</b> {{$post->created_at}}</small>
<p>{!!$post->body!!}</p>

<hr>
 @endsection