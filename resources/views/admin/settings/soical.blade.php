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
                                            <span class="caption-subject bold uppercase">{{$trans::cmslang('global_settings')}} || {{$trans::cmslang('soicalmediaa')}}</span>
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
                                               @foreach($soical_keys as $soical )
                                               @php $is_key = substr($soical->key, 7);  @endphp
                                                    <div class="form-group">
                                                        <label>{{$is_key}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-{{$is_key}}"></i>
                                                            </span>
                                                            <input type="text" name="{{$soical->key}}" value="{{$soical->value}}" required="" class="form-control"> </div>
                                                    </div>
                                                @endforeach
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
