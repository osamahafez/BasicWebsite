@extends('layouts/app')

@section('content')
    <h1>Contact</h1>

    <!--START FORM MADE BY LARAVEL COLLECTIVE-->
    {!! Form::open(['url' => 'contact/submit', 'class' => 'contact-form']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}} 
            {{Form::text('name', '', ['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}} 
            {{Form::text('email', '', ['class'=>'form-control', 'required'=>'required'])}}
        </div>
        <div class="form-group">
            {{Form::label('msg', 'Message')}} 
            {{Form::textarea('msg', '', ['class'=>'form-control', 'required'=>'required'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <!--END FORM MADE BY LARAVEL COLLECTIVE-->

@endsection
