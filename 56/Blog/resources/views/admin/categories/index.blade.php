@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Listar Categorias
                        <a href="{{ route('categories.create') }}" class="btn-link btn-outline-info float-right">Crear</a>
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
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.show', $category->id) }}" class="btn-light btn-sm">Ver</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn-dark btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <button class="btn-danger btn-sm">Eliminar</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
