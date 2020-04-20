@extends('layouts.app')

@section('content')

        <div class="container mt-5">

            {!! Form::open(['action' => 'CouponController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'The initial percentage is:')}}
                    {{Form::number('percentage','', ['class' => 'form-control'])}}

                    {{Form::label('title', 'The max percentage is:')}}
                    {{Form::number('cap','', ['class' => 'form-control'])}}

                    {!! Form::Label('title', 'Business:') !!}
                    <select class="form-control" name="bus_id">
                      @foreach($coupons as $coupon)
                        <option value="{{$coupon->id}}">{{$coupon->business_name}}</option>
                      @endforeach
                    </select>

                </div>
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

            {!! Form::close() !!}

        </div>

@endsection
