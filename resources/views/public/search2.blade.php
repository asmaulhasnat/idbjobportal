@extends('public.layout.public_layout')
@section('page_title')
Search
@endsection
@section('style')

@endsection
@section('content')
<style>
	.searchable{
		height: 250px;
		overflow: auto;
	}
.search {
  margin-top: 5px;
  margin-bottom: 10px;
}
.headline3 a {
  text-decoration: none;
}
.panel.heading {
  padding: 10px 15px;
}

</style>
<style type="text/css">
	div.checkbox{
		max-height: 200px;
		width: 100%;
		overflow: auto;
		float: left;
	}
</style>

	<div class="wrapper">
		<div class="container">
		  {{-- Start search --}}
	<div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                
                <div class="search-form wow pulse" data-wow-delay="0.8s">
                    <form action="{{url('search') }}" method="get" class=" form-inline">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input name="keyword" type="text" class="form-control" placeholder="Job Key Word">
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_division', $division,null, ['placeholder'=>'all','class' => 'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!!Form::select('search_category', $category,null, ['placeholder'=>'all','class' => 'form-control'])!!}
                        </div>
                        <input type="submit" class="btn" value="Search">

                    </form>
                </div>
            </div>
        </div> 
        {{-- End search --}}
			<div class="row">
			<div class="col-xs-12">   
				<div class="row heading-wrapper">
					<div class="col-xs-12">

						{{-- <h1 class="search" data-automation="jobseeker-job-count"> We found {{isset($countPrimarySearch)? $countPrimarySearch : 0}} 

                              @if(isset($_GET['keyword']) && $_GET['keyword'] !=""){{
						          $_GET['keyword']

							}} 
							@endif

                                   jobs 
						
                            @if(isset($_GET['search_category']) && $_GET['search_category'] !=""){{" for ".
						          $catMachingName[$_GET['search_category']]

							}}   
							 @endif 
						    
						   @if(isset($_GET['search_division']) && $_GET['search_division'] !="")
						   {{ " in ".
							$locMachingName[$_GET['search_division']]
							}}    @endif 

						</h1> --}}


					</div>
				</div>           
			</div>
			</div>


		<div class="row content-wrapper">
			<div class="col-md-4">
				<button id="search-collapse-filters" class="btn btn-default icon-minus-circled search-panel-button hidden-lg hidden-md" rel=".search-panel-trigger" type="button">Collapse/expand all filters</button>
				
				<div class="facets-wrapper">
					<div class="row">
							<div id="facets" class="col-xs-12" data-url="/en/jobs-dhaka/?by=mirpur">
								<div class="facets-heading-wrapper clearfix">
									<h4 class="pull-left">Filter by:</h4>
									<p>
									<small class="pull-right text-primary reset-all" data-reset-url="/en/jobs/?by=mirpur"> Reset all </small>
									</p>

								</div>

                            {{--   form start --}}
                              <form action="seacrchable" id="filterform">
								<div class="panel panel-default searchable">
									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">Job location</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">
										@forelse($divisions as $div)
										  <p><label><input type="checkbox" @if($count_by_div[$div->id]==0){{"disabled"}}@endif name="location[]" value="{{$div->id}}">{{$div->name." (".$count_by_div[$div->id].")"}}</label></p>
										  @empty
										  no location found
										 @endforelse
										</div>
									</div>
								</div>

								<div class="panel panel-default searchable">

									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">Company industry</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">
										 @forelse($get_ind as $ind)
										  <p><label><input type="checkbox" @if($pic[$ind->id]==0){{"disabled"}}@endif name="industry[]" value="{{$ind->id}}">{{$ind->industrytypename." (".$pic[$ind->id].")"}}</label></p>
										  @empty
										  no Industry type found
										 @endforelse
										</div>
									</div>
								</div>

								<div class="panel panel-default searchable">
								
									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">Job category</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">
										  
										  @forelse($categorysForCountJob as $cfc)
										  <p><label><input type="checkbox" @if($countCategoryWiseJob[$cfc->id]==0){{"disabled"}}@endif name="category[]" value="{{$cfc->id}}">{{$cfc->	catagoryname." (".$countCategoryWiseJob[$cfc->id].")"}}</label></p>
										  @empty
										  no Industry type found
										 @endforelse
										</div>
									</div>
								</div>

								<div class="panel panel-default searchable">
									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">Date posted</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">
										
										  <p><label><input type="checkbox" name="date[]" @if($todays_job=='0'){{"disabled"}} @endif value="t"> today ({{$todays_job}})</label></p>
										  <p><label><input type="checkbox" name="date[]"   @if($two_days_agos_job=='0'){{"disabled"}} @endif value="p2"> Past 2 days ({{$two_days_agos_job}})</label></p>
										  <p><label><input type="checkbox" name="date[]"  @if($seven_days_agos_job=='0'){{"disabled"}} @endif value="p7"> Past 7 days  ({{$seven_days_agos_job}})</label></p>
										  <p><label><input type="checkbox" name="date[]"  @if($last_months_job=='0'){{"disabled"}} @endif value="p30"> Past 30 days  ({{$last_months_job}})</label></p>
										</div>
									</div>
								</div>

							
								<div class="panel panel-default searchable">
									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">JOB TYPE</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">
										 <p><label><input type="checkbox" name="jobtype[]"  @if(isset($_GET['jobtype']) && in_array('full-time', $_GET['jobtype']))
										  {{'checked'}} @endif @if($jobtypecount[0]=='0'){{"disabled"}} @endif value="full-time">Full Time ({{$jobtypecount[0]}})</label></p>
										  <p><label><input type="checkbox" name="jobtype[]" @if(isset($_GET['jobtype']) && in_array('part-time', $_GET['jobtype']))
										  {{'checked'}}@endif @if($jobtypecount[1]=='0'){{"disabled"}} @endif value="part-time">Part Time ({{$jobtypecount[1]}})</label></p>
									<p><label><input type="checkbox" name="jobtype[]"  @if(isset($_GET['jobtype']) && in_array('contactual', $_GET['jobtype']))
										  {{'checked'}}@endif @if($jobtypecount[2]=='0'){{"disabled"}} @endif value="contactual">contactual ({{$jobtypecount[2]}})</label></p>
										
										</div>
									</div>
								</div>
									<div class="panel panel-default searchable">
									<div class="panel-heading">
									<span style="font-size: 18px; text-transform: uppercase;">COMPANY NAME</span>
									</div>
									<div class="panel-body">
										<div class="checkbox">

										 @forelse($companyName as $com)
										 @if($com->companyname)
										  <p><label><input type="checkbox" name="company_id[]" @if($countCompanyWiseJob[$com->id] == "0") {{"disabled"}} @endif value="{{$com->employer_id}}">{{$com->companyname}}({{$countCompanyWiseJob[$com->id]}})</label></p>
										  @endif
										 @empty
										 <h2>No company found</h2>
										 @endforelse
										</div>
									</div>
								</div>
							
							</div>
					</div>	
				</div>	
			</div><!--end col-md-4-->
			
			<div class="col-md-8">

			<div class="row">

				<div class="btn-group col-sm-12">
				  <select id="shortby" name="shortby" data-toggle="dropdown" class="btn btn-default dropdown-toggle pull-right" style="text-transform: uppercase;">Sort By Date Posted <span class="caret"></span>

				    <ul class="dropdown-menu noclose">
				      <li><option value="jobs.created_at desc">Date Posted</option></li>
				      <li><option value="jobs.jobtitle asc">Job title</option></li>
				      <!-- Other items -->
				    </ul>
				   <select>
				</div>
				<form>

			</div>


			<div class="row">
			

 				<div class="btn-group col-sm-12">

      					<h1 class="search" data-automation="jobseeker-job-count"> We found {{isset($countPrimarySearch)? $countPrimarySearch : 0}} 

                             @if(isset($_GET['keyword']) && $_GET['keyword'] !=""){{
						          $_GET['keyword']

							}} 
							@endif

                                   jobs 
						
                            @if(isset($_GET['search_category']) && $_GET['search_category'] !=""){{" for ".
						          $catMachingName[$_GET['search_category']]

							}}   
							 @endif 
						    
						   @if(isset($_GET['search_division']) && $_GET['search_division'] !="")
						   {{ " in ".
							$locMachingName[$_GET['search_division']]
							}}    @endif 

						</h1>

				</div>

			</div>


			  
			
           {{--  @if(isset($searchableQuery) && count($searchableQuery)>0)
				
				@foreach($searchableQuery as $job)
        		<div class="well">
						
        		
        			<div class="row">
        				<div class="col-sm-12">
        					<h4 class="text-success">{{ $job->companyname }}</h4>
        				</div>
        				<div class="col-sm-12">

        					<h3>{{ $job->jobtitle }}</h3>
        				</div>
        				<div class="col-sm-12">
        					<div class="row">
        					<div class="col-sm-9">
        						<div class="row">
		        					<div class="col-sm-3">Education:</div>
		        					<div class="col-sm-9">
		        						{{ $job->educational_qualification }}
		        					</div>
	        					</div>
        					</div>
	        				</div>
        				</div>
        			</div>
        			<div class="row">
        				<div class="col-sm-9">
        					<div class="row">
        						<div class="col-sm-3">Experience:</div>
        						<div class="col-sm-9">
        							{{ $job->job_experiences_year }} at {{ $job->job_experiences_field }}
        						</div>
        					</div>
        				</div>
        				<div class="col-sm-3">
        					Deadline: {{ $job->deadline }}
        				</div>
        			</div>
 --}}
 				

       @if(isset($searchableQuery) && count($searchableQuery)>0)
				
		@forelse($searchableQuery as $job)
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
						<div class="panel heading">
							<small class="text-muted">{{substr($job->created_at,0,strpos($job->created_at," "))}}</small>
							<p class="headline3">
							<strong>
							<a href="{{url('showdetails/'.$job->id)}}" style="font-size: 22px;">{{$job->jobtitle}}</a>
							</strong>
							<small style="font-size: 18px;">{{"(".$job->jobtype.")"}}</small>
							</p>
						</div>
						<div class="panel body" style="padding: 0 15px 2px;">
							
							<ul class="list-inline">
							<li class="panel-footer-icon-wrapper">
							<i class="icon icon-dot-circled"></i>
							<a class="js-company-name" href="
" target="_blank">{{ $job->companyname }} </a>
							</li>
							<li class="panel footer-icon-wrapper">
							<i class="icon icon-location"></i>
							{{ $job->div_name }}
							</li>
							<li class="panel-footer-icon-wrapper">
							<i class="icon icon-bookmark"></i>
						{{-- 	{{substr($job->jobtitle,strrpos($job->jobtitle,' '))}} --}}
						@php
					$modified=explode(' ',$job->jobtitle);
						
						$slice=array_slice($modified,-2);
						//print_r($slice);
						$final= implode(' ',$slice);
						echo $final;

						@endphp
						
							</li>
							<li class="pull-right">
							<a class="btn btn-info pull-right icon-eye" href="{{url('showdetails/'.$job->id)}}">View</a>
							</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			@empty
			<h2>NO jobs Found </h2>`
			@endforelse

            {{ $searchableQuery->appends(Input::except('page'))->links() }}


			@endif

		</div>
		</div>	
			        
		</div><!--container end-->
		@section('script')


		{{Html::script('')}}
		@endsection
		@endsection
