@extends('layout.plantilla')

@section("tituloPagina", "eliminar un nuevo registro")

@section('contenido')
    <div class="card">
        <h5 class="card-header">Eliminar un predio!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>ID</th>
                    <th>Direccion</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $tipomercancias->id}}</td>
                        <td>{{ $tipomercancias->direccion }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('tipomercancias.destroytm', $tipomercancias->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("tipomercancias.indextm") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>  Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection

