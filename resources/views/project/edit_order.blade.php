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
            <form role="form" method="post" action="{{ route('orders.update',$oorder->id) }}">
                @csrf
                @method('PUT')

                   <div class="row" style="padding:20px">
                           <div class="col-md-3 form-group">
                           <input type="text" name="voucher_date" value="{{ $oorder->voucher_date }}" class="form-control" placeholder="تاريخ الفاتورة"> </div>
                       <div class="col-md-3 form-group">
                           <input type="text" name="voucher_num" value="{{ $oorder->voucher_num }}" class="form-control" placeholder="رقم الإيصال"> </div>
                           
                            <div class="col-md-3 form-group">
                                <input type="text" name="voucher_value" value="{{ $oorder->voucher_value }}" class="form-control" placeholder="قيمة الطلبية "> </div>
                       <div class="col-md-3 form-group">
                        <select class="form-control select2me" name="project_title">
                            <option value="">اسم المشروع</option>
                            <option value="1"  @if ($oorder->project_title == '1')
                                selected="selected"
                             @endif>حسان 1 </option>
                            <option value="2"  @if ($oorder->project_title == '2')
                                selected="selected"
                             @endif>حسان 2</option>
                        </select>                 
                       </div>
                        <div class="col-md-3 form-group">
                                <select class="form-control select2me" name="voucher_place">
                                    <option value="">آلية التوريد</option>
                                    <option value="1"  @if ($oorder->voucher_place == '1')
                                        selected="selected"
                                     @endif>توريد مباشر</option>
                                    <option value="2" @if ($oorder->voucher_place == '2')
                                        selected="selected"
                                     @endif>المخازن</option>
                                </select>
                            </div>        
                            
                            <div class="col-md-3 form-group">
                                 <select class="form-control select2me" name="supplier_name">
                                     <option value="">اسم المورد</option>
                                     <option value="1" @if ($oorder->supplier_name == '1')
                                         selected="selected"
                                      @endif>مورد 1 </option>
                                     <option value="2" @if ($oorder->supplier_name == '2')
                                         selected="selected"
                                      @endif>مورد 2</option>
                                 </select>
                                </div>

                               <div class="col-md-3 form-group">
                            <input type="text" name="voucher_desc" value="{{ $oorder->voucher_desc }}" class="form-control" placeholder="وصف الطلبية"> </div>
                        
                            <div class="col-md-3 ">
                                <div class="input-group input-small">
                                <input type="text" name="voucher_type" value="{{ $oorder->voucher_type }}" class="form-control" placeholder="ملاحظات  "> 
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