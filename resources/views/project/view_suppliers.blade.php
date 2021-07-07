@extends('project.layouts')

@section('content')
<div class="row" >

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

                       @php
                           $i=0;
                       @endphp
                       @foreach ($suppliers as $item)
                       <tr>
                           <td class="numeric">{{ ++$i }}</td>
                           <td class="numeric">{{ $item->date }}</td>
                           <td class="numeric">{{ $item->s_name }}</td>
                           <td class="numeric">{{ $item->type }}</td>
                           <td class="numeric">{{ $item->mobile }}</td>
                            <td class="numeric">{{ $item->phone }}</td>
                           <td class="numeric">{{ $item->email }}</td>
                           <td  class="numeric"> 
                               <a class="btn btn-primary" href="{{ route('pays.create',$item->id)}}">اضافة دفعة</a>
                               <a  class="btn btn-success" href="{{ route('supplier.edit',$item->id) }}">تعديل</a>
                               <a  class="btn btn-danger" href="{{ route('supplier.delete',$item->id)}}"> حذف </a>
                        </td>

                       </tr>

                       @endforeach
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


