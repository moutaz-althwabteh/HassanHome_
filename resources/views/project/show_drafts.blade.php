@extends('project.layouts')

@section('content')

    


  @foreach ($flat->drafts as $draft)
    
  <div class="row" >
    <div class="col-md-12">

  <div class="col order-last h4" align="center">
   بسم الله الرحمن الرحيم
  </div>
  <div class="col order-last h3" align="center">
كمبيالة والدفع بها 
  </div>
  <div class="col">
   <p class="h4" style="line-height: 30px"> المدين: {{ $flat->flat_owner }} من:{{ $flat->flat_owner_address }} هوية رقم: (  {{ $flat->flat_owner_id }} )، أقر أنني مدين  </br>
       للسيد:حسان هوم من:غزة هوية رقم:877522223 بمبلغ وقدره: {{ $flat->instalment_value }} فقط لا غير </br> وهو جزء من باقي الشقة، وأتعهد 
    بسداد المبلغ كامل في موعد أقصاه:{{ $flat->installment_date }} ، دفعة واحدة وعليه </br>فإنني أتحمل كافة الضمانات القانونية والعرفية في حالة 
عدم السداد وهذا اقرار مني بذلك وأمام الشهود وحسب الأصول حرر بتاريخ:{{ $flat->created_at }} </p>
  </div>


  <div class="col-xs-12 h4" align="center">
    <div class="row" style="padding:5px">
        <div class="col-md-4"> توقيع المدين </div>
        <div class="col-md-4">  شاهد وكفيل بالتضامن </div>
        <div class="col-md-4"> شاهد </div>
    </div>
  </div>

  <div class="col-xs-12 h4" align="center">
    <div class="row" style="padding:5px">
        <div class="col-md-4"> {{ $flat->flat_owner }}  </div>
        <div class="col-md-4"> هوية رقم: {{ $flat->flat_owner_id }}  </div>
        <div class="col-md-4"> {{ $flat->flat_owner }}  </div>
    </div>
  </div>
  <div class="col-xs-12 h4" align="center">
    <div class="row" style="padding:5px">
        <div class="col-md-4">........................  </div>
        <div class="col-md-4"> ....................... </div>
        <div class="col-md-4"> ....................... </div>
    </div>
  </div>

  <div class="col-xs-12 h4" align="left">
    <div class="row"> أصادق على صحة التواقيع </div>
  </div>

  <div class="col-xs-12 h4" align="center">
    <div class="row">  __________________________________________________________________________________________________________________  </div>
  </div>
</div>
</div>

    
  @endforeach


  
@endsection