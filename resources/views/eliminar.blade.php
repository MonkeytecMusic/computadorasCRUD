@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title text-center" style="color:red;">Eliminar</h2>
                    </div>
                    <div class="card-body">
                        <a href="/" class="btn btn-primary">Regresar</a>
                        <p class="card-text">
                        <ul>
                            <li>Nombre del responsable: {{ $items->nombre }}</li>
                            <li>Computadora en uso: {{ $items->marca }}</li>
                            <li>Modelo: {{ $items->modelo }}</li>
                        </ul>
                        </p>
                        <form action="{{route('destroy', $items->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="row d-flex justify-content-center mt-2">
                                <div class="col-6">
                                    <button class="btn btn-danger">Eliminar registro</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
