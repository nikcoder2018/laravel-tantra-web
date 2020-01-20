@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <a href="/posts/create" class="btn btn-primary"> Create Post</a>
                   <h3>Your Blog Posts</h3>
                   @if(count($posts) > 0)
                   <table class="table table-striped">
                       <tr>
                           <th width="80%">Title</th>
                           <th></th>
                           <th></th>
                           <th></th>
                       </tr>
                       @foreach($posts as $post)
                       <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}" class="btn btn-primary">Show</a></th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></th>
                            <th>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </th>
                        </tr>
                       @endforeach
                   </table>
                   @else
                        <p>You no posts yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
