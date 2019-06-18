<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

       $flights = Flight::where('From','=',request('From'))
           ->where('To', '=', request('To'))
           ->where('Date', '=', request('depart_date'))
           ->select('From','To', 'Price', 'DepartTime', 'ArriveTime', 'CarrierURL')
           ->paginate(6);
       //dd($flights);
       return view('flights.index', compact('flights'));

    }

}
