@extends('layouts.app')
@section('content')
  <div class="container">
      <h1>This is the room booking page</h1>
      <hr><br>
      <a href="/book" class="btn btn-primary">Go back</a>
      <br>
      <br>
  
      {!! Form::open(['action'=>'UserbookingController@store' , 'method'=>'POST']) !!}      
        @if (count($rooms)>0)
        @foreach ($rooms as $room)
        <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h3>{{$room->room_type}}</h3>
                <p class="card-text">{{$room->description}}</p>
                <p class="card-text">Rent Ksh.{{$room->rent_amount}}/=</p>
                 <small>posted at {{$room->created_at}}</small>
                 <br>
                 <br>
                 {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
              </div>
        </div>
        @endforeach
      </div>
        @else
        <p>No rooms found</p>
    @endif
  
    {!! Form::close() !!}
   </div>
   <br>
   <br>
  {{$rooms->links()}}



@endsection



