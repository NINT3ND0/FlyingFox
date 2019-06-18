@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Check dropdown menu in upper right corner for available actions.

                        <form method="POST" action="/parse-news" style="margin-bottom: 1em;">
                            {{ csrf_field() }}
                            <input type="hidden" value="pass">
                               <div class="detail_controls">
                                   <div class="search_btn_container trip_details">
                                       <button class="search_btn" type="submit" title="parse" aria-label="Parse News">
                                           Parse
                                       </button>
                                   </div>
                               </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
