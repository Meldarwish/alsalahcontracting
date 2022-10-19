@extends('admin.layouts.cms')
@php
    $trans = new App\Http\Helpers\Cmstranslate;
    $lang = new App\Models\CmsModels\SiteLang;

@endphp
@section('content')
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">@if(isset($page_title)) {{$page_title}} @endif</span>
                                        </div>
                                        <div class="tools"> </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>{{$trans::cmslang('mail_sender')}}</th>
                                                    <th>{{$trans::cmslang('mail_name')}}</th>
                                                    <th>{{$trans::cmslang('mail_phone')}}</th>
                                                    <th>{{$trans::cmslang('mail_subject')}}</th>
                                                    <th>{{$trans::cmslang('mail_readingstuts')}}</th>
                                                    @php /* <th>{{$trans::cmslang('mail_attach')}}</th> */ @endphp
                                                    <th>{{$trans::cmslang('mail_date')}}</th>
                                                    <th>{{$trans::cmslang('mail_time')}}</th>
                                                    <th>{{$trans::cmslang('delete')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($emails))
                                            	@foreach($emails as $email )
                                                <tr>
                                                    <td>{{$email->name}}</td>
                                                    <td>{{$email->email}}</td>
                                                    <td>{{$email->phone}}</td>
                                                    <td>
                                                    <a href="{{url('/admincp/readmessages')}}/{{$email->id}}">{{$email->subject}}</a>
                                                    </td>
                                                     <td>
                                                    @if($email->readed === 1)
                                                        <a href="{{url('/admincp/messagesstuts')}}/{{$email->id}}/0" title="dicactive item" class="btn btn-icon green">
                                                          {{$trans::cmslang('mail_readed')}} <i class="fa fa-check-square"></i>
                                                        </a>
                                                    @endif

                                                    @if($email->readed === 0)
                                                        <a href="{{url('/admincp/messagesstuts')}}/{{$email->id}}/1" title="active item" class="btn btn-icon dark">
                                                          {{$trans::cmslang('mail_notreaded')}} <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    @endif

                                                    </td>
                                                    @php /*
                                                    <td>{{$email->attach}}</td>   */ @endphp
                                                    <td>{{$email->date}}</td>
                                                    <td>{{$email->time}}</td>


                                                    <td>
                                                      <a href="{{url('/admincp/deletemailmessages')}}/{{$email->id}}"
                                                       onclick="return confirm('{{$trans::cmslang('confirmdelete')}}')" class="btn btn-sm red"> {{$trans::cmslang('delete')}} <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



@endsection
