<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Flying Fox</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    </head>
    <body>
{{--           <!--  @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif -->--}}

    <div class="wrap">

{{--            <div id="app">--}}
{{--                <app></app>--}}
{{--            </div>--}}
{{--            <script type="text/javascript" src="../js/app.js"></script>--}}
        <header>
            <div class="header-content content">
                <div class ="logo">
                    <img src="{{URL::to('/')}}/images/logo.png" alt="Logo">
                </div>
                <p class="title">
                    Flying Fox
                </p>
                <a href="/login">Sign in</a>
            </div>
        </header>
        <section class="main-content content">
            <div class="search_block">
                    <form>
                        <div class="search_radio_buttons">
                            <h2 class="motto">
                                The fastest flight booking!
                            </h2>
                            <label class="trip_type_selector">One way
                                <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                                <span class="radio_circle"></span>
                            </label>
                            <label class="trip_type_selector">Round trip
                                <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                                <span class="radio_circle"></span>
                            </label>
                            <label class="trip_type_selector">Business
                                <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                                <span class="checkmark"></span>
                            </label>
                            <label class="trip_type_selector">First class
                                <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="detail_controls">
                            <div class="trip_details">
                                <label>
                                    From
                                    <input type="text" class="destination_input" placeholder="Country, city or airport" value="Kyiv (Any)">
                                </label>
                            </div>
                            <div class="trip_details">
                                <label>
                                    To
                                    <input type="text" class="destination_input" placeholder="Country, city or airport" value="Dortmund">
                                </label>
                            </div>
                            <div class="trip_details">
                                <label>
                                    Passengers
                                    <input type="text" class="passengers_quantity" placeholder="Number of passengers" value="1">
                                </label>
                            </div>
                            <div class="date_range_selector trip_details">
                                <label>
                                    Depart
                                    <input type="text" class="depart_date_input" placeholder="Depart date" value="6/5/19">
                                </label>
                            </div>
                            <div class="date_range_selector trip_details">
                                <label>
                                    Return
                                    <input type="text" class="return_date_input" placeholder="Return date" value="6/5/19">
                                </label>
                            </div>
                            <div class="search_btn_container trip_details">
                                <button class="search_btn" type="button" title="Search" aria-label="Search Flights">
                                    Search flights
                                </button>
                            </div>
                        </div>
                    </form>
            </div>
        </section>
        <footer>
            <div class="footer-content content">
                <h3>
                  LLC FlyingFox 2019. All rights reserved (c).
                </h3>
            </div>
        </footer>
    </div>
    </body>
</html>

