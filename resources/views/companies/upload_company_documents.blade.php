@extends('layouts.app')

    @section('content')

        <h2>Upload Files</h2>
        <br>
        <a href="/companies/" class="btn btn-default pull-right">Back</a>
        <br><hr>

        


                {!! Form::open(['action' => 'UploadsController@store', 'method' =>'POST']) !!}

                <div class="form-group">
                        {{Form::label('has_bee_certificate', 'Do you have a BEE Certificate ? ')}}
                        {{Form::select('has_bee_certificate', array('Yes' => 'Yes', 'No' => 'No'))}}
                </div>

                <div class="form-group">
                        {{Form::label('bee_certificate', 'If present, please upload yourBEE Certificate')}}
                        {{Form::text('bee_certificate','',['class'=>'form-control','placeholder'=>'Upload BEE Certificate'])}}
                </div>

                <div class="form-group">
                        {{Form::label('standard_mou', 'Do you have a standard MOU')}}
                        {{Form::select('standard_mou', array('Yes' => 'Yes', 'No' => 'No'))}}
                </div>

                <div class="form-group">
                        {{Form::label('non_standard_mou', 'If you have modified a standard MOU, please upload your version')}}
                        {{Form::text('non_standard_mou','',['class'=>'form-control','placeholder'=>'Upload custom MOU' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('start_of_operations', 'When did you start operating ?')}}
                        {{Form::date('start_of_operations','',['class'=>'form-control','placeholder'=>'Start date of operations' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('qtr_fin_statement', 'If applicable, upload the current quarters financial statement')}}
                        {{Form::text('qtr_fin_statement','',['class'=>'form-control','placeholder'=>'Upload quarters financial statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('qtr_cashflow_statement', 'If applicable, upload the current quarters cashflow statement')}}
                        {{Form::text('qtr_cashflow_statement','',['class'=>'form-control','placeholder'=>'Upload quarters cashflow statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_fin_statement', 'If applicable, upload the current years financial statement')}}
                        {{Form::text('year_fin_statement','',['class'=>'form-control','placeholder'=>'Upload current years financial statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_cashflow_statement', 'If applicable, upload the current years cashflow statement')}}
                        {{Form::text('year_cashflow_statement','',['class'=>'form-control','placeholder'=>'Upload current years cashflow statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_2_fin_statement', 'If applicable, upload last years financial statement')}}
                        {{Form::text('year_2_fin_statement','',['class'=>'form-control','placeholder'=>'Upload last years financial statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_2_cashflow_statement', 'If applicable, upload last years cashflow statement')}}
                        {{Form::text('year_2_cashflow_statement','',['class'=>'form-control','placeholder'=>'Upload last years cashflow statement' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_3_fin_statement', 'If applicable, upload any other recent financial statement (last year but one)')}}
                        {{Form::text('year_3_fin_statement','',['class'=>'form-control','placeholder'=>'Upload any other recent financial statement (last year but one)' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('year_3_cashflow_statement', 'If applicable, If applicable, upload any other recent cashflow statements (last year but one)')}}
                        {{Form::text('year_3_cashflow_statement','',['class'=>'form-control','placeholder'=>'Upload any other recent cashflow statements (last year but one)' ])}}
                </div>

                <div class="form-group">
                        {{Form::label('assessed_by', 'Assessed by')}}

                                <select name="assessed_by" class="form-control" id="assessed_by">
                                <option value="">Select a Bank</option>
                                @foreach ($users as $user)
                                        <option value="{!!$user->id!!}"> {!!$user->name!!} </option>
                                @endforeach
                                </select>
                </div>

                <div class="form-group">
                        {{Form::label('assessed_at', 'Date of Assessment')}}
                        {{Form::date('assessed_at','',['class'=>'form-control','placeholder'=>'assessed_at' ])}}
                </div>


                <div class="form-group">
                        {{Form::label('assessment_status', 'Assessment Status')}}
                        {{Form::textarea('assessment_status','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Assessment Status'])}}
                </div>

                
                {{Form::submit('Submit',['class'=>'btn bnt-primary'])}}

                
                {!! Form::close() !!}
     


    @endsection
