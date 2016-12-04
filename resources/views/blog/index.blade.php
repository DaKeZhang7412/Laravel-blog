@extends('layout.main')

@section('title', ' | All Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1> All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
    </div>

    <div>
        <hr>
    </div> <!-- end of .row -->

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="post">
                        <h3>{{ $post->title  }}</h3>
                        <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." :"" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More...</a>
                    </div>

                    <hr>
                @endforeach
            </div><!-- end of post-->

            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@stop