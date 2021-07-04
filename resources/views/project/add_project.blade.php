@extends('project.layouts')

@section('content')

<div class="row" >
    <div class="col-md-12">
    
        <div class="portlet box blue ">
                   <div class="portlet-title">
                       <div class="caption">
                           <i class="fa fa-gift"></i> اضافة بيانات المورد </div>
                       <div class="tools">
                           <a href="" class="collapse"> </a>
                           <a href="" class="remove"> </a>
                       </div>
                   </div>
<div class="portlet-body form">
    <form method="post" action="{{ route('projects.store') }}">
        @csrf
            <div class="row" style="padding:5px">
                    <div class="col-md-3" style=" margin-bottom:0.1px">
                    <input type="text"  name="project_name" class="form-control" placeholder="اسم المشروع "> </div>
                <div class="col-md-3" style=" margin-bottom:0.1px">
                    <input type="text" name="project_num" class="form-control" placeholder="رقم المبنى"> </div>
                    <div class="col-md-3" style=" margin-bottom:0.1px">
                     <input type="text" name="Project_gps" class="form-control" placeholder="الإحداثيات  "> </div>
                     <div class="col-md-3" style=" margin-bottom:0.1px">
                         <input type="text" name="Project_owner" class="form-control" placeholder="مالك العقار  "> </div>
                         <div class="col-md-3" style=" margin-bottom:0.1px">
                            <input type="text" name="Project_mfawd" class="form-control" placeholder=" المفوض  "> </div>
                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                <input type="text" name="bulding_mfaud_id" class="form-control" placeholder=" رقم هوية المفوض  "> </div>
                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                    <input type="text" name="bulding_mfaud_address" class="form-control" placeholder="عنوان المفوض   "> </div>
                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                        <input type="text" name="bulding_part" class="form-control" placeholder="رقم القطعة والقسيمة   "> </div>
                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                            <input type="text" name="project_flw" class="form-control" placeholder="مساحة الأرض   "> </div>
                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                <input type="text" name="project_emp" class="form-control" placeholder="الموظف المشرف   "> </div>
                 <div class="col-md-3" style=" margin-bottom:0.1px">
                         <select class="form-control select2me" name="project_type">
                             <option value="0">نوع المشروع</option>
                             <option value="1">استثماري </option>
                             <option value="2">مقاولة</option>
                         </select>
                     </div>  
                        <div class="col-md-3" style=" margin-bottom:0.1px">
                     <input type="text" name="project_status" class="form-control" placeholder=" الحالة"> </div>
                     <div class="col-md-3" style=" margin-bottom:0.1px">
                        <input type="text" name="project_sdate" class="form-control" placeholder=" تاريخ البدء"> </div>
                        <div class="col-md-3" style=" margin-bottom:0.1px">
                            <input type="text" name="project_edate" class="form-control" placeholder=" تاريخ الانتهاء"> </div>
                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                <input type="text" name="project_budget" class="form-control" placeholder=" الموازنة بالأيام "> </div>
                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                    <select class="form-control select2me" name="project_budget_curr">
                                        <option value="0">العملة</option>
                                        <option value="1">دولار </option>
                                        <option value="2">دينار</option>
                                        <option value="3">شيكل</option>
                                        <option value="4">يورو</option>
                                    </select>
                                </div>  
                                <div class="col-md-6" style=" margin-bottom:0.1px">
                                <textarea name="project_contract" placeholder="ادخل  تفاصيل العقد هنا .." data-provide="markdown" rows="4" data-error-container="#editor_error"></textarea></div>
                 <div class="col-md-3">
                        <input type="text" name="project_notes" class="form-control" placeholder="ملاحظات "></div>
                        <div class="col-md-3">
                        <span class="input-group-btn">
                            <button class="btn blue" type="submit">حفـــظ</button>
                        </span></div>
                    <!-- /input-group -->
                </div>
            </div>
               <div style="float:left;">   </div>      
                    </form>
                    <!-- END FORM-->
                </div>




@endsection