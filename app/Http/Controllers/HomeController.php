<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;
use App\Http\Controllers\ParseController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function parseNews()
    {
      ParseController::parse();
      return redirect('/news');
    }


    public function showFlights()
    {
        $flights = Flight::select('id', 'Date', 'From', 'To', 'Price', 'DepartTime', 'ArriveTime', 'CarrierURL')->paginate(6);

        return view('flights.showFlights', compact('flights'));
    }


    public function editFlight(Flight $flight)
    {
        return view('flights.editFlight', compact('flight'));
    }



    public function createFlight()
    {
        return view('flights.createFlight');
    }


    public function updateFlight(Flight $flight)
    {
        $flight->update(request(['From', 'To', 'Date', 'Price', 'DepartTime', 'ArriveTime', 'CarrierURL']));
        return redirect('/home/edit-flights');
    }


    public function deleteFlight(Flight $flight)
    {
        $flight->delete();
        return redirect('/home/edit-flights');
    }


    public function storeFlight()
    {
        Flight::create(request(['From', 'To', 'Date', 'Price', 'DepartTime', 'ArriveTime', 'CarrierURL']));
        return redirect('/home/edit-flights');
    }
}
