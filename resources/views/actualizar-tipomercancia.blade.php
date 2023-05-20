@extends('layout.plantilla')

@section("tituloPagina", "crear un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo tipo mercancia</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('tipomercancias.updatetm', $tipomercancias->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">ID</label>
                <input type="text" name="id" class="form-control" required value="{{$tipomercancias->id}}">

                <label for="">Direccion</label>
                <input type="text" name="descripcion" class="form-control" required value="{{$tipomercancias->direccion}}">

                <br>
                <a href="{{ route("tipomercancias.indextm") }}" class="btn btn-info">
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

