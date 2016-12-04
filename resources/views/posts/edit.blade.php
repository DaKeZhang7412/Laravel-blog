@extends('layout.main')

@section('title', ' | Edit Blog Post')

@section('content')
<div>
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div>
        {{ Form::label('title', 'Title:') }}
        {{Form::text('title', null, ["class" => 'form-control input-lg']) }}

        {{ Form::label('slug', 'Slug:', ["class" => 'form-spacing-top']) }}
        {{Form::text('slug', null, ["class" => 'form-control form-spacing-top']) }}

        {{ Form::label('body', 'Body:', ['class' =>'form-spacing-top']) }}
        {{Form::textarea('body', null, ['class' => 'form-control'])}}
    </div>

    <div>

        <div class="well">
            <dl class="dl-horizontal">
                <dt>Url:</dt>
                <dd><a href="{{ url('blog/'.$post->slug) }}"> {{url('blog/'.$post->slug)}}</a></dd>
                {{-- <dd><a href="{{ route('blog.single', $post->slug) }}"> {{ route('blog.single', $post->slug) }}</a></dd> --}}
            </dl>
            <dl class="col-md-6 dl-horizontal">
                <dt>Create at:</dt>
                <dd>{{ date('M j, Y h:i a', strtotime($post->created_at)) }}</dd>
            </dl>
            <dl class="col-md-6 dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{ date('M j, Y h:i a', strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>

            <div class="row">
                <div class="col-sm-3">
                    {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])!!}
                </div>
                <div class="col-sm-3">
                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-primary btn-block') ) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ Html::linkRoute('posts.index', '<<See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection