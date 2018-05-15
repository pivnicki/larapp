@extends('layouts.app')
@section('content')
@include('inc.messages')
<div class="row">
	<div class="col-sm-8">
{!! Form::open(['action' => ['PostsController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
 
 <div class="form-group">
 	{{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}} 
 </div>

 <div class="form-group">
 	{{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}} 
 </div>
  <div class="form-group">
    {{Form::file('cover_image')}}
 </div>
 {{Form::hidden('_method','PUT')}}

 <div class="form-group">
 	{{Form::submit('Update this post',['class'=>'btn-success'])}} 
 </div>

{!! Form::close() !!}
	</div>
</div>

 @endsection