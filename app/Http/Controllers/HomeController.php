<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\bookings;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {  
        $bookings=bookings::orderBy('room_type','desc')->paginate(2);
        return view('pages.bloguser')->with('bookings',$bookings);
    }
}
