@extends('project.layouts')

@section('content')

<div class="row" >
    <div class="col-md-12">
    
        <div class="portlet box blue ">
                   <div class="portlet-title">
                       <div class="caption">
                           <i class="fa fa-gift"></i> اضافة شقة  </div>
                       <div class="tools">
                           <a href="" class="collapse"> </a>
                           <a href="" class="remove"> </a>
                       </div>
                   </div>
<div class="portlet-body form">
    <form method="post" action="{{ route('flats.store') }}">
        @csrf
            <div class="row" style="padding:5px">
                    <div class="col-md-3" style=" margin-bottom:0.1px">
                        <select class="form-control select2me" name="project_id">
                            <option value="0">اسم المشروع </option>
                            @foreach ($projects as $project)
                            <option value="{{$project->id}}">{{$project->project_name}}</option>
                         @endforeach
                        </select></div>
                     <div class="col-md-3" style=" margin-bottom:0.1px">
                    <input type="text" name="flat_num" class="form-control" placeholder="رقم الشقة"> </div>
                    <div class="col-md-3" style=" margin-bottom:0.1px">
                     <input type="text" name="flat_place" class="form-control" placeholder="مكان الشقة  "> </div>
                         <div class="col-md-3" style=" margin-bottom:0.1px">
                            <input type="text" name="flat_side" class="form-control" placeholder=" اتجاه الشقة  "> </div>
                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                <select class="form-control select2me" name="flat_status">
                                    <option value="0"> حالة الشقة</option>
                                    <option value="1">عظم </option>
                                    <option value="2">مشطبة جاهزة للسكن</option>
                                </select> </div>
                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                    <input type="text" name="money_price" class="form-control" placeholder="سعر صرف العملة"> </div>
                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                        <input type="text" name="flat_price" class="form-control" placeholder="سعر الشقة بالشيكل"> </div>
                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                            <input type="text" name="flat_contract" class="form-control" placeholder="صورة العقد"> </div>
                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                <input type="text" name="flat_owner" class="form-control" placeholder="مالك الشقة"> </div>
                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                    <input type="text" name="flat_owner_address" class="form-control" placeholder="عنوان المالك"> </div>
                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                        <input type="text" name="flat_owner_job" class="form-control" placeholder="وظيفة المالك"> </div>
                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                            <input type="text" name="flat_owner_job_desc" class="form-control" placeholder="وصف الوظيفة"> </div>
                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                <input type="text" name="flat_owner_mobile" class="form-control" placeholder="رقم جوال المالك"> </div>
                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                    <input type="text" name="flat_owner_id" class="form-control" placeholder="رقم هوية المالك"> </div>
                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                    <input type="text" name="flat_price_nis" class="form-control" placeholder="الثمن بالشيكل محوسب"> </div>
                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                        <input type="text" name="flat_contract_date" class="form-control" placeholder="تاريخ العقد"> </div>
                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                            <input type="text" name="kafel1" class="form-control" placeholder="اسم الكفيل الأول"> </div>
                                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                <input type="text" name="kafel1_id" class="form-control" placeholder="رقم هوية الكفيل الأول"> </div>
                                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                    <input type="text" name="kafel1_address" class="form-control" placeholder="عنوان الكفيل الأول"> </div>
                                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                        <input type="text" name="kafel2" class="form-control" placeholder="اسم الكفيل الثاني"> </div>
                                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                            <input type="text" name="kafel2_id" class="form-control" placeholder="رقم هوية الكفيل الثاني"> </div>
                                                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                <input type="text" name="kafel2_address" class="form-control" placeholder="عنوان الكفيل الثاني"> </div>
                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                        <input type="text" name="flat_area" class="form-control" placeholder="مساحة الشقة"> </div>
                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                            <input type="text" name="meter_price" class="form-control" placeholder="سعر المتر"> </div>
                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                <input type="text" name="first_payment" class="form-control" placeholder="الدفعة الأولى"> </div>
                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                    <input type="text" name="first_payment_done" class="form-control" placeholder="ما تم دفعه من الدفعة الأولي"> </div>
                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                        <input type="text" name="instalment_amonut" class="form-control" placeholder="المبلغ المقسط"> </div>
                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                            <input type="text" name="instalment_value" class="form-control" placeholder="قيمة القسط"> </div>
                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                <input type="text" name="total_price" class="form-control" placeholder="اجمالي ثمن الشقة"> </div>
                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                    <input type="text" name="monthly_installment" class="form-control" placeholder="القسط الشهري مع الربح"> </div>
                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                        <input type="text" name="total_pays" class="form-control" placeholder="اجمالي الدفع المدفوعة"> </div>
                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                            <input type="text" name="no_monthes" class="form-control" placeholder="عدد الأشهر"> </div>
                                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                <input type="text" name="no_years" class="form-control" placeholder="عدد السنوات"> </div>
                                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                    <input type="text" name="monthly_profit_rate" class="form-control" placeholder="نسبة الربح الشهري"> </div>
                                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                        <input type="text" name="profit_rate" class="form-control" placeholder="نسبة الربح"> </div>
                                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                            <input type="text" name="profit_value" class="form-control" placeholder="قيمة الربح"> </div>
                                                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                <input type="text" name="installment_sdate" class="form-control" placeholder="تاريخ بداية الأقساط "> </div>
                                                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                    <input type="text" name="installment_edate" class="form-control" placeholder="تاريخ نهاية الأقساط"> </div>
                                                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                        <input type="text" name="flat_shahed" class="form-control" placeholder="بيانات الشاهد"> </div>
                                                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                            <input type="text" name="draft_img" class="form-control" placeholder="صورة الكمبيالة"> </div>
                                                                                                            <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                                <input type="text" name="draft_daman" class="form-control" placeholder="ضمان الكمبيالة"> </div>
                                                                                                                <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                                    <select class="form-control select2me" name="contract_status">
                                                                                                                        <option value="0"> حالة العقد</option>
                                                                                                                        <option value="1">تم كتابة عقد </option>
                                                                                                                        <option value="2">شيكات</option>
                                                                                                                        <option value="3">سند دين منظم</option>
                                                                                                                    </select> </div>
                                                                                                                    <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                                        <select class="form-control select2me" name="cash_status">
                                                                                                                            <option value="0">   هل تم اضافة الكمبيالات</option>
                                                                                                                            <option value="1">مضافة </option>
                                                                                                                            <option value="2">غير مضافة</option>
                                                                                                                        </select> </div>

                                                                                                                        <div class="col-md-3" style=" margin-bottom:0.1px">
                                                                                                                            <select class="form-control select2me" name="sheck_sanad">
                                                                                                                                <option value="0"> حالة السند </option>
                                                                                                                                <option value="1">تم كتابة شيكات </option>
                                                                                                                                <option value="2">تم اضافة سند دين منظم </option>
                                                                                                                            </select> </div>

                                                                                                                            <div class="col-md-3" >
                                                                                                                                <div class="input-group input-small">
                                                                                                                                    <select class="form-control select2me" name="rent_contract_status">
                                                                                                                                        <option value="0"> حالة عقد الإيجار</option>
                                                                                                                                        <option value="1">عقد نهائي </option>
                                                                                                                                        <option value="2">عقد مبدئي</option>
                                                                                                                                        <option value="3">عقد ايجار ينتهي بالتمليك</option>
                                                                                                                                        <option value="4">عقد ايجار</option>
                                                                                                                                    </select>
                                                                                                                                    <span class="input-group-btn">
                                                                                                                                        <button class="btn blue" type="submit" name="b1">حفـــظ</button>
                                                                                                                                    </span>
                                                                                                                                </div>

                                                                                                        

                                                                                                                        </div>
                                                                                                                            
                                                                                                                    </div>
                                                                                                                            </form>
                                                                                                                            <!-- END FORM-->
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                </div>
                                                                                                        
                                                                                                        @endsection

                   
                               
            
