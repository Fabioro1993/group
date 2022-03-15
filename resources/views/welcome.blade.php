<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TWGroup</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{asset('css/pricing.css')}}" rel="stylesheet">
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <span class="fs-4">Prueba TWGroup</span>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a href="#" class="me-3 py-2 text-dark text-decoration-none">Desafio 5</a>
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="me-3 py-2 text-dark text-decoration-none">Tasks</a>
                            @else
                                <a href="{{ route('login') }}" class="me-3 py-2 text-dark text-decoration-none">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="me-3 py-2 text-dark text-decoration-none">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h3 class="display-7 fw-normal">Desafío 2:</h3>
                <p class="fs-6 text-muted">Indica paso a paso los comandos para una instalación básica de Laravel que me permita ver la página principal (recuerda describir qué hace cada comando).</p>
            </div>

            <div class="p-3 pb-md-4 mx-auto">
                <p class="fs-7 text-muted">

                    Para la instalcion de laravel, yo uso composer para crear el proyecto. <br>
                    composer create-project laravel/laravel example-app <br>
                    Luego de creado ingreso en el proyecto cd example-app <br>
                    en caso de querer usar algun servicio de login, uso breeze <br>
                    composer require laravel/breeze --dev (composer para la instalacion global) <br>
                    php artisan breeze:install (instalacion en el proyecto) <br>
                    npm install && npm run dev (instalacion y ejecucion de NPM) <br>
                    Ejecuto las migraciones php artisan migrate <br>
                    en caso de tener algo seeder lo ejecuto <br>
                    php artisan db:seed --class=DatabaseSeeder <br>
                    y por ultimo levanto el servicio <br>
                    php artisan serve <br>
                    E ingreso a la url http://localhost:8000/
                </p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Desafios</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Desafio 1</li>
                                <li>Desafio 3</li>
                            </ul>
                            <a href="{{ url('/invoice') }}" class="w-100 btn btn-lg btn-outline-primary">Ver</a>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Desafio 4</h2>

            <div class="p-3 pb-md-4 mx-auto text-center">
                <p class="fs-6 text-muted">Explícanos ¿qué es "Laravel Jetstream"? y ¿qué permite "Livewire" a los programadores?</p>
            </div>
            <div class="p-3 pb-md-4 mx-auto">
                <p class="fs-7 text-muted">
                    Laravel Jetstream <br>
                    En mis palabras, Jetstram es un paquete de laravel en donde podemos encontrar todas las bases de un proyecto sin tener que ir instalando y preparando cada una de ellas, como lo son el login, la autenticación, apis, entre otros
                </p>
            </div>
            <div class="p-3 pb-md-4 mx-auto">
                <p class="fs-7 text-muted">
                    Livewire <br>
                    Es un framework, para el desarrollo de componentes en laravel que se comunican entre si, sin necesidad de esperar una recarga de la pagina, asumiento un comportamiento dinamico.
                </p>
            </div>
        </main>
    </div>
</body>
</html>