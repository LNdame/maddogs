<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Bank;
use App\User;


class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::orderBy('company_name', 'asc')->paginate(5);
        return view('companies.company_list')->with('companies', $companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();

        return view('companies.create_company',['banks'=>$banks, 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        //
        $this->validate($request,[
            'company_name' => 'required',
            'registration_number' => 'required',
            'mission_statement' => 'required',
            'primary_contact_number' => 'required',
            'primary_contact_email' => 'required'

        ]);

        $company = new Company;
        $company->company_name  = $request->input('company_name');
        $company->registration_number = $request->input('registration_number');
        $company->website_url = $request->input('website_url');
        $company->industry = $request->input('industry');
        $company->has_bank_account = $request->input('has_bank_account');
        $company->bank_id = $request->get('bank_id');
        //$company->bank_id = input::get('bank_id');
        $company->mission_statement = $request->input('mission_statement');
        $company->activity_description = $request->input('activity_description');
        $company->primary_contact_number = $request->input('primary_contact_number');
        $company->primary_contact_email = $request->input('primary_contact_email');
        $company->registered_by = $request->get('registered_by');
 
        $company->save();

        return redirect('/company_list')->with('success', 'Company Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::find($id);
        return view('companies.show_company',['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();
        $company = Company::find($id);
       // return view('companies.edit')->with('company', $company);
        return view('companies.edit_company',['company'=>$company, 'banks'=>$banks, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // clone of what we have in the store

        $this->validate($request,[
            'company_name' => 'required',
            'registration_number' => 'required',
            'mission_statement' => 'required',
            'primary_contact_number' => 'required',
            'primary_contact_email' => 'required'

        ]);

        $company = Company::find($id);
        $company->company_name  = $request->input('company_name');
        $company->registration_number = $request->input('registration_number');
        $company->website_url = $request->input('website_url');
        $company->industry = $request->input('industry');
        $company->has_bank_account = $request->input('has_bank_account');
        $company->bank_id = $request->get('bank_id');
        //$company->bank_id = input::get('bank_id');
        $company->mission_statement = $request->input('mission_statement');
        $company->activity_description = $request->input('activity_description');
        $company->primary_contact_number = $request->input('primary_contact_number');
        $company->primary_contact_email = $request->input('primary_contact_email');
        $company->registered_by = $request->get('registered_by');
 
        $company->save();

        return redirect('/companies')->with('success', 'Company Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return redirect('/companies')->with('success', 'Company Deleted');
    }

    public function upload($id)
    {
        //
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $company = Company::find($id);
        $users = User::orderBy('name', 'desc')->get();
        return view('companies.upload_company_documents',['users'=>$users, 'banks'=>$banks]);
    }
}
