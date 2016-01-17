@extends('master')
@section('content')
<h1>List of your Contacts</h1>
<hr>
<a href="{{$base_url}}/contact/create"><button class="btn btn-primary">Create</button></a>
<table class="table table-bordered">
<thead>
	<tr>
		<td>Sr#</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Phone</td>
		<td>Details</td>
		<td>Actions</td>
	</tr>
</thead>
<tbody>
{{-- */$i=1;/* --}}
@if(!empty($contacts))
@foreach($contacts as $val)

   <tr>
   	<td>{{$i}}</td>
   	<td>{{$val['first_name']}}</td>
   	<td>{{$val['last_name']}}</td>
   	<td>{{$val['phone']}}</td>
   	<td>{{$val['details']}}</td>
   	<td>
   		<a href="{{$base_url}}/contact/update/{{$val['id']}}"><button class="btn btn-info">Update</button></a>
   		<a href="{{$base_url}}/contact/delete/{{$val['id']}}"><button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button></a>
   	</td>
   </tr>
   {{-- */$i++;/* --}} 	
@endforeach
@else
<tr><td colspan="6">Sorry No data found.</td></tr>
@endif
</tbody>
</table>
@stop