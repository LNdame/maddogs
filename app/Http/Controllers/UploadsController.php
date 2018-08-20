<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\User;
use App\Bank;
use App\Company;

class UploadsController extends Controller
{
	
	 public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$request->route('id');
        $banks = Bank::orderBy('bank_name', 'desc')->get();
        $users = User::orderBy('name', 'desc')->get();

        return view('uploads.upload_company_documents',['users'=>$users, 'banks'=>$banks]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//hamdle file uploads
		
		if($request->hasFile('bee_certificate')){
			//get filename with extension
			
			$filenameWithExt = $request->file('bee_certificate')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('bee_certificate')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('bee_certificate')->storeAs('public/document_uploads', $fileNameToStore);
								   
		}
		else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		
		if($request->hasFile('non_standard_mou')){
			//get filename with extension
			
			$filenameWithExt = $request->file('non_standard_mou')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('non_standard_mou')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('non_standard_mou')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
			
			if($request->hasFile('qtr_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('qtr_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('qtr_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('qtr_fin_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
			
		if($request->hasFile('qtr_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('qtr_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('qtr_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('qtr_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_fin_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_2_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_2_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_2_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_2_fin_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_2_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_2_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_2_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_2_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
		if($request->hasFile('year_3_fin_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_3_fin_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_3_fin_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_3_fin_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
			if($request->hasFile('year_3_cashflow_statement')){
			//get filename with extension
			
			$filenameWithExt = $request->file('year_3_cashflow_statement')->getClientOriginalName();
			
			//get just file name
			
			$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
			
			//get extension
			
			$extension = $request->file('year_3_cashflow_statement')->getClientOriginalExtension();
			
			//file name to store
			
			$fileNameToStore = $filename.'_'.time().'.'.$extension;
			
			//upload Document
			
			$path = $request->file('year_3_cashflow_statement')->storeAs('public/document_uploads', $fileNameToStore);
			
			
					   
		}else{
			$fileNameToStore = 'nodocument.jpg';
		
			}
			
			
				
		//create upload
		
		$upload = new Upload;
		$upload->has_bee_certificate  = $request->input('has_bee_certificate');
		$upload->bee_certificate = $fileNameToStore;
		$upload->standard_mou  = $request->input('standard_mou');
		$upload->non_standard_mou = $fileNameToStore;
		$upload->start_of_operations  = $request->input('start_of_operations');
		$upload->qtr_fin_statement = $fileNameToStore;
		$upload->qtr_cashflow_statement = $fileNameToStore;
		$upload->year_fin_statement = $fileNameToStore;
		$upload->year_cashflow_statement = $fileNameToStore;
		$upload->year_2_fin_statement = $fileNameToStore;
		$upload->year_2_cashflow_statement = $fileNameToStore;
		$upload->year_3_fin_statement = $fileNameToStore;
		$upload->year_3_cashflow_statement = $fileNameToStore;
		$upload->assessed_by = auth()->user()->id;
		$upload->assessed_at  = $request->input('assessed_at');
		$upload->assessment_status  = $request->input('assessment_status');
		
		$upload->save();
		
		return redirect('/companies')->with('success', 'Upload Successful');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
