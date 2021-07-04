<?php

namespace App\Http\Controllers;

use App\Models\Order_details;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.add_order_details');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $order_details = Order_details::create($request->all());
      // return redirect()->route('order_details.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function show(Order_details $order_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_details $order_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_details $order_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order_details  $order_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_details $order_details)
    {
        //
    }
}
