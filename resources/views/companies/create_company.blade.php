@extends('layouts.app')

    @section('content')
    <div class="gtco-container">

        <h2>Create Company</h2>
        <br>
        <a href="/home" class="btn btn-default pull-right">Back</a>
        <br><hr>

        <div class="col-md-offset-1 col-md-10">


                {!! Form::open(['action' => 'CompaniesController@store', 'method' =>'POST']) !!}

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('company_name', 'Company Name')}}
                        {{Form::text('company_name','',['class'=>'form-control','placeholder'=>'Company Name'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('registration_number', 'Registration Number')}}
                        {{Form::text('registration_number','',['class'=>'form-control','placeholder'=>'Registration Number'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('website_url', 'Website')}}
                        {{Form::text('website_url','',['class'=>'form-control','placeholder'=>'Website'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('industry', 'Industry')}}
                        {{Form::text('industry','',['class'=>'form-control','placeholder'=>'Industry' ])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('has_bank_account', 'Bank Account ?')}}
                        {{Form::select('has_bank_account', array('Yes' => 'Yes', 'No' => 'No'))}}
                </div>

                <div class="form-group col-md-offset-2 col-md-6">
                        {{Form::label('bank_id', 'Bank List')}}

                                <select name="bank_id" class="form-control" id="bank_id">
                                <option value="">Select a Bank</option>
                                @foreach ($banks as $bank)
                                        <option value="{!!$bank->id!!}"> {!!$bank->bank_name!!} </option>
                                @endforeach
                                </select>
                </div>

                <div class="form-group col-md-offset-1 col-md-10">
                        {{Form::label('mission_statement', 'Mission Statement')}}
                        {{Form::textarea('mission_statement','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Mission Statement'])}}
                </div>

                <div class="form-group col-md-offset-1 col-md-10">
                        {{Form::label('activity_description', 'Activity description')}}
                        {{Form::textarea('activity_description','',['id'=>'article-ckeditor1','class'=>'form-control','placeholder'=>'Activity description'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('primary_contact_number', 'Primary Contact Number')}}
                        {{Form::number('primary_contact_number','',['class'=>'form-control','placeholder'=>'Primary Contact Number'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-8">
                        {{Form::label('primary_contact_email', 'Primary Contact Email')}}
                        {{Form::text('primary_contact_email','',['class'=>'form-control','placeholder'=>'Primary Contact Email'])}}
                </div>

                <div class="form-group col-md-offset-2 col-md-6">
                        {{Form::label('bank_id', 'List of users')}}

                        
                                <select name="registered_by" class="form-control" id="registered_by">
                                <option value="">Select a User</option>
                                @foreach ($users as $user)
                                        <option value="{!!$user->id!!}"> {!!$user->name!!} </option>
                                @endforeach
                                </select>
                        
                </div>

                {{Form::submit('Submit',['class'=>'btn bnt-primary col-md-offset-4 col-md-4'])}}

                
                {!! Form::close() !!}
        </div>
</div>
 @endsection
