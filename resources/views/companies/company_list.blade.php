@extends('layouts.app')

    @section('content')
<div class="container">
        <h2>List of registered companies</h2>
        <br>
        <a href="{{route('companies.create')}}" class="btn btn-primary pull-right">Add New Company</a>
        <a href="{{url('/home')}}" class="btn btn-default">Back</a>
        <br><hr>


    @if(count($companies)>0)
           

			
		<div class="row">
			<div class="col-md-3">
				<h4>Name</h4>
			</div>
			<div class="col-md-3">
				<h4>Contact</h4>
			</div>
			<div class="col-md-2">
				<h4>Reg No.</h4>
			</div>
			<div class="col-md-2">
				<h4>Submissions</h4>
			</div>
			<div class="col-md-2">
				<h4>Actions</h4>
			</div>
		</div><hr>
		
		@foreach($companies as $company)
        
        <div class="row">
        
        

				<div class="col-md-3">
				{{$company->company_name}}
				</div>
				<div class="col-md-3">
				<p>{{$company->primary_contact_email}}</p>
				</div>
				<div class="col-md-2">
				<p>{{$company->registration_number}}</p>
				</div>
				<div class="col-md-2">
					<div class="row">
						<a class="text-center" href="{{route('uploads.create')}}">Upload</a>
					</div><br>
					<div class="row">
						<a class="text-center"href="{{route('tracking.create')}}">Tracking</a>
					</div>
				</div>
				<div class="col-md-2">

                        <div class="row">
							<a class="text-center"href="{{route('companies.show', ['company'=>$company] )}}">View</a>
						</div><br>
                        <div class="row">
							<a class="text-center"href="{{route('companies.edit', ['company'=>$company] )}}">Edit</a>
                        </div><br>
                        
                        <div class="row">
                            {!!Form::open(['action' => ['CompaniesController@destroy', $company->id], 'method' =>'POST'])!!} 
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Delete',['class' => 'text-center']) !!}
                            {!! Form::close() !!}
						</div>
		
				</div>
		</div>
		<hr>
	@endforeach

        {{$companies->links()}}
        


    @else

        <div class="well">
            <p>no companies listed currently</p>
        </div>
    @endif
        
        </div>

    @endsection
