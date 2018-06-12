@extends('layouts.app')

    @section('content')
<div class="container">
        <h2>List of registered companies</h2>
        <br>
        <a href="{{route('companies.create')}}" class="btn btn-primary pull-right">Add New Company</a>
        <a href="{{url('/home')}}" class="btn btn-default">Back</a>
        <br><hr>


    @if(count($companies)>0)
           
        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                 <th>Primary Contact</th>
                  <th>Registration</th>
                  <th>Upload</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($companies as $company)
        
        <tr>
                <td class="col-md-3"> {{$company->company_name}}</td>
                <td class="col-md-3"> {{$company->primary_contact_email}} </td>
                <td class="col-md-2"> {{$company->registration_number}} </td>
                <td class="col-md-1">
                    <span class="btn-group-sm btn-group-vertical">
                        <a href="{{route('uploads.create')}}" class="btn btn-info">Upload</a>
                        <a href="{{route('tracking.create')}}" class="btn btn-info">Tracking</a>
                    </span>
                </td>

                <td class="col-md-3">
                    <span class="btn-group-sm">
                        <a href="/companies/{{$company->id}}" class="btn btn-success">View</a>
                        <a href="/companies/{{$company->id}}/edit" class="btn btn-warning">Edit</a>
                            {!!Form::open(['action' => ['BanksController@destroy', $company->id], 'method' =>'POST'])!!} 
                                {!! Form::hidden('_method', 'DELETE') !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                    </span>
                    
                </td>  
        </tr>
    
        @endforeach
        </tbody>
           
        </table>

        {{$companies->links()}}
        


    @else

        <div class="well">
            <p>no companies listed currently</p>
        </div>
    @endif
        
        </div>

    @endsection
