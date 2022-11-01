@extends('admin.layouts.cms')
@section('content')
@php
    $trans = new App\Http\Helpers\Cmstranslate;
    $lang = new App\Models\CmsModels\SiteLang;

@endphp
@if(!$errors->isEmpty())
	<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
           <strong>  {{$errors->first('title')}}</strong>
    </div>
@endif
				        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-green-sharp">
                                        <i class="icon-bubble font-green-sharp"></i>
                                            <span class="caption-subject bold uppercase">{{$trans::cmslang('global_settings')}} || {{$trans::cmslang('siteinfo')}}</span>
                                        </div>
                                    </div>
                                    <style type="text/css">
                                        .input-group-addon > i {color: #55b955; }
                                    </style>
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/updateconfiglogos')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                            <div class="col-sm-12">

                                                    <div class="form-group col-sm-4">
                                                        <label class="control-label">{{$trans::cmslang('sitelogo')}}</label>
                                                           <div>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="{{url('/public/uploads/config/')}}/{{config('site.site_logo')}}" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">{{$trans::cmslang('select_image')}}</span>
                                                                        <span class="fileinput-exists">{{$trans::cmslang('change')}}</span>
                                                                        <input type="file" name="site_logo"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{$trans::cmslang('remove')}} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-4">
                                                        <label class="control-label">{{$trans::cmslang('sitemobilelogo')}}</label>
                                                           <div>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="{{url('/public/uploads/config/')}}/{{config('site.site_mobilelogo')}}" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">{{$trans::cmslang('select_image')}}</span>
                                                                        <span class="fileinput-exists">{{$trans::cmslang('change')}}</span>
                                                                        <input type="file" name="site_mobilelogo"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{$trans::cmslang('remove')}} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group col-sm-4">
                                                        <label class="control-label">{{$trans::cmslang('sitefaiveicone')}}</label>
                                                           <div>
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="{{url('/public/uploads/config/')}}/{{config('site.site_faiveicone')}}" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">{{$trans::cmslang('select_image')}}</span>
                                                                        <span class="fileinput-exists">{{$trans::cmslang('change')}}</span>
                                                                        <input type="file" name="site_faiveicone"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{$trans::cmslang('remove')}} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                         </div>
                                            </div><!-- // end form body -->
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">{{$trans::cmslang('submit')}}</button>
                                                <button type="reset" class="btn red">{{$trans::cmslang('cancel')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
@endsection
