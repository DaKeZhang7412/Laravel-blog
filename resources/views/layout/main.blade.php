<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layout._head')
    </head>
    <body>

        @include('layout._nav')

        <div class="container">

            @include('layout._messages')

            @yield('content')

            @include('layout._footer')

        </div><!-- end of .container-->


        @include('layout._javascript')

    </body>
</html>