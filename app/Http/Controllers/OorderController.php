<?php

namespace App\Http\Controllers;

use App\Models\Oorder;
use Illuminate\Http\Request;

class OorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('project.view_orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('project.view_orders');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $order = Oorder::create($request->all());
      return redirect()->route('project.view_orders')->with('success','تم اضافة بيانات الطلبية بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oorder  $oorder
     * @return \Illuminate\Http\Response
     */
    public function show(Oorder $oorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oorder  $oorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Oorder $oorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oorder  $oorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oorder $oorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oorder  $oorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oorder $oorder)
    {
        //
    }
}
