@extends('project.layouts')

@section('content')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject font-purple-soft bold uppercase h2"> مشروع:{{ $project->project_name }} ({{ $project->project_num  }}) </span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <ul class="nav nav-tabs h3">
                                        <li class="active">
                                            <a href="#tab_1_1" data-toggle="tab"> بيانات المشروع </a>
                                        </li>
                                        <li>
                                            <a href="#tab_1_2" data-toggle="tab"> بيانات العقد </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="tab_1_1">
                                            <ul class="h4" style="line-height: 30px"> 
                                                <li class="ribbon-content">مالك المشروع:{{ $project->Project_owner  }}</li>
                                                <li class="ribbon-content">رقم القطعة والقسيمة:{{ $project->bulding_part  }}</li>
                                                <li class="ribbon-content">احداثيات الموقع:{{ $project->Project_gps }}</li>
                                                <li class="ribbon-content">مساحة الأرض:{{ $project->project_flw  }}</li>
                                                <li class="ribbon-content">حالة المشروع:{{ $project->project_status  }}</li>
                                                <li class="ribbon-content">نوع المشروع:{{ $project->project_type  }}</li>
                                                <li class="ribbon-content">الموازنة بالأيام:{{ $project->project_budget  }}({{ $project->project_budget_curr }})</li> 
                                            </ul>
                                        
                                        </div>
                                        <div class="tab-pane fade" id="tab_1_2">
                                            <ul  class="h4" style="line-height: 30px"><li class="ribbon-content">الموظف المشرف:{{ $project->project_emp  }}</li>
                                                <li class="ribbon-content">اسم المفوض:{{ $project->Project_mfawd  }}</li>
                                                <li class="ribbon-content">رقم هوية المفوض:{{ $project->Project_mfawd_id }}</li>
                                                <li class="ribbon-content">ملاحظات:{{ $project->project_notes  }}</li>
                                                <li class="ribbon-content">نص العقد:{{ $project->project_contract  }}</li> </ul>
                                        </div>
                                    </div>
                    
                            </div>
                        </div>
                    </div>
                    



                    
                    
                            </div>
                        </div>
                    </div>
                    <!-- END : RIBBONS -->
                    @endsection