@extends('layouts.app')

@section('content')
        <div class="container mt-5">

            {!! Form::open(['action' => ['BusinessController@update', $business->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Business Name:')}}
                    {{Form::text('business_name', $business->business_name, ['class' => 'form-control'], 'required')}}

                    {{Form::label('title', 'Address:')}}
                    {{Form::text('address', $business->address, ['class' => 'form-control'])}}

                    {{Form::label('title', 'City:')}}
                    {{Form::text('city', $business->city, ['class' => 'form-control'])}}

                    {{Form::label('title', 'Zipcode:')}}
                    {{Form::number('zipcode', $business->zipcode, ['class' => 'form-control'])}}

                    {{Form::label('title', 'State:')}}
                    {{Form::select('state',array(
                        'AL'=>'Alabama',
                        'AK'=>'Alaska',
                        'AZ'=>'Arizona',
                        'AR'=>'Arkansas',
                        'CA'=>'California',
                        'CO'=>'Colorado',
                        'CT'=>'Connecticut',
                        'DE'=>'Delaware',
                        'DC'=>'District of Columbia',
                        'FL'=>'Florida',
                        'GA'=>'Georgia',
                        'HI'=>'Hawaii',
                        'ID'=>'Idaho',
                        'IL'=>'Illinois',
                        'IN'=>'Indiana',
                        'IA'=>'Iowa',
                        'KS'=>'Kansas',
                        'KY'=>'Kentucky',
                        'LA'=>'Louisiana',
                        'ME'=>'Maine',
                        'MD'=>'Maryland',
                        'MA'=>'Massachusetts',
                        'MI'=>'Michigan',
                        'MN'=>'Minnesota',
                        'MS'=>'Mississippi',
                        'MO'=>'Missouri',
                        'MT'=>'Montana',
                        'NE'=>'Nebraska',
                        'NV'=>'Nevada',
                        'NH'=>'New Hampshire',
                        'NJ'=>'New Jersey',
                        'NM'=>'New Mexico',
                        'NY'=>'New York',
                        'NC'=>'North Carolina',
                        'ND'=>'North Dakota',
                        'OH'=>'Ohio',
                        'OK'=>'Oklahoma',
                        'OR'=>'Oregon',
                        'PA'=>'Pennsylvania',
                        'RI'=>'Rhode Island',
                        'SC'=>'South Carolina',
                        'SD'=>'South Dakota',
                        'TN'=>'Tennessee',
                        'TX'=>'Texas',
                        'UT'=>'Utah',
                        'VT'=>'Vermont',
                        'VA'=>'Virginia',
                        'WA'=>'Washington',
                        'WV'=>'West Virginia',
                        'WI'=>'Wisconsin',
                        'WY'=>'Wyoming',
                    ) , $business->state, ['class' => 'form-control'])}}
                </div>
                    {{Form::hidden('_method', 'PUT')}}

                    {{Form::submit('Submit', ['class' => 'btn btn-primary', 'placeholder' => $business->state ])}}

            {!! Form::close() !!}

        </div>
@endsection

