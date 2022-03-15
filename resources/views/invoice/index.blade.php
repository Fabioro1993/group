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
                <a class="fs-4" href="{{ url('/') }}" >Desafio 1</a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="me-3 py-2 text-dark text-decoration-none">Dashboard</a>
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
        </header>

        <main>

            <h2 class="display-6 text-center mb-4">Desafio 1 Productos</h2>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="table-responsive col-md-4">
                    <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 60%;">1. Total de factura</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice as $item)
                        <tr>
                            <th scope="row" class="text-start"> Invoice {{$item->id}} </th>
                            <th scope="row" class="text-start"><a href="../invoice/total/{{$item->id}}">total</a></th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="table-responsive col-md-3">
                    <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 22%;">2. Cantidad > 100</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice as $item)
                        <tr>
                            <th scope="row" class="text-start">Invoice - {{$item->id}} </th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                <div class="table-responsive col-md-3">
                    <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 22%;">3. Price > $1.000.000 CLP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        <tr>
                            <th scope="row" class="text-start">{{$item->name}} </th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Invoice</h2>

            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="table-responsive col-md-12">
                    <table class="table text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>date</th>
                            <th>user</th>
                            <th>seller</th>
                            <th>type</th>
                            <th>total</th>
                            <th>agregar producto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoice_all as $item)
                        <tr>
                            <th scope="row" class="text-start"><a href="../invoice/{{$item->id}}">{{$item->id}}</a></th>
                            <th scope="row" class="text-start"><?PHP echo date('d-m-Y',strtotime($item->date));?></th>
                            <th scope="row" class="text-start"> {{$item->user->name}} </th>
                            <th scope="row" class="text-start"> {{$item->seller->name}} </th>
                            <th scope="row" class="text-start"> {{$item->type}} </th>
                            <th scope="row" class="text-start"> {{$item->total}} </th>
                            <th scope="row" class="text-start"><a href="../product/invoice/{{$item->id}}">añadir</a></th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

            <h2 class="display-6 text-center mb-4">Products</h2>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="table-responsive col-md-6">
                    <table class="table text-center">
                    <thead>
                        <tr>
                            <th style="width: 22%;">invoice_id</th>
                            <th style="width: 22%;">name</th>
                            <th style="width: 22%;">quantity</th>
                            <th style="width: 22%;">price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_all as $item)
                        <tr>
                            <th scope="row" class="text-start">{{$item->invoice_id}} </th>
                            <th scope="row" class="text-start">{{$item->name}} </th>
                            <th scope="row" class="text-start">{{$item->quantity}} </th>
                            <th scope="row" class="text-start">{{$item->price}} </th>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                <img class="mb-2" src="../assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
                </div>
                <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
                </div>
                <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
                </div>
                <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>