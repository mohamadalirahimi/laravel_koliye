<?php
namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;
class RecordController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::all();
        if($request -> q){
            $patients=$patients ->where('id','LIKE','%'.$request->q,'%');
        }
        return response()->json($patients, 200);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $patientInstance = new Patient();
        $query = $patientInstance->newQuery();
        if($request->has('name')){
            $query->where('name','LIKE','%'.$request->get('name'),'%');
        }
        $patients = $query->get();
        return response()->json($patients, 200);
    }

    public function store(Request $request)
    {
        $patients = Patient::create($request->all());
        return response()->json($patients, 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        if(!$patient){
            return response()->json(['message'=>'Not found'],404);

        }
        return response()->json($patient, 200);
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   /* public function edit($id)
    {
        $patient = Patient::find($id);
        return view("layouts.controller-edit",['patient'=>$patient]);
    }*/
    public function edit($id)
    {
        $patient=Patient::find($id);
        return view('layouts.controller-edit',['patient'=>$patient]);
    }
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->name =$request->name ;
        $patient->fathers_name =$request->input('fathers_name') ;
        $patient->national_code =$request->input('national_code') ;
        $patient-> doctor=$request->input('doctor') ;
        $patient->sickness_type =$request->input('sickness_type') ;
        $patient->insurance_type =$request->input('insurance_type') ;
        $patient-> insurance=$request->input('insurance') ;
        $patient->date_transplant =$request->input('date_transplant') ;
        $patient-> transplant_hospital=$request->input('transplant_hospital') ;
        $patient->transplant_doctor=$request->input('transplant_doctor') ;
        $patient->drug =$request->input('drug') ;
        $patient->home_adres =$request->input('home_adres') ;
        $patient-> work_adres=$request->input('work_adres') ;
        $patient-> home_phone=$request->input('home_phone') ;
        $patient->work_phone =$request->input('work_phone') ;
        $patient->cellphone =$request->input('cellphone') ;
        $patient->required_phone =$request->input('required_phone') ;
        $patient->account_number =$request->input('account_number') ;
        $patient -> save();
        return response()->json(['message'=>'saved successfully'], 200);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients = Patient::find($id)->delete();
        if(!$patients){
            return response()->json(['message'=>'Not found'],404);
        }
        return response()->json(['message'=>'deleted successfully'], 200);
    }
}
