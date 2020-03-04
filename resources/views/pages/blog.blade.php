@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        @if (count($rooms)>0)
        @foreach ($rooms as $room)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                  <a href="/home" >  <h3>{{$room->room_type}}</h3></a>
                <p class="card-text">{{$room->description}}</p>
                <p class="card-text">Rent Ksh.{{$room->rent_amount}}/=</p>
                 <small>posted at {{$room->created_at}}</small>
                 
                </div>
              </div>
        </div>
        @endforeach
       
        @else
        <p>No rooms found</p>
    @endif
    </div>
    <br>
    <br>
    {{$rooms->links()}}
    
  </div>



@endsection



