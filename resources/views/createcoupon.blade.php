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

        <div class="container mt-5">

            {{-- <form class="mt-5" method="post" action="{{ route('qrcode.store') }}">
                <div class="form-group">
                  <label>The initial percentage is:</label>
                  <input type="number" class="form-control" placeholder="0%">
                </div>
                <div class="form-group">
                  <label>The max percentage is: </label>
                  <input type="number" class="form-control" placeholder="0%">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> --}}

            {!! Form::open(['action' => 'CouponController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'The initial percentage is:')}}
                    {{Form::number('percentage','', ['class' => 'form-control'])}}

                    {{Form::label('title', 'The max percentage is:')}}
                    {{Form::number('cap','', ['class' => 'form-control'])}}
                </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

            {!! Form::close() !!}

        </div>

</body>
</html>

