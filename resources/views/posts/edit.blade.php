@extends('layout.main')

@section('title', ' | Edit Blog Post')

@section('content')
<div>
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div>
        {{ Form::label('title', 'Title:') }}
        {{Form::text('title', null, ["class" => 'form-control input-lg']) }}

        {{ Form::label('body', 'Body:', ['class' =>'form-spacing-top']) }}
        {{Form::textarea('body', null, ['class' => 'form-control'])}}
    </div>

    <div>

        <div class="well">
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
                    {!! Form::submit('Save', ['class' => 'btn btn-success btn-block'])!!}
                </div>
                <div class="col-sm-3">
                    {!!  Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection