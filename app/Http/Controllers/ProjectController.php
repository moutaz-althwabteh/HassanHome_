<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $project = project::all();
        return view('project.index',compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.add_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'project_name'=>'required',
           'project_num'=>'required',
           'Project_gps'=>'required',
           'Project_owner'=>'sometimes',
           
        ]); 
      //  dd($request->all());
        $project = project::create($request->all()); 
        return redirect()->route('projects.index')->with('success','تم اضافة بيانات المشروع بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        return view('project.show_details', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        return view('project.edit_project', compact('project'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
         $project->update($request->all()); 
         return redirect()->route('projects.index')->with('success','project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        /*$project->delete();
        return redirect()->route('projects.index')->with('success','project deleted successfully');*/

    }

    public function softDelete(  $id)
    {

        $project = project::find($id)->delete();
        return redirect()->route('projects.index')
        ->with('success','project deleted successflly') ;
    }
}
