<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>TWGroup</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">

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
    <link href="{{asset('css/form-validation.css')}}" rel="stylesheet">
  </head>
  <body class="bg-light">

<div class="container">
  <main>
    <div class="py-5 text-center">
        <h2>Desafio 3</h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row g-5">
            <div class="col-md-12 col-lg-12">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate action="{{ url('product') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" id="name" name="invoice_id" value="{{$products[0]->invoice_id}}" hidden>

                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{old('name')}}" required>
                            <div class="invalid-feedback">
                                Valid name is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="quantity" class="form-label">quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" value="{{old('quantity')}}" required>
                            <div class="invalid-feedback">
                                Valid quantity is required.
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="price" class="form-label">price</label>
                            <input type="number" class="form-control" id="price" placeholder="" name="price" value="{{old('price')}}" required>
                            <div class="invalid-feedback">
                                Valid price is required.
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2021 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

      <script src="{{asset('js/form-validation.js')}}"></script>
  </body>
</html>
