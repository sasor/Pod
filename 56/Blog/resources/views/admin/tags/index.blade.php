@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Listar Etiquetas
                        <a href="{{ route('tags.create') }}" class="btn-link btn-outline-info float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                    <tr>
                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td>
                                            <a href="{{ route('tags.show', $tag->id) }}" class="btn-light btn-sm">Ver</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn-dark btn-sm">Editar</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                                <button class="btn-danger btn-sm">Eliminar</button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $tags->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
