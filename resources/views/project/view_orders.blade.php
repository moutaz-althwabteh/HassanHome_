@extends('project.layouts')

@section('content')
      

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


