@extends('layout.main')

@section('title', ' | About')

@section('content')

        <div class="content">
            <h2>
                <div class="title m-b-md">
                    About {{ $data['fullname'] }}
                </div>
            </h2>
            <p>Hi I am {{ $data['fullname'] }} . I like to make Laravel web apps!</p>
            <p>Email me at {{$data['email']}}</p>
        </div>
@endsection