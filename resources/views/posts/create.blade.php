@extends('layouts.app')
@section('content')
@include('inc.messages')
<div class="row">
	<div class="col-sm-8">
{!! Form::open(['action' => 'PostsController@store','method'=>'POST']) !!}
 
 <div class="form-group">
 	{{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}} 
 </div>

 <div class="form-group">
 	{{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}} 
 </div>

 <div class="form-group">
 	{{Form::submit('Publish this post',['class'=>'btn-success'])}} 
 </div>

{!! Form::close() !!}
	</div>
</div>

 @endsection