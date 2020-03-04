@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h1><a href="/book/create">Add a booking</a></h1>
      </div>
    </div>
    
    <hr>
    <br>
    <br>
    <div class="row">
      @if (count($bookings)>0)
      @foreach ($bookings as $booking)
      <div class="col-md-4">
          <div class="card" style="width: 18rem;">
              
              <div class="card-body">
                  <h3><a href="/book/{{$booking->id}}">{{$booking->room_type}}</a></h3>
              <p class="card-text">{{$booking->description}}</p>
              <p class="card-text">Rent Ksh.{{$booking->rent_amount}}/=</p>
               <br>
             
               
              </div>
            </div>
      </div>
      @endforeach
     
      @else
      <p>No rooms found</p>
  @endif
  </div>
  <br><br>
    
  {{$bookings->links()}}
  </div>



@endsection



