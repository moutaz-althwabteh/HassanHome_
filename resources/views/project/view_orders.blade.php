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
           <form role="form" method="post">
                   <div class="row" style="padding:20px">
                           <div class="col-md-2">
                           <input type="text" name="t3" class="form-control" placeholder="تاريخ الفاتورة"> </div>
                       <div class="col-md-2">
                           <input type="text" name="t4" class="form-control" placeholder="رقم الإيصال"> </div>
                           <div class="col-md-2">
                            <input type="text" name="t4" class="form-control" placeholder="نوع الصنف "> </div>
                            <div class="col-md-2">
                                <input type="text" name="t4" class="form-control" placeholder="قيمة الطلبية "> </div>
                       <div class="col-md-2">
                        <input type="text" name="t4" class="form-control" placeholder="اسم المشروع "> </div>
                        <div class="col-md-2">
                                <select class="form-control select2me" name="options2">
                                    <option value="">اختار...</option>
                                    <option value="1">توريد مباشر</option>
                                    <option value="2">المخازن</option>
                                    
                                </select>
                            </div>           
                               <div class="col-md-3">
                            <input type="text" name="t4" class="form-control" placeholder="وصف الطلبية"> </div>
                        <div class="col-md-2">
                           <div class="input-group input-small">
                               <input type="text" name="t6" class="form-control" placeholder="اسم المورد ">
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


