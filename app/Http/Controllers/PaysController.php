<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\supplier;
use Illuminate\Http\Request;

class PaysController extends Controller
{
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
       return view('project.add_pay');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay = Pay::create($request->all());
        return redirect()->route('pays.index')->with('success','تم اضافة بيانات الدفعة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show($supplier_id)
    {
        //$supplier = supplier::with('pays')->find($supplier_id);
        // $pays = Pay::where('s_id',$supplier_id)->get();
        // return view('project.show_pays', compact('pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(pays $pays)
    {
        //
    }
}
