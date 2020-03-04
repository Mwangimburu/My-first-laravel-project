@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Edit room details</h1>
            <hr>
            <p>Fill in the room details </p>
            {!! Form::open(['action'=>[ 'RoomsController@update',$room->id ] , 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('room-type','Room Type') }}               
                {{Form::select('room-type', ['single-room' => 'Single room', 'Bed sitter' => 'Bed sitter',
            'One bedroom'=>'One bedroom','Twobedroom'=>'Two bedrooms'],$room->room_type, [ 'class'=>'form-control','placeholder' => 'Select type...'])}}
                {{Form::label('location','Location') }}
                {{Form::text('location',$room->location,['class'=>'form-control','placeholder'=>'Location area'])}}
                {{Form::label('description','Description') }}
                {{Form::textarea('description',$room->description,['class'=>'form-control','placeholder'=>'Room description'])}}
                {{Form::label('rent','Rent Amount') }}
                {{Form::number('rent',$room->rent_amount,['class'=>'form-control','placeholder'=>'Rent amount','min'=>'0'])}}
                <br>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
            
    
            {!! Form::close() !!}

        </div> 

    </div>

</div>
    
@endsection