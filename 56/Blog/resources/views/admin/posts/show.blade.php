@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Ver entrada
                    </div>
                    <div class="card-body">
                        <p><strong>Id: </strong>{{ $post->id }}</p>
                        <p><strong>Nombre: </strong>{{ $post->name }}</p>
                        <p><strong>Contenido: </strong>{{ $post->body }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
