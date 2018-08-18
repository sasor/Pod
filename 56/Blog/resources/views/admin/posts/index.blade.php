@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Lista de mis Entradas
                        <a href="{{ route('posts.create') }}" class="btn btn-link float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->name }}</td>
                                    <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-light">Ver</a></td>
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-info">Editar</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
