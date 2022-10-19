@extends('admin.layouts.cms')

@section('content')
@php $trans = new App\Http\Helpers\Cmstranslate;
$lang= new App\Models\CmsModels\SiteLang;

@endphp
				<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-green-sharp">
                                        <i class="icon-bubble font-green-sharp"></i>
                                            <span class="caption-subject bold uppercase">{{$trans->cmslang('newslider')}} </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/saveslied')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                              <div class="col-sm-8">
                                           <div class="form-group">
                                                <label for="single" class="control-label">{{$trans::cmslang('select_viewlang')}}</label>
                                                <select id="single" name="langkey" class="form-control select2">
                                                    @if(count($lang::all()))
                                                        @foreach($lang::all() as $cmslang)
                                                          <option value="{{$cmslang->code}}">{{$cmslang->name}}</option>
                                                        @endforeach
                                                    @endif
                                                   </select>
                                            </div>
                                                <div class="form-group">
                                                    <label>{{$trans->cmslang('slider_title_1')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="text_1" required="" class="form-control" placeholder="{{$trans->cmslang('slider_title_1')}}"> </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>{{$trans->cmslang('slider_title_2')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="text_2" required="" class="form-control" placeholder="{{$trans->cmslang('slider_title_2')}}"> </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>{{$trans->cmslang('url')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-globe"></i>
                                                        </span>
                                                        <input type="text" name="url" required="" class="form-control" placeholder="{{$trans->cmslang('url')}}"> </div>
                                                </div>
                                            </div>

                                        <div class="col-sm-4">
                                            <div class="form-group last">
                                                    <label class="control-label col-md-12">{{$trans->cmslang('photo')}}
                                                    </label>
                                                    <div class="col-md-12">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> {{$trans->cmslang('select_image')}} </span>
                                                                    <span class="fileinput-exists">{{$trans->cmslang('change')}} </span>
                                                                    <input type="file" name="photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{$trans->cmslang('remove')}} </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                        </div>
                                                <div class="form-group">
                                                    <label> {{$trans->cmslang('active_stuts')}}</label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" checked="" type="radio"> {{$trans->cmslang('yes')}}
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio"> {{$trans->cmslang('no')}}
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">{{$trans->cmslang('submit')}}</button>
                                                <button type="reset" class="btn red">{{$trans->cmslang('cancel')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
@endsection
