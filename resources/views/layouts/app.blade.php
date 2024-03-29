<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    @include('includes.header')

    @if(Request::is('/'))
    @include('includes.hero')
    @endif
        <div class="container mt-4">
            <div class="row">
                <div class="col-8">
                    @yield('content')
                </div>
                <div class="col-4">
                    @include('includes.aside')
                </div>
            </div>
        </div>
    @include('includes.footer')

</body>
</html>
