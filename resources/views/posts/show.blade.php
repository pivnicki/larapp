 @extends('layouts.app')
 @section('content')
 <a href="/posts" class="btn btn-success">Go Back</a>
<h2> {{$post->title}}</h2>
 <small><b>Created at:</b> {{$post->created_at}}</small>
<p>{!!$post->body!!}</p>

<hr>
 @endsection