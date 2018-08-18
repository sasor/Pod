@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $post->name }}</h2>
            </div>
            <div class="col">
                <div class="card mb-md-4">
                    <div class="card-header">
                        Categoria
                        <a href="{{ route('category', $post->category->slug) }}" class="btn-link">{{ $post->category->name }}</a>
                    </div>
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="" class="img-responsive">
                        @endif

                        {!! $post->body !!}

                    </div>
                    <div class="card-footer">
                        Etiquetas
                        @foreach($post->tags as $tag)
                            <a href="{{ route('tags', $tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
