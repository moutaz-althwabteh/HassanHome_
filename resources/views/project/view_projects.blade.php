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
                    <th> اسم المشروع </th>
                    <th> المالك </th>
                    <th>بيانات المفوض</th>
                    <th> تفاصيل المشروع</th>
                    <th> ادوات التحكم</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td> حسان 1 </td>
                    <td> حسان هوم </td>
                    <td> محمد محمد 957475136 </td>
                    <td> رقم القطعة 15، رقم القسيمة 223، مساحة الأرض 600 م </td>
                    <td  class="numeric"><span class = "glyphicon glyphicon-plus" title="اضافة شقة"></span> | <Span class="glyphicon glyphicon-remove" title="حذف"></Span> | <Span class="glyphicon glyphicon-pencil " title="تعديل">  </td>
                    </tr>
        
            </tbody>
        </table>
    </div>
</div>

@endsection