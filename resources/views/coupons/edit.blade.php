@extends('layouts.app')

@section('content')

        <div class="container mt-5">

            {!! Form::open(['action' => ['CouponController@update', $coupon->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'The initial percentage is:')}}
                    {{Form::number('percentage', $coupon->percentage, ['class' => 'form-control'])}}

                    {{Form::label('title', 'The max percentage is:')}}
                    {{Form::number('cap', $coupon->percentage_cap, ['class' => 'form-control'])}}

                </div>
                {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

            {!! Form::close() !!}

        </div>

@endsection
