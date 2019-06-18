@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
@endsection

@section('content')
    <div class="content">
        <h1 class="title">Edit Flight</h1>

        <form method="POST" action="/home/edit-flights/{{$flight->id}}" style="margin-bottom: 1em;">
            {{method_field('PATCH')}}
            {{ csrf_field() }}


            <div class="field">
                <label class="label" for="from">From</label>

                <div class="control">
                    <input type="text" class="input" name="From" placeholder="From" value="{{$flight->From}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="to">To</label>

                <div class="control">
                    <input type="text" class="input" name="To" placeholder="To" value="{{$flight->To}}">
                </div>
            </div>


            <div class="field">
                <label class="label" for="date">Date</label>

                <div class="control">
                    <input type="date" class="input" name="Date" placeholder="Date" value="{{$flight->Date}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="price">Price</label>

                <div class="control">
                    <input type="number" class="input" name="Price" placeholder="Price" value="{{$flight->Price}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="departureTime">Departure Time</label>

                <div class="control">
                    <input type="text" class="input" name="DepartTime" placeholder="Departure" value="{{$flight->DepartTime}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="arrivalTime">Arrival Time</label>

                <div class="control">
                    <input type="text" class="input" name="ArriveTime" placeholder="Arrival" value="{{$flight->ArriveTime}}">
                </div>
            </div>

            <div class="field">
                <label class="label" for="carrier">Carrier URL</label>

                <div class="control">
                    <input type="text" class="input" name="CarrierURL" placeholder="Carrier URL" value="{{$flight->CarrierURL}}">
                </div>
            </div>



            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Update Flight</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/home/edit-flights/{{$flight->id}}">
            @method('DELETE')
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class="button">Delete Flight</button>
                </div>
            </div>
        </form>
    </div>
@endsection
