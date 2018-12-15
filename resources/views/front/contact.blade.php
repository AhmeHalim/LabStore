@extends('layout.main')
@section('title','Contact Us')
@section('content')

    <div class="row">
        <div class="small-6 small-centered columns">
            <h3>Contact Us</h3>

            {!! Form::open() !!}

            <div class="form-group">
                {{Form::label('firstname','First Name')}}
                {{Form::text('firstname',null,array('class'=>'form-control'))}}
            </div>

            <div class="form-group">
                {{Form::label('lastname','Last Name')}}
                {{Form::text('lastname',null,array('class'=>'form-control'))}}
            </div>

            <div class="form-group">
                {{Form::label('email','E-Mail')}}
                {{Form::text('email',null,array('class'=>'form-control'))}}
            </div>

            <div class="form-group">
                {{Form::label('message','Message')}}
                {{Form::textarea('message',null,array('class'=>'form-control'))}}
            </div>

            {{Form::submit('Send Message',array('class'=>'button success'))}}

            {!! Form::close() !!}
        </div>

    </div>
    @endsection