@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron" style="height:20rem;">
            <h1>Landlords Dashboard</h1>
<hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <br>
                 <div class="row">
                     <div class="col-md-6">
                        <p>You are in the landlords panel</p>
                     </div>
                
                    <div class="col-md-6">
                        <a href="/rooms/create" class="btn btn-primary">Upload a vacant room</a>
                    </div>
                </div>
                 
                  
                   
                </div>


            </div>
        </div>
    </div>
    <br>
    <h2>Your vaccant rooms</h2>
    <hr>
    <br>
    <div class="row">
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
    </div>
    
</div>
@endsection

