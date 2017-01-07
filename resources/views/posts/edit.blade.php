@extends('layout.main')

@section('title', ' | Edit Blog Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div>
            {{ Form::label('title', 'Title:') }}
            {{Form::text('title', null, ["class" => 'form-control input-lg']) }}

            {{ Form::label('slug', 'Slug:', ["class" => 'form-spacing-top']) }}
            {{ Form::text('slug', null, ["class" => 'form-control']) }}

            {{ Form::label('category_id', 'Category:', ["class" => 'form-spacing-top']) }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

            {{ Form::label('body', 'Body:', ['class' =>'form-spacing-top']) }}
            {{ Form::textarea('body', null, ['class' => 'form-control'])}}
        </div>

        <div class="form-spacing-top">
            <div class="well">
                <dl class="col-md-4">
                    <dt>Url:</dt>
                    <dd><a href="{{ url('blog/'.$post->slug) }}"> {{url('blog/'.$post->slug)}}</a></dd>
                    {{-- <dd><a href="{{ route('blog.single', $post->slug) }}"> {{ route('blog.single', $post->slug) }}</a></dd> --}}
                </dl>
                <dl class="col-md-4 dl-horizontal">
                    <dt>Create at:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>
                <dl class="col-md-4 dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>
                <hr>

                <div class="row">

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block btn-h1-spacing'])!!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-primary btn-block btn-h1-spacing') ) !!}
                    </div>
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<<See All Posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@stop
@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.full.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection