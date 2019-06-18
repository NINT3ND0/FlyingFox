@extends ('layouts.app')

@section('styles')
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        @foreach ($flights as $flight)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/home/edit-flights/{{$flight->id}}">{{$flight->From}} - {{$flight->To}}</a></h2>
                <p class="blog-post-meta">
                    Depart: {{$flight->DepartTime}}
                    |
                    Arrive: {{$flight->ArriveTime}}
                    |
                    Default price: {{$flight->Price}}$
                </p>
            </div>
        @endforeach

        {{$flights->links()}}
    </div>
@endsection
