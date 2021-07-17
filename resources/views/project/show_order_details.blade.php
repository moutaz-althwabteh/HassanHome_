@extends('project.layouts')

@section('content')

<div class="row" >

    <div class="portlet box blue">
     <div class="portlet-title">
         <div class="caption">
             <i class="fa fa-globe"></i>تفاصيل الطلبية</div>
         <div class="tools"> </div>
     </div>


     <div class="portlet-body">
        <div class="h4" style="line-height: 30px">
            <div> اسم المشروع: {{ $order->project->project_name}}</div>
            <div> اسم المورد: {{ $order->supplier->s_name}}</div>
            <div> رقم الطلبية: {{ $order->voucher_num}}</div>
            <div> تاريخ الطلبية: {{ $order->voucher_date}}</div>
            <div></div> 
        </div>

         <table class="table table-striped table-bordered table-hover" id="sample_2">
                <thead class="flip-content">
                     <tr align="center">
                         <th class="numeric"> # </th>
                         <th>الصنف</th>
                         <th class="numeric">  الوحدة</th>
                         <th>  الكمية</th>
                         <th>  سعر الوحدة</th>
                         <th>  المجموع </th>
                    </tr>
                </thead>
                <tbody> 
                    @php $i =0 ; 
                         $j =0 ;
                    @endphp 
                    @foreach ($order->order_details as $details)
                    <tr>
                            <td class="numeric">{{ ++$j }}</td>
                            <td class="numeric">{{ $details->title }} </td>
                            <td class="numeric">{{ $details->type }}</td>
                            <td class="numeric">{{ $details->quantity }}</td>
                            <td class="numeric">{{ $details->price }} )</td>
                            <td class="numeric">{{ $details->total }}</td>
                            @php
                            $i+=$details->total 
                            @endphp 
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="5">المجموع : </td><td colspan="5">{{$i}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection