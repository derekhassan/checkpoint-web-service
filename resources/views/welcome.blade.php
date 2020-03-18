<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CheckPoint') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

        @include('inc.navbar')

        <div class="container">

            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 box-shadow">
                          <div class="card-header">
                            
                          </div>
                          <div class="card-body">
                            <h1 class="card-title">Create Coupon</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                              <li>Create a new coupon</li>
        
                            </ul>
                            <a href="/createcoupon" type="button" class="btn btn-lg btn-block btn-primary">Create</a>
                          </div>
                        </div>
                </div>
            </div>



        </div>

</body>
</html>
