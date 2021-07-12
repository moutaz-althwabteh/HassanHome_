@extends('project.layouts')

@section('content')

<div class="row" >

    <div class="portlet box blue">
     <div class="portlet-title">
         <div class="caption">
             <i class="fa fa-globe"></i>الدفعات</div>
         <div class="tools"> </div>
     </div>

     <div class="portlet-body">
         <table class="table table-striped table-bordered table-hover" id="sample_2">
                <thead class="flip-content">
                     <tr align="center">
                         <th class="numeric"> تاريخ الدفعة</th>
                         <th> رقم ايصال الصرف </th>
                         <th class="numeric">نوع الدفعة </th>
                         <th> حالة الدفعة</th>
                         <th>  الملبغ</th>
                         <th>  امين الصندوق</th>
                         <th class="numeric">تاريخ الشيك  </th>
                         <th class="numeric">  رقم الشيك  </th>
                        <th class="numeric"> ملاحظات  </th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        {{$i =0}}
                        @foreach ($supplier->pays as $pay)
                            <td class="numeric">{{ $pay->date }}</td>
                            <td class="numeric">{{ $pay->payment_receipt }}</td>
                            <td class="numeric">{{ $pay->payment_type }}</td>
                            <td class="numeric">{{ $pay->payment_status }}</td>
                            <td class="numeric">{{ $pay->total }} )({{ $pay->carr_type }})</td>
                            <td class="numeric">{{$pay->cashier }}</td>
                            <td class="numeric">{{ $pay->check_date }}</td>
                            <td  class="numeric"> {{ $pay->check_date }}</td>
                            <td  class="numeric"> {{ $pay->notes }}</td>
                            {{$i+=$pay->total}}
                        @endforeach
                        
                    </tr>
                    <tr>
                        <td colspan="4">المجموع : </td><td colspan="5">{{$i}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
@endsection