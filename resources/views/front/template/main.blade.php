<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Home') | Blog de Proyectos</title>
    <link rel="stylesheet" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('plugins\chosen\chosen.css')}}">
    <link rel="stylesheet" href="{{asset('plugins\trumbowyg\ui\trumbowyg.css')}}">
    <link rel="stylesheet" href="{{asset('plugins\font-awesome\css\font-awesome.min.css')}}">
</head>

<body>

    <header>
        @include('front.template.partials.header')
    </header>

    <div class="container">
        @yield('content')

        <footer>
            <hr>
            Blog - Todos los derechos revervados &copy {{ date('Y') }}
            <div class="pull-right"><b>&reg davidpolania.website</b></div>
        </footer>
    </div>

    <script src="{{asset('plugins\jquery\js\jquery-3.1.1.js')}}"></script>
    <script src="{{asset('plugins\bootstrap\js\bootstrap.js')}}"></script>
    <script src="{{asset('plugins\chosen\chosen.jquery.js')}}"></script>
    <script src="{{asset('plugins\trumbowyg\trumbowyg.js')}}"></script>
    @yield('js')

</body>

</html>