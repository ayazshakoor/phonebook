@extends('master')
@section('content')
<h1>Add data to the form below</h1>
<hr>
  {!! Form::open() !!}
<div class="form-group">
  {!! Form::label('first_name','First Name:') !!}
  {!! Form::text('first_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('last_name','Last Name:') !!}
  {!! Form::text('last_name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('phone','Phone:') !!}
  {!! Form::text('phone',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('city','City:') !!}
  {!! Form::text('city',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('state','State:') !!}
  {!! Form::text('state',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('zip','Zip Code:') !!}
  {!! Form::text('zip',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('details','Details:') !!}
  {!! Form::textarea('details',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit('Add Contact',['class'=>'btn btn-primary']) !!}
  {!! Form::hidden('id',null) !!}
</div>
  {!! Form::close() !!}
{{--<form role="form" method="post" action="{{$url}}">
  <div class="form-group">
    <label for="title">First Name:</label>
    <input type="text" name="first_name" class="form-control" value="@if(isset($contact['first_name'])){{$contact['first_name']}}@endif" >
  </div>
  <div class="form-group">
    <label for="title">Last Name:</label>
    <input type="text" name="last_name" class="form-control" value="@if(isset($contact['last_name'])){{$contact['last_name']}}@endif" >
  </div>
  <div class="form-group">
    <label for="title">Phone:</label>
    <input type="text" name="phone" class="form-control" value="@if(isset($contact['phone'])){{$contact['phone']}}@endif" >
  </div>
  <div class="form-group">
    <label for="title">Details:</label>
    <input type="text" name="details" class="form-control" value="@if(isset($contact['details'])){{$contact['details']}}@endif" >
  </div>
  <input type="hidden" name="id" value="@if(isset($contact['id'])){{$contact['id']}}@endif">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>--}}

@stop