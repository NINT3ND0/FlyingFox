@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
@endsection

@section('filter')
    <li class="nav-item-active">
        <a class="nav-link "href="{{url()->previous()}}">back</a>
    </li>
@endsection


@section('content')
       <div class="content">
           <h1 class="blog-post-title">{{$article->title}}</h1>
           <p class="blog-post-meta">
               {{$article->tag}}
               |
               {{$article->date}}
               |
               {{$article->websiteName}}
           </p>

           <img src="{{$article->imageURL}}" alt="No image, sorry...">
           @foreach($content as $p)
               <p>{{$p}}</p>
           @endforeach
       </div>
@endsection
