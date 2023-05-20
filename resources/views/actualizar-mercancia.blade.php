@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nueva mercancia</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('mercancias.updatem', $mercancias->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$mercancias->id}}">

                <label for="">Nombre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$mercancias->direccion}}">

                <br>
                <a href="{{ route("mercancias.indexm") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection

