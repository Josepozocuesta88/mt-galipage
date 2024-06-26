<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset(config('app.logo')) }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('js/hyper-config.js') }}"></script>

    <!-- App css -->
    <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Iconos -->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Css personalizado -->
    <link href="{{ asset('css/css.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('build/assets/app-7f9c8fa3.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <!-- vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid px-3">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset(config('app.logo')) }}" alt="Logo" width="100">
            </a>

            <!-- Enlaces -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-primary font-22 p-1" aria-current="page"
                            href="{{ route('login') }}">Acceso
                            Clientes</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-primary font-22 p-1" href="#aboutUs">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-primary font-22 p-1" href="#">Contacto</a>
                    </li>
                </ul>
            </div>

            <!-- Iconos -->
            <div class="d-flex">
                <a class="nav-link pe-2" href="{{ route('login') }}">
                    <i class="ri-account-circle-line font-25"></i>
                </a>

            </div>
        </div>
    </nav>

    <div>
        <img src="{{ asset(config('app.hero_index')) }}" style="width:100vw; height:100vh;" alt="Imagen principal">
    </div>

    <!-- </section> -->

    <!-- categorias -->
    <div class="container py-3">
        <h2 class="text-primary pb-3">Categorías</h2>
        <!-- categorias disponibles -->
        <div class="favoritos">
            <button id="scrollLeft" class="btn btn-link"><i
                    class="bi bi-arrow-left-circle-fill font-24 text-primary"></i></button>
            <div id="categorias" class="categorias gap-3">
                @foreach ($categories as $category)
                    <div class="col d-flex flex-column align-content-between  align-items-center">
                        <a href="{{ route('categories', ['catcod' => $category->id]) }}" title="">
                            <img src="{{ asset('images/categorias/' . $category->imagen) }}" class="img-fluid"
                                alt="{{ $category->nombre_es }}" style="width:121px;height:121px;">
                        </a>
                        <h3 class="text-center">
                            <a
                                href="{{ auth()->check() ? route('categories', ['catcod' => $category->id]) : route('login') }}">
                                {{ $category->nombre_es }}
                            </a>

                        </h3>
                    </div>
                @endforeach
            </div>
            <button id="scrollRight" class="btn btn-link"><i
                    class="bi bi-arrow-right-circle-fill font-24 text-primary"></i></button>
        </div>
    </div>
    <!--fin categorias disponibles -->
    </div>

    <!--  -->
    <div class="row pt-5 pe-0">
        <div class="col bg-light pe-0 pt-1">
            <iframe src="{{ config('app.maps') }}" width="100%" height="400" style="border:0;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class=" bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="px-2 pb-2 text-dark">
                            <i class="uil-truck font-30"></i>
                        </span>
                        <div class="">
                            <h3 class="text-dark">Envío Personalizado</h3>
                            <h5>Gestión rápida en el envío de sus pedidos</h5>
                        </div>
                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="px-2 pb-2 text-dark">
                            <i class="uil-shield-check font-30"></i>
                        </span>

                        <div class="">
                            <h3 class="text-dark">Acumula Puntos</h3>
                            <h5>Gana puntos en cada pedido</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="px-2 pb-2 text-dark">
                            <i class="uil-life-ring font-30"></i>
                        </span>

                        <div class="">
                            <h3 class="text-dark">Atención Profesional</h3>
                            <h5>Consúltenos sus dudas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class=" pt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-3">
                    <div class="widget widget-about">
                        <img src="{{ asset(config('app.logo')) }}" class="footer-logo mb-3" alt="Florys"
                            style="max-width: 220px; margin: auto;">

                        <div class="d-flex border border-primary py-2 px-3 m-2 ">
                            <i class="ri-phone-fill font-25"></i>
                            <div class="ps-2">
                                ¿Alguna duda? ¡Llámanos!
                                <a href="tel:+34957690508">957 690 508</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-3">
                    <div class="widget">

                        <h4 class="widget-title">Legal</h4>

                        <ul class="widget-list">
                            <li><a href="{{ route('privacidad') }}">Política de Privacidad</a></li>
                            <li><a href="{{ route('avisoLegal') }}">Aviso Legal</a></li>
                            <li><a href="{{ route('cookies') }}">Política de Cookies</a></li>
                            <li><a href="{{ route('redes') }}">Política de Privacidad en Redes Sociales</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-3">
                    <div class="widget">


                        <h4 class="widget-title">Información</h4>

                        <ul class="widget-list">

                            <li><a href="7-vc-quienes-somos.html">Quiénes Somos</a></li>
                            <li><a href="10-vc-pago-seguro.html">Pago Seguro</a></li>
                            <li><a href="12-vc-devoluciones.html">Devoluciones</a></li>
                            <li><a href="5-vc-formas-de-envio.html">Formas de Envío</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-3">
                    <div class="widget">


                        <h4 class="widget-title">Clientes</h4>

                        <ul class="widget-list">

                            <li><a href="{{ route('contacto.formulario') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="{{ asset('js/scrollbar.js') }}"></script>
<!-- Vendor js -->
<script src="{{ asset('js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('js/app.min.js') }}"></script>

</html>
