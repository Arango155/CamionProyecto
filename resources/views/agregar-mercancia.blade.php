@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar nueva mercancia</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('mercancias.storem') }}" method="POST">
                @csrf
                <label for="">Codigo </label>
                <input type="text" name="id" class="form-control" required>
                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Tipo de mercancia</label>
                <input type="text" name="id_tipo_mercancias" class="form-control" required>

                <br>
                <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
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
