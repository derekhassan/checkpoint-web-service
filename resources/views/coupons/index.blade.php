@extends('dashboard')
@section('coupon_table')

<div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="/coupon" class="nav-link active">Coupons</a>
        </li>
        <li class="nav-item">
            <a href="/business" class="nav-link">Businesses</a>
        </li>
    </ul>

      <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="coupons">
            @if(count($coupons) > 0)
            @foreach($coupons as $coupon)
            
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-title">Creator: {{$coupon->business->business_name}}</h2>
                    <h4>Created: {{$coupon->created_at}}</h4>
                    <h4>Initial Percentage: {{$coupon->percentage}}%</h4>
                    <h4>Percentage Cap: {{$coupon->percentage_cap}}%</h4>

                    <a href="coupon/{{$coupon->id}}/edit" class="btn btn-light">Edit</a>

                    {!!Form::open(['action' => ['CouponController@destroy', $coupon->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Delete', ['class' => 'btn btn-light'])}}
                    {!!Form::close() !!}

                </div>
              </div>
            @endforeach
        @else
              <h2>No Coupons</h2>
        @endif
        </div>
        <div class="tab-pane fade" id="businesses">
          <!-- Nothing here -->
        </div>
    </div>
      
    </div>
  </div>




@endsection