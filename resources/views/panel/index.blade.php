@extends('layouts.app')

@section('title','Panel')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    a {
  text-decoration: none;
  font-weight: bold;
}
div{
    font-weight: bold;
}
     /* Añade un estilo para las tarjetas */
     .card:hover {
        transform: scale(1.05); /* Escala la tarjeta al hacer hover */
        transition: transform 0.3s ease; /* Aplica una transición para suavizar el cambio */
    }

    /* Añade un estilo para los enlaces dentro de las tarjetas */
    .card:hover .card-footer a {
        color: #fff !important; /* Cambia el color del texto */
        text-decoration: none !important; /* Quita el subrayado */
    }

    /* Efecto de transición para suavizar el cambio */
    .card:hover .card-footer a:hover {
        color: #fff !important; /* Cambia el color al hacer hover */
        transition: color 0.3s ease; /* Aplica una transición para suavizar el cambio */
    }
</style>
@endpush

@section('content')

@if (session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {

        let message = "{{ session('success') }}";
        Swal.fire(message);

    });
</script>
@endif

<div class="container-fluid px-4">
    <h1 class="mt-4">PANEL ADMINISTRACION</h1>

    <div class="row text-decoration-none mt-4 ">
        <!----Clientes--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-people-group"></i><span class="m-1">Clientes</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Cliente;

                            $clientes = count(Cliente::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$clientes}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link " href="{{ route('clientes.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Categoria--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-tag"></i><span class="m-1">Categorías</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Categoria;

                            $categorias = count(Categoria::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$categorias}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('categorias.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Compra--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-store"></i><span class="m-1">Compras</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Compra;

                            $compras = count(Compra::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$compras}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('compras.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Marcas--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-bullhorn"></i><span class="m-1">Marcas</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Marca;

                            $marcas = count(Marca::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$marcas}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('marcas.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Presentaciones--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-box-archive"></i><span class="m-1">Presentaciones</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Presentacione;

                            $presentaciones = count(Presentacione::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$presentaciones}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('presentaciones.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Producto--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-brands fa-shopify"></i><span class="m-1">Productos</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Producto;

                            $productos = count(Producto::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$productos}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('productos.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Proveedore--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-user-group"></i><span class="m-1">Proveedores</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\Proveedore;

                            $proveedores = count(Proveedore::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$proveedores}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('proveedores.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!----Users--->
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <i class="fa-solid fa-user"></i><span class="m-1">Usuarios</span>
                        </div>
                        <div class="col-4">
                            <?php

                            use App\Models\User;

                            $users = count(User::all());
                            ?>
                            <p class="text-center fw-bold fs-4">{{$users}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('users.index') }}">Ver más</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<!---script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script--->
<!---script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script--->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
@endpush