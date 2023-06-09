<!-- Stored in resources/views/layouts/layout.blade.php -->
<html>
<head>
    <title>App Name - @yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<style>
    body{
        background-image: url(https://www.orbcomm.com/img/intro-byasset.jpg);
        background-position:center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;

    }

</style>
@section('sidebar')
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route("plantilla.index") }}">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("transportes.indext") }}">Transportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("camiones.indexc") }}" >Camiones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("predios.indexp") }}">Predios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("mercancias.indexm") }}">Mercancias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route("tipomercancias.indextm") }}">Tipo de mercancia</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>

@show
<div class="container">
    @yield('content')
</div>
</body>
</html>
