@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nueva persona</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('predios.updatep', $predios->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nombre</label>
                <input type="text" name="nombre_predio" class="form-control" required value="{{$predios->nombre_predio}}">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$predios->direccion}}">

                <br>
                <a href="{{ route("predios.indexp") }}" class="btn btn-info">
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

