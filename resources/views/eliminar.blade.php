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
                    <th>Nombre predio</th>
                    <th>Direccion</th>

                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $predios->nombre_predio }}</td>
                        <td>{{ $predios->direccion }}</td>

                    </tr>
                    </tbody>
                </table>
                <hr>
                <form id="myButton" class="formulario-eliminar" action="{{ route('predios.destroyp', $predios->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("predios.indexp") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include your custom JavaScript file -->
    <script src="path/to/your/script.js"></script>

    <script>

        $(document).ready(function() {
            $('#myButton').click(function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        // )
                        this.submit();
                    }
                })

            });


        });



        // $('.formulario-eliminar').submit(function (e){
        //     e.preventDefault();
        // });


    </script>

@endsection
