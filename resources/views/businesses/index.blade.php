@extends('welcome')
@section('business_table')

<div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="/coupon" class="nav-link">Coupons</a>
        </li>
        <li class="nav-item">
            <a href="/business" class="nav-link active">Businesses</a>
        </li>
    </ul>

      <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="coupons">
            <!-- Nothing here -->
        </div>
        <div class="tab-pane fade show active" id="businesses">
          
            @if(count($businesses) > 0)
            @foreach($businesses as $business)
            
            <div class="card mb-4 box-shadow">
                <div class="card-body">
                    <h2 class="card-title">Business Name: {{$business->business_name}}</h2>
                    <h4>Created: {{$business->created_at}}</h4>
                    <h5>Address: {{$business->address}} {{$business->city}}, {{$business->state}} {{$business->zipcode}}</h5>
                </div>
              </div>
            @endforeach
        @else
              <h2>No businesses</h2>
        @endif

        </div>
    </div>
      
    </div>
  </div>




@endsection