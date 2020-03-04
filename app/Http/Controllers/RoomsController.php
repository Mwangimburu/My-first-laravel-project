<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
         $this->middleware('auth:landlords');
     }
    public function index()
    {   $rooms= Room::orderBy('created_at','desc')->paginate(3);
       return view('pages.vacantrooms')->with('rooms',$rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'room-type'=>'required',
            'location'=>'required',
            'description'=>'required',
            'rent'=>'required',
            'image'=>'image|nullable'
        ]);
        if($request->hasFile('image')){
            $filenamewithext=$request->file('image')->getClientOriginalName();
            $filename=pathinfo($filenamewithext, PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $filenametostore=$filename.'_'.time().'.'.$extension;
            $path= $request->file('image')->storeAs('public/images',$filenametostore);

        }
         
        $room=new Room;
        $room->room_type=$request->input('room-type');
        $room->location=$request->input('location');
        $room->description=$request->input('description');
        $room->rent_amount=$request->input('rent');
        $room->landlords_id=auth('landlords')->user()->id;
        $room->image=$filenametostore;
        $room->save();
         

        return redirect('/landlords')->with('success','Room Uploaded Succefully');

        


     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */  
    public function show($id)
    { 
        $room=Room::find($id);
        return view('pages.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room=Room::find($id);
        return view('pages.edit')->with('room', $room);
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
        $this->validate($request,[
            'room-type'=>'required',
            'location'=>'required',
            'description'=>'required',
            'rent'=>'required',
        ]);
         
        $room=Room::find($id);
        $room->room_type=$request->input('room-type');
        $room->location=$request->input('location');
        $room->description=$request->input('description');
        $room->rent_amount=$request->input('rent');
        $room->save();
         

        return redirect('/landlords')->with('success','Room Updated Succefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room= Room::find($id);
        $room->delete();
        return redirect('/landlords')->with('success','Room Deleted Succefully');
    }
   
}
