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
                        <td class="numeric">{{ $pays->date }}</td>
                        <td class="numeric">{{ $pays->payment_receipt }}</td>
                        <td class="numeric">{{ $pays->payment_type }}</td>
                        <td class="numeric">{{ $pays->total }} )({{ $pays->carr_type }})</td>
                        <td class="numeric">{{ $pays->payment_status }}</td>
                         <td class="numeric">{{$pays->cashier }}</td>
                        <td class="numeric">{{ $pays->check_date }}</td>
                        <td  class="numeric"> {{ $pays->check_date }}</td>
                        <td  class="numeric"> {{ $pays->notes }}</td>

                    </tr>

                </tbody>
            </table>
        </div>
@endsection