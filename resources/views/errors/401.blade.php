<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Acceso restringido</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('plugins\bootstrap\css\bootstrap.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div>Acceso Restringido</div>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive center-block" src="{{asset('images/error_acceso.png')}}"/>
                            <hr>
                            <strong class="text-center">
                                <p class="text-center">Usted no tiene acceso a esta zona</p>
                                <p>
                                    <a href="{{ route('front.index') }}">Desea volver al inicio?</a>
                                </p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
