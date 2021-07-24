@extends('project.layouts')

@section('content')
<div class="row" >

       <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i> الشقق </div>
            <div class="tools"> </div>
        </div>

        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
                   <thead class="flip-content">
                        <tr align="center">
                            <th class="numeric">#</th>
                            <th class="numeric"> اسم المشروع</th>
                            <th>  رقم الشقة</th>
                            <th class="numeric">مالك الشقة </th>
                            <th> تاريخ العقد</th>
                            <th class="numeric">بيانات الشقة  </th>
                            <th class="numeric">  مساحة الشقة  </th>
                           <th class="numeric"> أدوات التحكم </th>
                       </tr>
                   </thead>
                   <tbody>

                       @php
                           $i=0;
                       @endphp
                       @foreach ($flat as $item)
                       <tr>
                           <td class="numeric">{{ ++$i }}</td>
                           <td class="numeric">{{ $item->project->project_name }}</td>
                           <td class="numeric"> <a href="{{ route('flats.show',$item->id)}}">{{ $item->flat_num }}</a></td>
                           <td class="numeric">{{ $item->flat_owner }}</td>
                           <td class="numeric">{{ $item->flat_contract_date }}</td>
                            <td class="numeric">{{ $item->flat_place }}, {{ $item->flat_side }}</td>
                           <td class="numeric">{{ $item->flat_area }}</td>
                           <td  class="numeric"> 
                               <a  class="btn btn-success" href="{{ route('flats.edit',$item->id) }}">تعديل</a>
                               <a  class="btn btn-danger" href="{{ route('flats.delete',$item->id)}}"> حذف </a>
                               <div class="btn-group">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> العمليات

                                </button>
                                <ul class="dropdown-menu pull-left" role="menu">
                                    <li>
                                        <a href="{{ route('add_draft',$item->id) }}">
                                            <i class="icon-docs"></i>اضافة كمبيالة
                                             </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-docs"></i>طباعة العقد</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('flat.drafts',$item->id)}}">
                                            <i class="icon-tag"></i>طباعة الكمبيالة</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-user"></i>طباعة سند دين</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-flag"></i> تقرير الأقساط </a>
                                       
                                    </li>
                                </ul>
                            </div>
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


