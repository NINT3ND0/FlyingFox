<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <header>
            <div class="content">
                <div class ="logo">
                    <img src="{{URL::to('/')}}/images/logo.png" alt="Logo">
                </div>
                <div class = "title">
                    Flying Fox
                </div>
                <form class="sign_in" role="form" method="GET" action="">
                       <input class="btn btn_sign_in" type="submit" name="action" value="Sign In"/>
                </form>
            </div>
        </header>
        <section class="search_block">
            <div class="content">
                <form>
                    <div class="search_radio_buttons">
                        <h2 class="motto">
                            The fastest flight booking!
                        </h2>
                        <label class="Trip_type_selector">
                            <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                            <div class="radio_circle"></div>
                            "One way"
                        </label>
                        <label class="Trip_type_selector">
                            <input type="radio" class="radio_btn" name="trip-type-selector" value="on">
                            <div class="radio_circle"></div>
                            "Round trip"
                        </label>
                        <label class="Trip_type_selector">
                            <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                            <div class="radio_circle"></div>
                            "Business"
                        </label>
                        <label class="Trip_type_selector">
                            <input type="checkbox" class="checkbox_btn" name="trip-type-selector" value="on">
                            <div class="radio_circle"></div>
                            "First class"
                        </label>
                    </div>
                    <div class="destination_controls">
                        <div>
                            <label>From</label>
                            <div role="combobox" class="autosuggest_container" >
                                <input type="text" class="destination_input" placeholder="Country, city or airport" value="Kyiv (Any)">
                            </div>
                        </div>
                        <div>
                            <label>To</label>
                            <div role="combobox" class="autosuggest_container" >
                                <input type="text" class="destination_input" placeholder="Country, city or airport" value="Dortmund">
                            </div>
                        </div>
                        <div>
                            <label>Passengers</label>
                             <div role="combobox" class="passengers_input_container" >
                                <input type="text" class="passengers_quantity" placeholder="Number of passengers" value="1">
                            </div>
                        </div>
                    </div>
                    <div class="date_controls">
                        <div class="date_range_selector">
                            <label>Depart</label>
                            <button class="date_input" type="button" title="Departure date">
                                <span class="date_input_text">6/5/19</span>
                            </button>
                        </div>
                        <div class="date_range_selector">
                            <label>Return</label>
                            <button class="date_input" type="button" title="Departure date">
                                <span class="date_input_text">6/5/19</span>
                            </button>
                        </div>
                    </div>
                    <div class="search_btn_container">
                        <button class="search_btn" type="button" title="Search" aria-label="Search Flights">
                                Search flights
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <div class="date_picker">
            <div class="content">
                <div class="month month_left">
                    <div class="month_header">
                        <h3>May</h3>
                        <div class="weekdays">
                            @for ($i=1;$i<8;$i++)
                                <p class="weekday">Day {{$i}}</p>
                            @endfor
                        </div>
                    </div>
                    <div class="calendar">
                        @for ($i=0;$i<5;$i++)
                            <div class="week_row">
                                @for ($j=0;$j<7;$j++)
                                    <div class="single_day_box"></div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="month month_right">
                    <div class="month_header">
                        <h3>June</h3>
                        <div class="weekdays">
                            @for ($i=1;$i<8;$i++)
                                <p class="weekday">Day {{$i}}</p>
                            @endfor
                        </div>
                    </div>
                    <div class="calendar">
                        @for ($i=0;$i<5;$i++)
                            <div class="week_row">
                                @for ($j=0;$j<7;$j++)
                                    <div class="single_day_box"></div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="content">
                <h3>
                   FlyingFox 2019. All rights reserved. 
                </h3>
            </div>
        </footer>  
    </div>    
    </body>
</html>

