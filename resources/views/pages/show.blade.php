@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
       <a href="/landlords" class="btn btn-info">Go back</a>
       <br>
       <br>
        <div class="card" style="width: 64rem;">
            
            <div class="card-body">
                <h1>{{$room->room_type}}</h1>
             <p class="card-text">{{$room->description}}</p>
            <p class="card-text">Location. {{$room->location}}</p>
            <p class="card-text">Rent Ksh.{{$room->rent_amount}}/=</p>
             <small>posted at {{$room->created_at}}</small>
             
            </div>
          </div> 
        </div>
    </div>
     <br>
     <br>
        <div class="row">
        <div class="col-md-10">
            <a href="/rooms/{{$room->id}}/edit" class="btn btn-info">Edit Room details</a>
        </div>
        <div class="col-md-2">
            {!!Form::open(['action'=>['RoomsController@destroy',$room->id],'method'=>'POST','class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        </div>
        
         
        </div>
        

    

</div>
    
@endsection