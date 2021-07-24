<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use App\Models\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::with('project')->get();
        $flat = Flat::all();
        return view('project.view_flats',compact('flat','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('project.add_flat', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flat = Flat::create($request->all());
       return redirect()->route('flats.index')->with('success','تم اضافة بيانات الشقة بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Flat $flat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Flat $flat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat $flat)
    {
        $flat->update($request->all());
        return redirect()->route('flats.index')->with('success',' تم التعديل بنجاح  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        $flat->delete();
        return redirect()->route('flats.index')->with('success','project deleted successfully');
    }

    public function softDelete(  $id)
    {

        $supplier = Flat::find($id)->delete();

        return redirect()->route('flats.index')
        ->with('success','flat deleted successflly') ;
    }



    public function show_drafts($id)
    {
        $flat = Flat::with('drafts')->find($id);//جيب المورد اللي رقفمو id مع كل الفواتير تاعتو

        return view('project.show_drafts',compact('flat'));
    }



    public function add_draft($id)
    {
        $flat = Flat::find($id);
        // بنجيب باقي قسمة المبلغ المقسط مع الربح  المدخل على عدد الأشهر المدخل 
             $x = $flat->profit_value % $flat->no_monthes ;
        for ($i=0; $i <$flat->no_monthes ; $i++) { 
             // تاريخ الاستحقاق = 
            $installment_date = $flat->installment_sdate->addMonth($i);
             if($i == $flat->no_monthes-1) // اخر للووب اخر شهر
             {
                 if($x==0)// قيمة الدفعة هيا القيمة المتفق عليها 
                 {
                    $instalment_value = $flat->instalment_value;
                 }
                 else
                 {
                     //قيمة الدفعة هيا باقي القسمة
                     $instalment_value = $x;
                 }
             }
             // insert(installment_date,قيمة الدفعة,نوع السدادا),;حالة الدفعة;

             $draft = new DraftController();
             $draft->flat_id = $flat->id;
             $draft->installment_date = $installment_date;
             $draft->instalment_value = $instalment_value;             
             $draft->save();
             dd($draft->toArray());

             return view("project.view_flats");
        }
        
    }
}
