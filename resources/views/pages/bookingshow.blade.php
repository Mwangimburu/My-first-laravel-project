@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
       <a href="/book" class="btn btn-info">Go back</a>
       <br>
       <br>
       <div class="card" style="width: 64rem;">
            
        <div class="card-body">
            <h1>{{$booking->room_type}}</h1>
         <p class="card-text">{{$booking->description}}</p>
        <p class="card-text">Location. {{$booking->location}}</p>
        <p class="card-text">Rent Ksh.{{$booking->rent_amount}}/=</p>
         <small>posted at {{$booking->created_at}}</small>
         
        </div>
      </div> 
    
        </div>
    </div>
     <br>
     <br>
   

    

</div>
    
@endsection