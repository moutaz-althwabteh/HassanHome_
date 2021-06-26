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
               <form role="form" method="post" action="{{ route('supplier.store') }}">
                   @csrf
                       <div class="row" style="padding:20px">
                           <div class="col-md-2">
                               <input type="text" name="date" data-date-format="yyyy-mm-dd" class="form-control form-control-inline input-small date-picker" placeholder="التاريخ"> </div>
    
                               <div class="col-md-2">
                               <input type="text" name="s_name" class="form-control" placeholder="اسم المورد"> </div>
                           <div class="col-md-2">
                               <input type="text" name="type" class="form-control" placeholder="التصنيف"> </div>
                               <div class="col-md-2">
                                <input type="text" name="mobile" class="form-control" placeholder="رقم الجوال"> </div>
                                <div class="col-md-2">
                                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف"> </div>
                           <div class="col-md-2">
                               <div class="input-group input-small">
                                   <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني ">
                                   <span class="input-group-btn">
                                       <button class="btn blue" type="submit" name="b1">حفـــظ</button>
                                   </span>
                               </div>
                               <!-- /input-group -->
                           </div>
                       </div>
                          <div style="float:left;">   </div>      
                               </form>
                               <!-- END FORM-->
                           </div>
           </div>
           </div>
           </div>
           @endsection