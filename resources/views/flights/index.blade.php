@extends('layout')

@section('bulma_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@endsection

@section('content')
<div class="content">
    <h3 class="result_title">{{request('From')}} - {{request('To')}} | {{request('depart_date')}}</h3>


        <div class="flights">
            @foreach ($flights as $flight)
                <div class="one_flight">
                    <div>Departure: {{$flight->DepartTime}}</div>
                    <div> Arrival: {{$flight->ArriveTime}}</div>
                    <div>Price: {{$flight->Price}}$</div>
                    <a class="is-link" href="{{$flight->CarrierURL}}">
                        Book tickets
                    </a>
                </div>

            @endforeach
        </div>
</div>
@endsection
