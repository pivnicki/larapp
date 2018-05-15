@extends('layouts.app')
@section('content')
@if(count($posts)>0)
@include('inc.messages')
@foreach($posts as $post)

<div class="row">
<div class="col-sm-4">
	<img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}"/>
</div>
<div class="col-sm-8">
	<h2> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
<br>
 <small><b>Created at:</b> {{$post->created_at}}</small>
<p>{!!Str::words($post->body,5)!!}</p>
</div>
</div>
<hr>
@endforeach
<?php echo $posts->render(); ?>
@endif
 @endsection