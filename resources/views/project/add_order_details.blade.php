@extends('project.layouts')

@section('content')
<div class="row" >
<div class="col-md-12">

    <div class="portlet box blue ">
               <div class="portlet-title">
                   <div class="caption">
                       <i class="fa fa-gift"></i> اضافة تفاصيل الطلبية </div>
                   <div class="tools">
                       <a href="" class="collapse"> </a>
                       <a href="" class="remove"> </a>
                   </div>
               </div>
               
               <div class="portlet-body form">
               <form role="form" method="post" action="{{ route('order_details.store') }}">
                   @csrf
                       <div class="row" style="padding:20px">   
                        <input type="hidden"  name="order_id" value="{{ request()->id }}">  
                               <div class="col-md-2">
                               <input type="text" name="title" class="form-control" placeholder=" الصنف"> </div>
                           <div class="col-md-2">
                               <input type="text" name="type" class="form-control" placeholder="الوحدة"> </div>
                               <div class="col-md-2">
                                <input type="text" name="quantity" class="form-control" placeholder="الكمية "> </div>
                                <div class="col-md-2">
                                    <input type="text" name="price" class="form-control" placeholder="السعر "> </div>
                           <div class="col-md-2">
                               <div class="input-group input-small">
                                   <input type="text" name="total" class="form-control" placeholder="الاجمالي  ">
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

         
    
           @endsection