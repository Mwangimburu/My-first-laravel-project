<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bookings;
use App\Room;

class UserbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {    $bookings=bookings::orderBy('room_type','desc')->paginate(2);
        return view('pages.bloguser')->with('bookings',$bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {   $rooms= Room::orderBy('created_at','desc')->paginate(2);
            return view('pages.bookingpage')->with('rooms',$rooms);
         }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $booking = new bookings;
        $booking->room_type=$room->room_type;
        $booking->location=$room->location;
        $booking->description=$room->description;
        $booking->rent_amount=$room->rent_amount;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $booking=bookings::find($id);
      return view('pages.bookingshow')->with('booking',$booking);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
