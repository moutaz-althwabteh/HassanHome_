<?php

namespace App\Http\Controllers;

use App\Models\Oorder;
use App\Models\Project;
use App\Models\supplier;
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
        $order = Oorder::with('project')->get();
        $supplier = Oorder::with('supplier')->get();
        
         //dd($order->toArray());
        return view ('project.view_orders',compact('order','supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $projects = Project::all();
        $suppliers = supplier::all();
        return view ('project.add_order', compact('projects','suppliers'));
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
      return redirect()->route('orders.index')->with('success','تم اضافة بيانات الطلبية بنجاح');

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
    public function edit($id)
    {   
        $oorder = Oorder::findOrFail($id);
        return view('project.edit_order',compact('oorder'));
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
        $oorder->update($request->all());
        return redirect()->route('orders.index')->with('success',' تم التعديل بنجاح  ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oorder  $oorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oorder $oorder)
    {
        $oorder->delete();
        return redirect()->route('orders.index')->with('success','project deleted successfully');
    }

    public function softDelete(  $id)
    {

        $order = Oorder::find($id)->delete();
        return redirect()->route('orders.index')
        ->with('success','order deleted successflly') ;
    }


    public function show_order_details($id)
    {
        $order = Oorder::with('order_details')->find($id);//جيب المورد اللي رقفمو id مع كل الفواتير تاعتو

               // dd($order->toArray());
        return view('project.show_order_details',compact('order'));
    }
 
    
}
