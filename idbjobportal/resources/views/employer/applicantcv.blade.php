@extends('employer.ample.index')
@section('title')
Manage Jobs
@endsection
@section('style')
{!!Html::style('css/managejobs.css')!!} 
@endsection
@section('script')
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="col-sm-12" style="background-color: #FFFFFF !important">
	<h2>Applicant Resume</h2>
</div>
<hr>
<br>
<hr>
@include('jobseeker.dashboard.partial.cv')
@php
$shirt_list_value=$single_applicant_shortlists[0]->short_list;
@endphp
@if($shirt_list_value!=1)
	<form action="{{url('employer/shorted_list')}}" method="post" id="add">
		{{csrf_field()}}
		<input type="hidden" value="add" name="remove"/>
		<input type="hidden" value="{{$single_applicant_shortlists[0]->job_id}}" name="job_id"/>
		<input type="hidden" value="{{$personaldetails->jobseeker_id}}" name="jobseeker_id"/>
		<button type="submit"class="btn btn-success pull-right">Add to short list</button>
	</form>
	@else
		<form action="{{url('employer/shorted_list')}}" method="post" id="remove">
		{{csrf_field()}}
		<input type="hidden" value="remove" name="remove"/>
		<input type="hidden" value="{{$single_applicant_shortlists[0]->job_id}}" name="job_id"/>
		<input type="hidden" value="{{$personaldetails->jobseeker_id}}" name="jobseeker_id"/>
		<button type="submit"class="btn btn-danger pull-right ">Remove from short list</button>
	</form>
		
	
	@endif
@endsection