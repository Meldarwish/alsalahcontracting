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
                            <div class="portlet dark box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> {{$row->subject}} </div>
                                    <div class="actions">
                                            <a href="javascript:;" class="btn  blue btn-sm">
                                            <i class="fa fa-mail-reply-all"></i> {{$trans::cmslang('mail_replay')}} </a>

                                            <a href="{{url('/admincp/messageaction')}}/{{$row->id}}/important"
                                             class="btn green"><i class="fa fa-trash-o"></i> {{$trans::cmslang('mail_important')}}</a>


                                            <a href="{{url('/admincp/messageaction')}}/{{$row->id}}/arachive"
                                             class="btn purple"><i class="fa fa-folder-open"></i> {{$trans::cmslang('mail_arachive')}}</a>


                                            <a href="{{url('/admincp/messageaction')}}/{{$row->id}}/temp"
                                             class="btn default"><i class="fa fa-trash-o"></i> {{$trans::cmslang('mail_temp')}}</a>
                                             <a href="{{url('/admincp/deletemailmessages')}}/{{$row->id}}"
                                                       onclick="return confirm('{{$trans::cmslang('confirmdelete')}}')" class="btn btn-sm red"> {{$trans::cmslang('delete')}} <i class="fa fa-trash"></i>
                                            </a>



                                    </div>
                                </div>
                                <div class="col-md-6 margin-top-40">
                                    <div class="portlet-body">
                                        <div class="row static-info">
                                            <div class="col-md-5 name"><i class="fa fa-user"></i> {{$trans::cmslang('mail_sender')}} </div>
                                            <div class="col-md-7 value"> {{$row->name}} </div>
                                        </div>
                                        <div class="row static-info">
                                            <div class="col-md-5 name"> <i class="fa fa-envelope"></i> {{$trans::cmslang('mail_name')}} </div>
                                            <div class="col-md-7 value">
                                            <a href="mailto:{{$row->email}}">{{$row->email}}</a>
                                              </div>
                                        </div>
                                        <div class="row static-info">
                                            <div class="col-md-5 name"> <i class="fa fa-phone"></i> {{$trans::cmslang('mail_phone')}}</div>
                                            <div class="col-md-7 value">  {{$row->phone}} </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 margin-top-40">
                                    <div class="portlet-body">
                                        <div class="row static-info">
                                            <div class="col-md-5 name"> <i class="fa fa-list-alt"></i> {{$trans::cmslang('mail_subject')}} </div>
                                            <div class="col-md-7 value"> {{$row->subject}} </div>
                                        </div>
                                        <div class="row static-info">
                                            <div class="col-md-5 name"> <i class="fa fa-calendar"></i> {{$trans::cmslang('mail_date')}} </div>
                                            <div class="col-md-7 value"> {{$row->date}} </div>
                                        </div>
                                        <div class="row static-info">
                                            <div class="col-md-5 name"> <i class="fa fa-clock-o"></i> {{$trans::cmslang('mail_time')}} </div>
                                            <div class="col-md-7 value"> {{$row->time}} </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="col-md-12 margin-top-40">
                             <button type="button" class="btn btn-block dark">
                             <i class="fa fa-envelope"></i> {{$trans::cmslang('mail_message')}}</button>
                                <blockquote>
                                    <p>{{$row->message}}</p>
                                </blockquote>
                            </div>
                        </div>
                        </div>
@endsection
