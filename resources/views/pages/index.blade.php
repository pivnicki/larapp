 @extends('layouts.app')
 @section('content')
@if(count($posts)>0)

@foreach($posts as $post)
<h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
 <hr>
@endforeach
@endif
 @endsection