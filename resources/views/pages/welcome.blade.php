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
        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aperiam assumenda consectetur cupiditate dolorum iusto magnam magni quis suscipit. Accusamus iusto possimus quod quos ratione sequi similique temporibus voluptatum?</p>
            <a href="#" class="btn btn-primary">Read More...</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aperiam assumenda consectetur cupiditate dolorum iusto magnam magni quis suscipit. Accusamus iusto possimus quod quos ratione sequi similique temporibus voluptatum?</p>
            <a href="#" class="btn btn-primary">Read More...</a>
        </div>

        <hr>

        <div class="post">
            <h3>Post Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aperiam assumenda consectetur cupiditate dolorum iusto magnam magni quis suscipit. Accusamus iusto possimus quod quos ratione sequi similique temporibus voluptatum?</p>
            <a href="#" class="btn btn-primary">Read More...</a>
        </div>
    </div><!-- end of post-->
    <hr>
    <div class="col-md-3 col-md-offset-1">
        <h2>SideBar</h2>
    </div><!-- end of sidebar-->
</div>
 @endsection