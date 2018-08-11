@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista de Articulos</h1>
            </div>
            <div class="col">
                @foreach($posts as $post)
                <div class="card mb-md-4">
                    <div class="card-header">{{ $post->name }}</div>
                    <div class="card-body">
                        @if($post->file)
                            <img src="{{ $post->file }}" alt="" class="img-responsive">
                        @endif
                        {{ $post->excerpt }}
                            <a href="{{ route('post', $post->slug) }}" class="btn-link float-right">Leer mas</a>
                    </div>
                </div>
                @endforeach
                <div class="col">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
