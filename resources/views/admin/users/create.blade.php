@extends('admin.template.main')

@section('title','Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Correo electronico', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control','placeholder' => '*************', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('type', 'Tipo de usuario') !!}
        {!! Form::select('type', ['admin' => 'Administrador', 'member' => 'Miembro'], null, ['class' => 'form-control','placeholder' => 'Seleccione una opcion ..', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection