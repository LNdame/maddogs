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
                  <th>Registration Number</th>
                  <th>Add Documentation</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach($companies as $company)
        
        <tr>
                <td> <h4>{{$company->company_name}}</h4></td>
                <td> <h5>{{$company->primary_contact_email}}</h5> </td>
                <td> <h5>{{$company->registration_number}}</h5> </td>
                <td><a href="/companies/{{$company->id}}/upload" class="btn btn-special btn-sm">Upload Documents</a> </td>
                <td>
                    <a href="{{route('companies.show',['id'])}}" class="btn btn-success btn-sm">View</a>
                    <a href="/companies/{{$company->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/" class="btn btn-danger btn-sm">Delete</a>
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
