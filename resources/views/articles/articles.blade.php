@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
@endsection

@section('filter')
    @foreach ($websitePageURLs as $website)
        <li class="nav-item-active">
            <a class="nav-link" href="{{$website[0]}}">{{$website[1]}}</a>
        </li>
    @endforeach
@endsection


@section('content')
    <div class="content">
        @foreach ($parserData as $data)
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="/news/{{$data->slug}}">{{$data->title}}</a></h2>
                <p class="blog-post-meta">
                    {{$data->tag}}
                    |
                    {{$data->date}}
                    |
                    {{$data->websiteName}}
                </p>
            </div>
        @endforeach

        {{$parserData->links()}}
    </div>
@endsection
