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
                                        <form  action="{{url('admincp/updateconfig')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                            <div class="col-sm-12">

                                                    <div class="form-group col-md-6">
                                                        <label>{{$trans::cmslang('sitename')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-dashboard"></i>
                                                            </span>
                                                            <input type="text" name="site_name" value="{{config('site.site_name')}}" required="" class="form-control"> </div>
                                                    </div>

                                                    <div class="form-group  col-md-6">
                                                        <label>{{$trans::cmslang('sitetageline')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-google"></i>
                                                            </span>
                                                            <input type="text" name="site_tageline" value="{{config('site.site_tageline')}}" required="" class="form-control"> </div>
                                                    </div>

                                                    <div class="form-group  col-md-6">
                                                        <label>{{$trans::cmslang('siteemail_1')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input type="text" name="site_email_1" value="{{config('site.site_email_1')}}" required="" class="form-control"> </div>
                                                    </div>

                                                    <div class="form-group  col-md-6">
                                                        <label>{{$trans::cmslang('siteemail_2')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input type="text" name="site_email_2" value="{{config('site.site_email_2')}}" required="" class="form-control"> </div>
                                                    </div>

                                                     <div class="form-group  col-md-6">
                                                         <label>{{$trans::cmslang('sitephone')}}</label>
                                                         <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="fa fa-mobile-phone"></i>
                                                             </span>
                                                             <input type="text" name="site_phone" value="{{config('site.site_phone')}}" required="" class="form-control"> </div>
                                                     </div>

                                                     <div class="form-group  col-md-6">
                                                         <label>{{$trans::cmslang('sitephone_2')}}</label>
                                                         <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="fa fa-mobile-phone"></i>
                                                             </span>
                                                             <input type="text" name="site_phone_2" value="{{config('site.site_phone_2')}}" required="" class="form-control"> </div>
                                                     </div>

                                                    <div class="form-group  col-md-6">
                                                        <label>{{$trans::cmslang('sitetelphone')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-phone-square"></i>
                                                            </span>
                                                            <input type="text" name="site_telphone" value="{{config('site.site_telphone')}}" required="" class="form-control"> </div>
                                                     </div>

                                                    <div class="form-group  col-md-6">
                                                        <label>{{$trans::cmslang('sitefaxnumber')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fax"></i>
                                                            </span>
                                                            <input type="text" name="info_sitefaxnumber" value="{{config('site.info_sitefaxnumber')}}" required="" class="form-control"> </div>
                                                    </div>

                                                     <div class="form-group col-md-12">
                                                         <label>{{$trans::cmslang('siteaddress')}}</label>
                                                         <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="fa fa-building"></i>
                                                             </span>
                                                             <input type="text" name="site_address" value="{{config('site.site_address')}}" required="" class="form-control"> </div>
                                                     </div>

                                                     <div class="form-group col-md-12">
                                                         <label>{{$trans::cmslang('siteaddress_2')}}</label>
                                                         <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="fa fa-building"></i>
                                                             </span>
                                                             <input type="text" name="site_address_2" value="{{config('site.site_address_2')}}" required="" class="form-control"> </div>
                                                     </div>


                                                     <div class="form-group col-md-12">
                                                         <label>{{$trans::cmslang('sitemapcode')}}</label>
                                                         <div class="input-group">
                                                             <span class="input-group-addon">
                                                                 <i class="fa fa-map-pin"></i>
                                                             </span>
                                                               <textarea name="site_mapcode" class=" form-control" rows="3" >{{config('site.site_mapcode')}}</textarea> </div>
                                                     </div>
                                                     @php /* <h3 align="center">{{$trans::cmslang('sitewelcomemsg')}}</h3> */ @endphp

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
