@extends('project.layouts')

@section('content')

<div class="row" >

    <div class="col-md-12">

<div class="portlet box blue ">
           <div class="portlet-title">
               <div class="caption">
                   <i class="fa fa-gift"></i> اضافة بيانات الطلبية </div>
               <div class="tools">
                   <a href="" class="collapse"> </a>
                   <a href="" class="remove"> </a>
               </div>
           </div>
           
           <div class="portlet-body form">
           <form role="form" method="post" action="{{ route('orders.store') }}">
               @csrf
               
                   <div class="row" style="padding:20px">
                           <div class="col-md-3 form-group">
                           <input type="text" name="voucher_date" class="form-control" placeholder="تاريخ الفاتورة"> </div>
                       <div class="col-md-3 form-group" >
                           <input type="text" name="voucher_num" class="form-control" placeholder="رقم الطلبية"> </div>
                            <div class="col-md-3 form-group">
                       <input type="text" name="voucher_value" class="form-control" placeholder="قيمة الطلبية "> </div>
                       <div class="col-md-3 form-group">
                        <select class="form-control select2me" name="project_title" >
                            <option value="0">اسم المشروع</option>
                            <option value="1"> حسان 1 </option>
                            <option value="2"> حسان 2 </option>
                        </select>                 
                       </div>

                       <div class="col-md-3 form-group">
                        <select class="form-control select2me" name="project_title" >
                            <option value="0">الآلية </option>
                            <option value="1"> توريد مباشر </option>
                            <option value="2"> المخازن  </option>
                        </select>                 
                       </div>
            
                        <div class="col-md-3 form-group">
                            <select class="form-control select2me" name="supplier_name">
                                <option value="0">اسم المورد</option>
                                <option value="1">مورد 1 </option>
                                <option value="2">مورد 2</option>
                            </select>
                       </div>
                       <div class="col-md-3 form-group">
                        <input type="text" name="voucher_desc" class="form-control" placeholder="وصف الطلبية"> </div>

                       <div class="col-md-3 ">
                        <div class="input-group input-small">
                        <input type="text" name="voucher_type" class="form-control" placeholder="ملاحظات  "> 
                        <span class="input-group-btn">
                            <button class="btn blue" type="submit" name="b1">حفـــظ</button>
                        </span>
                    </div>
                   </div>
                           </form>
                           <!-- END FORM-->
                       </div>
       </div>
       </div>
       </div>
       
   @endsection