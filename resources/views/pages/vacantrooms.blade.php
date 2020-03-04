@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Vacant rooms</h1> 
    <hr>
    <div class="row">
        @if (count($rooms)>0)
        @foreach ($rooms as $room)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                
                <div class="card-body">
                    <h3><a href="/rooms/{{$room->id}}">{{$room->room_type}}</a></h3>
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