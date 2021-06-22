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
                           <div class="col-md-2">
                           <input type="text" name="voucher_date" class="form-control" placeholder="تاريخ الفاتورة"> </div>
                       <div class="col-md-2">
                           <input type="text" name="voucher_num" class="form-control" placeholder="رقم الإيصال"> </div>
                           <div class="col-md-2">
                            <input type="text" name="voucher_type" class="form-control" placeholder="نوع الصنف "> </div>
                            <div class="col-md-2">
                                <input type="text" name="voucher_value" class="form-control" placeholder="قيمة الطلبية "> </div>
                       <div class="col-md-2">
                        <select class="form-control select2me" name="project_title">
                            <option value="">اختار...</option>
                            <option value="1">حسان 1 </option>
                            <option value="2">حسان 2</option>
                        </select>                 
                       </div>
                        <div class="col-md-2">
                                <select class="form-control select2me" name="voucher_place">
                                    <option value="">اختار...</option>
                                    <option value="1">توريد مباشر</option>
                                    <option value="2">المخازن</option>
                                </select>
                            </div>           
                               <div class="col-md-3">
                            <input type="text" name="voucher_desc" class="form-control" placeholder="وصف الطلبية"> </div>
                        <div class="col-md-2">
                           <div class="input-group input-small">
                            <select class="form-control select2me" name="supplier_name">
                                <option value="">اختار...</option>
                                <option value="1">مورد 1 </option>
                                <option value="2">مورد 2</option>
                            </select>
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

       

<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">

                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                               <h4 class="modal-title">تفــاصيل الطلبية</h4>
                           </div>
                           <div class="modal-body"> Modal body goes here </div>
                           <div class="modal-footer">
                               <button type="button" class="btn green btn-outline" data-dismiss="modal">اغــلاق</button>
                           </div>
                       </div>
                       <!-- /.modal-content -->
                   </div>
                   <!-- /.modal-dialog -->
               </div>




               <div class="row">
                <div class="col-md-12">
                  
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>الطلبيات  </div>
                            <div class="tools"> </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th>  </th>
                                        <th> التاريخ </th>
                                        <th> رقم الايصال </th>
                                        <th> نوع الصنف </th>
                                        <th> قيمة الطلبية </th>
                                        <th>مكان التوريد</th>
                                        <th> اسم المشروع</th>
                                        <th>اسم المورد </th>
                                        <th>ادوات التحكم  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> Trident </td>
                                        <td> Internet Explorer 4.0 </td>
                                        <td> Win 95+ </td>
                                        <td> 4 </td>
                                        <td> X </td>
                                        <td> X </td>
                                        <td> X </td>
                                        <td> X </td>
                                        <td><span class = "glyphicon glyphicon-plus" title="تفاصيل الطلبية"></span> | <Span class="glyphicon glyphicon-remove" title = 'حذف' ></Span> | <Span class="glyphicon glyphicon-pencil " title="تعديل" >  </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
             





     
               
               @endsection


