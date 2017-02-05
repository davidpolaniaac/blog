@extends('admin.template.main')

@section('title','Editar usuario ' . $user->name )

@section('content')

    {!! Form::open(['route' => ['admin.users.update',$user], 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre completo', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $user->email, ['class' => 'form-control','placeholder' => 'Correo electronico', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo de usuario') !!}
        {!! Form::select('type', ['admin' => 'Administrador', 'member' => 'Miembro'], $user->type, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar usuario', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection