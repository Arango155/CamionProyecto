@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar nueva persona</h5>
        <div class="card-body">

            <p class="card-text">
                <form action="{{ route('predios.storep') }}" method="POST">
                @csrf
                <label for="">Codigo predio</label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre Predio</label>
                <input type="text" name="nombre_predio" class="form-control" required>
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required>

                <br>
                <a href="{{ route("predios.indexp") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection
