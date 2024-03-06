<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <div style="color: blue;">
            This is the master sidebar.
        </div>
        @show
 
        <div class="container" style="color: red;">
            @yield('content')
        </div>
    </body>
</html>