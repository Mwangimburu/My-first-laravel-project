@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Upload a vacant room</h1>
            <hr>
            <p>Fill in the room details </p>
            {!! Form::open(['action'=>'RoomsController@store' , 'method'=>'POST','enctype'=>"multipart/form-data"]) !!}
            <div class="form-group">
                {{Form::label('room-type','Room Type') }}               
                {{Form::select('room-type', ['Single room' => 'Single room', 'bedsitter' => 'Bed sitter',
            'onebedroom'=>'One bedroom','Twobedrooms'=>'Two bedrooms'], null, [ 'class'=>'form-control ','placeholder' => 'Select type...'])}}
                <br>
                {{Form::label('location','Location') }}
                {{Form::text('location','',['class'=>'form-control','placeholder'=>'Location area'])}}
                <br>
                {{Form::label('description','Description') }}
                {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Room description'])}}
                    <br>
                {{Form::label('rent','Rent Amount') }}
                {{Form::number('rent','',['class'=>'form-control','placeholder'=>'Rent amount','min'=>'0'])}}
                <br>
               
                <br>
                {{ Form::file('image', null, array('id' => 'image', 'class' => 'custom-file-control', 'placeholder' => 'Image')) }}
                <br>
               
                <br>
                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
            
    
            {!! Form::close() !!}

        </div> 

    </div>

</div>
    
@endsection