@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row mt-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Agregar nuevo equipo de computo</h2>
                </div>
                <div class="card-body">
                    <a href="/" class="btn btn-danger">Regresar</a>
                    <br>
                    <form action="/store" method="post">
                        @csrf
                        @method('POST')
                        <label for="nombre">Nombre del responsable</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <div class="row">
                            <div class="col-4">
                                <label for="marca">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="modelo">Modelo</label>
                                <input type="text" name="modelo" id="modelo" class="form-control">
                            </div>
                            <div class="col-4">
                                <label for="ram">RAM</label>
                                <input type="text" name="ram" id="ram" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="procesador">Procesador</label>
                                <input type="text" name="procesador" id="procesador" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="hdd">Disco duro</label>
                                <input type="text" name="hdd" id="hdd" class="form-control">
                            </div>
                        </div>
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion"cols="30" rows="5" class="form-control"></textarea>
                        <label for="url">Colocar link de imagen</label>
                        <input type="text" name="url" id="url" class="form-control">
                        <button class="btn btn-primary mt-3">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
