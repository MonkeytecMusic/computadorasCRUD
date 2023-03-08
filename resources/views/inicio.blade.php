@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Computadoras registradas</h2>
                    </div>
                    <div class="card-body">
                        <a href="/anadir" class="btn btn-primary">Anadir computadora</a>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Nombre del responsable</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>RAM</th>
                                    <th>Procesador</th>
                                    <th>Disco duro</th>
                                    <th>Descripcion</th>
                                    <th>Imagen(URL)</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->marca}}</td>
                                    <td>{{$item->modelo}}</td>
                                    <td>{{$item->ram}}</td>
                                    <td>{{$item->procesador}}</td>
                                    <td>{{$item->hdd}}</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td><a href="{{$item->url}}"><img src="{{$item->url}}" height="60px" width="60px"></a></td>
                                    <td><a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a></td>
                                    <td><a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection