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
                           <input type="text" name="t1" data-date-format="yyyy-mm-dd" class="form-control form-control-inline input-small date-picker" placeholder="التاريخ"> </div>

                           <div class="col-md-2">
                           <input type="text" name="t3" class="form-control" placeholder="اسم المورد"> </div>
                       <div class="col-md-2">
                           <input type="text" name="t4" class="form-control" placeholder="التصنيف"> </div>
                           <div class="col-md-2">
                            <input type="text" name="t4" class="form-control" placeholder="رقم الجوال"> </div>
                            <div class="col-md-2">
                                <input type="text" name="t4" class="form-control" placeholder="رقم الهاتف"> </div>
                       <div class="col-md-2">
                           <div class="input-group input-small">
                               <input type="text" name="t6" class="form-control" placeholder="البريد الإلكتروني ">
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
       <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>التوريد  </div>
            <div class="tools"> </div>
        </div>

        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
                   <thead class="flip-content">
                        <tr align="center">
                            <th class="numeric">#</th>
                            <th class="numeric"> التاريخ</th>
                            <th> اسم المورد</th>
                            <th class="numeric">التصنيف </th>
                            <th> الشركة</th>
                            <th class="numeric">رقم الجوال </th>
                            <th class="numeric">  رقم الهاتف </th>
                           <th class="numeric"> أدوات التحكم </th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td class="numeric"></td>
                           <td class="numeric"></td>
                           <td class="numeric"></td>
                           <td class="numeric"></td>
                           <td class="numeric"></td>
                            <td class="numeric"></td>
                           <td class="numeric"></td>
                           <td  class="numeric"><span class = "glyphicon glyphicon-plus" title="التفاصيل"></span> | <Span class="glyphicon glyphicon-remove" title="حذف"></Span> | <Span class="glyphicon glyphicon-pencil " title="تعديل">  </td>

                       </tr>
                    
                   </tbody>
               </table>
           </div>

<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">

                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                               <h4 class="modal-title">تفــاصيل السنــد</h4>
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


               @endsection


