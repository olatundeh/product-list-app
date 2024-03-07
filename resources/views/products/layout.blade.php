<!-- resources/views/layouts/app.blade.php -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <h2>Product listing - Laravel CRUD Application</h2>
        <br/>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>