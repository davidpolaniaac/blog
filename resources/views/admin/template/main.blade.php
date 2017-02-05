<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Panel de administración</title>
    <link rel="stylesheet" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @include('admin.template.partials.nav')
            <div class="panel panel-default">
                <div class="panel-heading">@yield('title')</div>
                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    @yield('content')
                </div>
            </div>
            <footer>
                <p>Blog <br> &copy davidpolania.website</p>
            </footer>
        </div>
    </div>
</div>
<script src="{{asset('plugins\jquery\js\jquery-3.1.1.js')}}"></script>
<script src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>
</body>
</html>