@extends('front.template.main')

@section('title', $article->title)

@section('content')
    <h3 class="title-front left">{{$article->title}}</h3>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">

                {!! $article->content !!}

                <h4>Tags</h4>
                @foreach($article->tags as $tag)
                    {{$tag->name}}
                @endforeach

                <h3>Comentarios</h3>

                <hr>
                <!-- Comentarios con disqus-->
                <div id="disqus_thread"></div>
                <!-- Fin comentarios disqus-->
            </div>
        </div>

        <div class="col-md-4 aside">
            @include('front.partials.aside')
        </div>

    </div>

@endsection

@section('js')
    <script src="{{asset('js\comentarios.js')}}"></script>
@endsection