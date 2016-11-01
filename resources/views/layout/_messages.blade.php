@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>

@elseif (count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <strong>Something went wrong</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif