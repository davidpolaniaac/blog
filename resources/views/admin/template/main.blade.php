<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default') | Panel de administración</title>
    <link rel="stylesheet" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins\chosen\chosen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins\trumbowyg\ui\trumbowyg.css')}}">
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
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse">
                            <p class="navbar-text">Blog - Todos los derechos revervados &copy {{ date('Y') }}</p>
                            <p class="navbar-text navbar-right"><b>&reg davidpolania.website</b></p>
                        </div>
                    </div>
                </nav>
            </footer>
        </div>
    </div>
</div>

<script src="{{asset('plugins\jquery\js\jquery-3.1.1.js')}}"></script>
<script src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>
<script src="{{asset('plugins\chosen\chosen.jquery.js')}}"></script>
<script src="{{asset('plugins\trumbowyg\trumbowyg.js')}}"></script>
@yield('js')

</body>

</html>