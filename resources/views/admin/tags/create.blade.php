@extends('admin.template.main')

@section('title','Crear tags')

@section('content')

    {!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre del Tag', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Crear Tag', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection