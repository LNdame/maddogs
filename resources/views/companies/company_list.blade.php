@extends('layouts.app')

    @section('content')
<div class="gtco-container">
        <h2>List of registered companies</h2>
        <br>
        <a href="/companies/create" class="btn btn-primary pull-right">Add New Company</a>
        <a href="/home" class="btn btn-default">Back</a>
        <br><hr>


    @if(count($companies)>0)
           
        
        @foreach($companies as $company)
        
        <div class="row">
            <div class="col-md-4">
                <h3>{{$company->company_name}}</h3>
            </div>
            <div class="col-md-2">
                    <h5>{{$company->primary_contact_email}}</h5>
            </div>
            <div class="col-md-2">
                    <h5>{{$company->registration_number}}</h5>
            </div>
            <div class="col-md-4">
                <a href="/companies/{{$company->id}}/upload" class="btn btn-special">Upload Documents</a>
                <a href="/companies/{{$company->id}}" class="btn btn-success">View</a>
                <a href="/companies/{{$company->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/" class="btn btn-danger">Delete</a>
            </div>
        </div><hr>
            
        @endforeach

        {{$companies->links()}}
        


    @else

        <div class="well">
            <p>no companies listed currently</p>
        </div>
    @endif
        
        </div>

    @endsection
