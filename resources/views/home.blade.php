@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            @if(count($posts)>0)
            <table class="table table-striped">
                <tr>
                    <td>Title</td>
                    <td></td>
                    <td></td>
                </tr>
               @foreach($posts as $post)
                    <tr>
                    <td>Title</td>
                    <td>{{$post->title}}</td>
                    <td><a href='/posts/{{$post->id}}/edit'>Edit</a></td>
                    <td>
                        <div class="col-sm-6">
<!-- {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{{Form::hidden('_method','DELETE')}}
{!!Form::close()!!} -->

{!!Form::open(['action' => ['PostsController@destroy', $post->id], 
'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

    </div>
                    </td>
                </tr>
               @endforeach
            </table>
            @else
            <p>You have no posts</p>
            @endif
        </div>
    </div>
</div>
@endsection
