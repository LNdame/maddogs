@extends('layouts.app')

    @section('content')
    <div class="container">


        <h2>List of Registered Banks</h2>
        <br>
        <a href="{{url('/banks/create')}}" class="btn btn-primary pull-right">Add New Bank</a>
        <a href="{{url('/home')}}" class="btn btn-default">Back</a>

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
                <td class="col-md-9"> {{$bank->bank_name}}</td>
                <td class="col-md-3">
                    <a href="/banks/{{$bank->id}}" class="btn btn-success btn-sm">View</a>
                    <a href="/banks/{{$bank->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
           
                    {!!Form::open(['action' => ['BanksController@destroy', $bank->id], 'method' =>'POST' ,'class'=>'pull-right'])!!}
                            
                            {!! Form::hidden('_method', 'DELETE') !!}
                            
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    
                    {!! Form::close() !!}

                </td>
                
            </tr>
        
        
            
        @endforeach

        </tbody>
           
        </table>
        @endif

        {{$banks->links()}}

</div>
        @endsection
