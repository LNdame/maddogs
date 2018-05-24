@extends('layouts.app')

    @section('content')

        <h2>List of Registered Banks</h2>
        <br>
        <a href="/banks/create" class="btn btn-primary pull-right">Add New Bank</a>
        <a href="/home" class="btn btn-default">Back</a>

        <br><hr>

        @if(count($banks)>0)

        @foreach($banks as $bank)
        
        <div class="row">
            <div class="col-md-8">
                <h3>{{$bank->bank_name}}</h3>
            </div>
            
            <div class="col-md-4">
                <a href="/banks/{{$bank->id}}" class="btn btn-success">View</a>
                <a href="/banks/{{$bank->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/" class="btn btn-danger">Delete</a>
            </div>
        </div><hr>
            
        @endforeach

        @endif

        {{$banks->links()}}


        @endsection
