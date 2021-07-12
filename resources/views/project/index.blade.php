@extends('project.layouts')

@section('content')

<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>المشاريع </div>
        <div class="tools"> </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover" id="sample_2">
            <thead>
                <tr>
                    <th># </th>
                    <th> اسم المشروع </th>
                    <th> المالك </th>
                    <th>بيانات المفوض</th>
                    <th> ادوات التحكم</th>
                </tr>
            </thead>
            <tbody>
                @php
                  $i=0;
                @endphp
               
                @foreach ($project as $item)
            
                <tr>
                    <td> {{ ++$i }}</td>
                    <td> {{  $item->project_name }}({{ $item->project_num }})</td>
                    <td>{{  $item->Project_owner }} </td>
                    <td>{{  $item->Project_mfawd }} </td>
                    <td> 
                        <a class="btn btn-primary" href="{{ route('projects.show',$item->id)}}"> عرض</a>
                        <a  class="btn btn-success" href="{{ route('projects.edit',$item->id) }}">تعديل</a>
                        <a  class="btn btn-danger" href="{{ route('project.delete',$item->id)}}"> حذف </a>
                    </td>

                    </tr>
                    @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection