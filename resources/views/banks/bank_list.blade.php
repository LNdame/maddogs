@extends('layouts.app')

    @section('content')
    <div class="container">


        <h2>List of Registered Banks</h2>
        <br>
        <a href="/banks/create" class="btn btn-primary pull-right">Add New Bank</a>
        <a href="/home" class="btn btn-default">Back</a>

        <br><hr>



        @if(count($banks)>0)


        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>

        @foreach($banks as $bank)

            <tr>
                <td> <h4>{{$bank->bank_name}}</h4></td>
                <td>
                    <a href="/banks/{{$bank->id}}" class="btn btn-success">View</a>
                <a href="/banks/{{$bank->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/" class="btn btn-danger">Delete</a>
            </td>
                
            </tr>
        
        
            
        @endforeach

        </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Actions</th>
                    
                </tr>
            </tfoot>
        </table>
        @endif

        {{$banks->links()}}

</div>
        @endsection
