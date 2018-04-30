 @extends('layouts.app')
 @section('content')
@if(count($posts)>0)

@foreach($posts as $post)
<h2>{{$post->title}}</h2>
<p>{{$post->body}}</p>

<hr>
@endforeach
@endif
 @endsection