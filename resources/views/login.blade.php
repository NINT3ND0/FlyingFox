@extends('layout')

@section('bulma_style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@endsection

@section('content')
    <div class="content login_page">
        <h3>Log in to admin panel</h3>
        <form method="POST" action="/admin">
            {{csrf_field()}}

            <div class="trip_details field">
                <input type="text" class="destination_input" placeholder="username" value="" name="username">
            </div>
            <div class="trip_details field">
                <input type="text" class="destination_input" placeholder="password" value="" name="password">
            </div>
            <div class="search_btn_container trip_details field">
                <button class=" button is-link" type="submit" title="Login" aria-label="Login button">
                    Log in
                </button>
            </div>
        </form>
    </div>
    <style>footer{
            position: fixed;
            left: 0;
            bottom: 0;}
    </style>
@endsection
