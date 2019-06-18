@extends('layouts.layout')

@section('styles')
@endsection

@section('content')
<div class="content">

        <div class="flights">
            @foreach ($flights as $flight)

                    <div class="blog-post">
                        <h2 class="blog-post-title">{{$flight->From}} - {{$flight->To}}</h2>
                        <p class="blog-post-meta">
                            Depart: {{$flight->DepartTime}}
                            |
                            Arrive: {{$flight->ArriveTime}}
                            |
                            Price: {{$flight->Price}}$
                        </p>
                    </div>

                    <a class="btn btn-primary" href="{{$flight->CarrierURL}}">
                        Book tickets
                    </a>

            @endforeach
            {{$flights->links()}}
        </div>
</div>
@endsection
