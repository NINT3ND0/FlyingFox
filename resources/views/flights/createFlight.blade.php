@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@endsection

@section('content')
    <div class="content">
        <h1 class="title">Create Flight</h1>

        <form method="POST" action="/home/edit-flights" style="margin-bottom: 1em;">
            {{ csrf_field() }}


            <div class="field">
                <label class="label" for="from">From</label>

                <div class="control">
                    <input type="text" class="input" name="From" placeholder="From">
                </div>
            </div>

            <div class="field">
                <label class="label" for="to">To</label>

                <div class="control">
                    <input type="text" class="input" name="To" placeholder="To">
                </div>
            </div>


            <div class="field">
                <label class="label" for="date">Date</label>

                <div class="control">
                    <input type="date" class="input" name="Date" placeholder="Date">
                </div>
            </div>

            <div class="field">
                <label class="label" for="price">Price</label>

                <div class="control">
                    <input type="number" class="input" name="Price" placeholder="Price">
                </div>
            </div>

            <div class="field">
                <label class="label" for="departureTime">Departure Time</label>

                <div class="control">
                    <input type="text" class="input" name="DepartTime" placeholder="Departure">
                </div>
            </div>

            <div class="field">
                <label class="label" for="arrivalTime">Arrival Time</label>

                <div class="control">
                    <input type="text" class="input" name="ArriveTime" placeholder="Arrival">
                </div>
            </div>

            <div class="field">
                <label class="label" for="carrier">Carrier URL</label>

                <div class="control">
                    <input type="text" class="input" name="CarrierURL" placeholder="Carrier URL">
                </div>
            </div>



            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Create Flight</button>
                </div>
            </div>
        </form>


    </div>
@endsection
