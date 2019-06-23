<?php

namespace App\Http\Controllers;

use App\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        return response()->json($supports, 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $support = new support();
        $support->helper = $request->get('helper');
        $support->typeofhelp = $request->get('typeofhelp');
        $support->date = $request->get('date');
        $support->amount = $request->get('amount');
        $support->patient_id = $request->get('patient_id');
        $support->save();
        return response()->json($support, 200);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $supports = Support::where('id', $id)->first();
//        return response()->json($supports, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $support= Support::find($id);
        return view('layouts.controller-editsupport',['support'=>$support]);
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
        $support = Support::find($id);
        $support->helper =$request->input('helper') ;
        $support->typeofhelp =$request->input('typeofhelp') ;
        $support->date=$request->input('date') ;
        $support->amount =$request->input('amount') ;
        $support->patient_id=$request->input('patient_id') ;
        $support -> save();
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
        $category = Support::find($id)->delete();
        return response()->json([], 200);
    }
}
