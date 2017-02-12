@extends('admin.template.main')

@section('title','Crear articulo')

@section('content')

    {!! Form::open(['route' => 'admin.articles.store', 'method' => 'POST','files' => true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Titulo') !!}
        {!! Form::text('title', null, ['class' => 'form-control','placeholder' => 'Titulo del articulo ..', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content', 'Contenido') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control textarea-content', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('tags', 'Tags') !!}
        {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag','multiple', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Imagen') !!}
        {!! Form::file('image') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Crear articulo', ['class' => 'btn btn-primary']) !!}
    </div>



    {!! Form::close() !!}

@endsection

@section('js')
    <script src="{{asset('js\select.js')}}"></script>
    <script src="{{asset('js\editor.js')}}"></script>
@endsection

