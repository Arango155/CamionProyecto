@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar nuevo tipo de mercancia</h5>
    <div class="card-body">

        <p class="card-text">
        <form action="{{ route('tipomercancias.storetm') }}" method="POST">
            @csrf
            <label for="">Codigo </label>
            <input type="text" name="id" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required>


            <br>
            <a href="{{ route("tipomercancias.indextm") }}" class="btn btn-info">
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
