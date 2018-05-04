 @extends('layouts.app')
 @section('content')
@if(count($posts)>0)
@include('inc.messages')
@foreach($posts as $post)
<h2> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
 <small><b>Created at:</b> {{$post->created_at}}</small>
<p>{{Str::words($post->body,10)}}</p>
<hr>

@endforeach
<?php echo $posts->render(); ?>
@endif
 @endsection