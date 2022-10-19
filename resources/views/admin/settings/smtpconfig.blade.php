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
                                            <span class="caption-subject bold uppercase">{{$trans::cmslang('global_settings')}} || {{$trans::cmslang('email_settings')}}</span>
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
                                                <div class="form-group col-md-12">
                                                    <label>{{$trans::cmslang('mail_send_to')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" name="mail_send_to" value="{{config('site.mail_send_to')}}" required="" class="form-control"> </div>
                                                </div>

                                                <div class="form-group  col-md-12">
                                                    <label>{{$trans::cmslang('mail_send_to_cc')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-envelope"></i>
                                                        </span>
                                                        <input type="text" name="mail_send_to_cc" value="{{config('site.mail_send_to_cc')}}" required="" class="form-control"> </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>{{$trans::cmslang('mai_options_title')}}</label>
                                                    <div class="mt-radio-list">
                                                        <label class="mt-radio">
                                                        <i class="fa fa-lock"></i>
                                                            <input name="mailstmpoptions" id="stuts1" value="simple_settings" type="radio"  @if(config('site.mailstmpoptions') === 'simple_settings') checked="" @endif > {{$trans::cmslang('mail_simple_settings')}}



                                                            <span></span>
                                                        </label>
                                                        <label class="mt-radio">
                                                        <i class="fa fa-unlock"></i>
                                                            <input name="mailstmpoptions" id="stuts2" value="advanced_settings" type="radio"  @if(config('site.mailstmpoptions') === 'advanced_settings') checked="" @endif> {{$trans::cmslang('mail_advanced_settings')}}
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>


                                <div  @if(config('site.mailstmpoptions') != 'advanced_settings') style="display: none;" @endif  id="mail_advanced_settings" >

                                            <div class="form-group  col-md-12">
                                                <label>smtp host</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-globe"></i>
                                                    </span>
                                           <input type="text" name="mail_smtphost" value="{{config('site.mail_smtphost')}}" required="" class="form-control"> </div>
                                            </div>

                                            <div class="form-group  col-md-12">
                                                <label>smtp user</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <input type="text" name="mail_smtpuser" value="{{config('site.mail_smtpuser')}}" required="" class="form-control"> </div>
                                            </div>

                                            <div class="form-group  col-md-12">
                                                <label>smtp password</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-key"></i>
                                                    </span>
                                                    <input type="text" name="mail_smtppassword" value="{{config('site.mail_smtppassword')}}" required="" class="form-control"> </div>
                                            </div>

                                            <div class="form-group  col-md-12">
                                                <label>smtp port</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-wifi"></i>
                                                    </span>
                                                    <input type="text" name="mail_smtpport" value="{{config('site.mail_smtpport')}}" required="" class="form-control"> </div>
                                            </div>

                                            <div class="form-group  col-md-12">
                                                <label>smtp from</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-mail-reply-all"></i>
                                                    </span>
                                                    <input type="text" name="mail_smtpfrom" value="{{config('site.mail_smtpfrom')}}" required="" class="form-control"> </div>
                                            </div>
                                        </div> <!-- end smtp div -->









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
