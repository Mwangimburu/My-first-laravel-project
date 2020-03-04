<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\landlords;

class LandlordsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:landlords');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {     $landlordid=auth()->user()->id;
          $landlord=landlords::find($landlordid);  
        return view('landlordspage')->with('rooms',$landlord->rooms);
    }
}
