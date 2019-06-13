@extends('layout')

@section('bulma_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@endsection

@section('content')
<div class="content">
    {{request('From')}}
    <ul>
        @foreach ($flights as $flight)
            <li>
                <a href="{{$flight->CarrierURL}}">
                    Carrier website
                </a>
            </li>
            <li>
                {{$flight->DepartTime}}
            </li>
            <li>
                {{$flight->ArriveTime}}
            </li>
            <li>
                {{$flight->Price}}
            </li>
        @endforeach
    </ul>
</div>
@endsection
