@extends('project.layouts')

@section('content')
<div class="row" >
<div class="col-md-12">

    <div class="portlet box blue ">
               <div class="portlet-title">
                   <div class="caption">
                       <i class="fa fa-gift"></i> اضافة دفعة </div>
                   <div class="tools">
                       <a href="" class="collapse"> </a>
                       <a href="" class="remove"> </a>
                   </div>
               </div>
               
               <div class="portlet-body form">
               <form role="form" method="post" action="{{ route('pays.store') }}">
                   @csrf
                       <div class="row" style="padding:20px">    
                               <div class="col-md-2">
                                <input type="hidden"  name="s_id" value="{{ request()->id }}">  

                               <input type="text" name="date" class="form-control" placeholder="تاريخ الدفعة "> </div>
                           <div class="col-md-2">
                               <input type="text" name="payment_receipt" class="form-control" placeholder="رقم ايصال الصرف "> </div>
                               <div class="col-md-2">
                                <select class="form-control select2me" name="payment_type">
                                    <option value="0">نوع الدفعة</option>
                                    <option value="1">شيك </option>
                                    <option value="2">كمبيالة</option>
                                    <option value="3">مرجع مشتريات</option>
                                    <option value="4">فاتورة مبيعات</option>
                                    <option value="5">قطعة أرض</option>
                                    <option value="6">شقة</option>
                                    <option value="7">اضافات</option>
                                </select> </div>
                                <div class="col-md-2">
                                    <input type="text" name="total" class="form-control" placeholder="اجمالي الدفعة "> </div>
                                    <div class="col-md-2">
                                        <select class="form-control select2me" name="carr_type">
                                            <option value="0">العملة</option>
                                            <option value="1">دولار </option>
                                            <option value="2">دينار</option>
                                            <option value="3">شيكل</option>
                                            <option value="4">يورو</option>
                                        </select></div>
                                        <div class="col-md-2">
                                            <input type="text" name="check_date" class="form-control" placeholder="تاريخ الشيك "> </div>
                                            <div class="col-md-2">
                                                <select class="form-control select2me" name="payment_status">
                                                    <option value="0">حالة الدفعة</option>
                                                    <option value="1">مضافة </option>
                                                    <option value="2">غير مضافة</option>
                                        
                                                </select> </div>
                                                <div class="col-md-2">
                                                    <select class="form-control select2me" name="cashier">
                                                        <option value="0">امين الصندوق </option>
                                                        <option value="1">محمد ايوب حسان </option>
                                                        <option value="2">حسام ايوب حسان</option>
                                                        <option value="3">بنك القدس </option>
                                                    </select> </div>

                                                    <div class="col-md-2">
                                                        <div class="input-group input-small">
                                                        <input type="text" name="notes" class="form-control" placeholder="ملاحظات">
                                                        <span class="input-group-btn">
                                                            <button class="btn blue" type="submit" name="b1">حفـــظ</button>
                                                        </span>
                                                    </div>
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