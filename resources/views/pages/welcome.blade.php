@extends('layout.main')

@section('title', ' | Home Page')

@section('content')
<div class="col-md-12">
    <div class="jumbotron">
        <h1>Welcome to my blog!</h1>
        <p>Thank you so much for visiting. This is my test website built with Laravel.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>
</div> <!-- end of header .row -->

<div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
            <div class="post">
                <h3>{{ $post->title  }}</h3>
                <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ? "..." :"" }}</p>
                <a href="#" class="btn btn-primary">Read More...</a>
            </div>

            <hr>
        @endforeach
    </div><!-- end of post-->
    <hr>
    <div class="col-md-3 col-md-offset-1">
        <h2>SideBar</h2>
    </div><!-- end of sidebar-->
</div>
 @endsection