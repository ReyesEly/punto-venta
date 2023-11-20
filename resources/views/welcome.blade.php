<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Sistema de ventas para gestionar compras, ventas clientes, proveedores, productos, categorías, etc. Ideal para pequeños y medianos negocios que deseen automatizar sus procesos y tener a la mano cualquier información sobre su negocio" />
    <meta name="author" content="SakCode" />
    <title>Ferretería 3-B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
        }

        .navbar {
            background-color: #343a40;
        }

        .navbar-brand {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #ffffff;
        }

        h1 {
            color: #007bff;
        }
        @keyframes scaleUp {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1);
            }
        }

        .scaleUp {
            animation-name: scaleUp;
            animation-duration: 5s;
            animation-timing-function: ease-in-out;
            animation-fill-mode: forwards;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%; /* Cambia el porcentaje según el tamaño deseado */
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-top: 20px;
        }

        .card img {
            max-width: 50%; /* Cambia el porcentaje según el tamaño deseado */
            height: auto;
        }
        .body {
            margin-top: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 100%; 
        }

        .body img {
            max-width: 200%; /* Cambia el porcentaje según el tamaño deseado */
            height: auto;
        }

        footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <!-- Marca de navegación -->
            <a class="navbar-brand" href="{{route('panel')}}">
                <img src="{{ asset('assets/img/icon.png') }}" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Ferretería 3-B
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Lista de opciones del menú -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('panel')}}">Inicio</a>
                    </li>
                  
                </ul>
                <form class="d-flex" action="{{route('login')}}" method="get">
                    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="body">
           
            <img src="https://giffiles.alphacoders.com/158/158674.gif" alt="">
            <h1 class="scaleUp">FERRETERIA 3-B</h1>
            <img src="https://media0.giphy.com/media/xlpw1wn1ro6RnMkZWK/200w.gif?cid=6c09b952ws8monz1ebruezxojf503m0h1nh4fatjc2qlilwd&ep=v1_gifs_search&rid=200w.gif" alt="">
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-white" href="#">reyes.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</
