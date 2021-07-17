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
                  
                    @if ($message = Session::get('success'))
                    <div class="alert alert-primary" role="alert">
                      {{$message}}
                      </div>
                    @endif
                    
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet box blue">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-globe"></i>الطلبيات  </div>
                            <div class="tools">
                                 </div>
                        </div>
                        <div class="portlet-body">

                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                    <tr>
                                        <th>  </th>
                                        <th> التاريخ </th>
                                        <th> رقم الطلبية </th>
                                        <th> قيمة الطلبية </th>
                                        <th>مكان التوريد</th>
                                        <th> اسم المشروع</th>
                                        <th>اسم المورد </th>
                                        <th> ملاحظات  </th>
                                        <th>ادوات التحكم  </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $i= 0;
                                    @endphp
                                    @foreach ($order as $item)
                                          
                                    <tr>
                                        <td>{{ ++$i }} </td>
                                        <td>{{ $item->voucher_date }} </td>
                                        <td> <a href="{{ route('orders.order_details', $item->id)}}"> {{ $item->voucher_num }} </a></td>
                                        <td> {{ $item->voucher_value }} </td>
                                        <td> {{ $item->voucher_place }} </td>
                                        <td> {{ $item->project->project_name }} </td>
                                        <td> {{ $item->supplier->s_name }} </td>
                                        <td> {{ $item->voucher_type }} </td>
                                        <td> 
                               <a class="btn btn-primary" href="{{ route('order_details.create',  ['id' =>$item->id])}}">اضافة طلبية</a>
                               <a  class="btn btn-success" href="{{ route('orders.edit',$item->id) }}">تعديل</a>
                               <a  class="btn btn-danger" href="{{ route('order.delete',$item->id)}}"> حذف </a>
                                         </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
             





     
               
               @endsection


