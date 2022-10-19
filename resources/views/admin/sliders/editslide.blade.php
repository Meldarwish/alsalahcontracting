@extends('admin.layouts.cms')

@section('content')
@php $trans = new App\Http\Helpers\Cmstranslate; @endphp
@if(session()->has('addsuss'))
	<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
           <strong> Data has been added successfully</strong>
    </div>
@endif




				<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN SAMPLE FORM PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-green-sharp">
                                        <i class="icon-bubble font-green-sharp"></i>
                                            <span class="caption-subject bold uppercase"> {{$trans->cmslang('editdata')}} </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/updateslied')}}/{{$row->id}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                              <div class="col-sm-8">
                                           <div class="form-group">
                                                <label for="single" class="control-label">{{$trans::cmslang('select_viewlang')}}</label>
                                                <select id="single" name="langkey" class="form-control select2">
                                                    @if($row->langkey != NULL)
                                                    <option value="{{$row->langkey}}">{{$trans::getlangname($row->langkey)}}</option>
                                                    @endif
                                                    @if(count(sitelanguage::all()))
                                                        @foreach(sitelanguage::all() as $cmslang)
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
                                                        <input type="text" value="{{$row->text_1}}" name="text_1" required="" class="form-control" placeholder="Add text 1 in slider"> </div>
                                                </div>

                                                <div class="form-group">
                                                     <label>{{$trans->cmslang('slider_title_2')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text"  value="{{$row->text_2}}" name="text_2" required="" class="form-control" placeholder="Add text 2 in slider"> </div>
                                                </div>

                                                <div class="form-group">
                                                     <label>{{$trans->cmslang('url')}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-globe"></i>
                                                        </span>
                                                        <input type="text" value="{{$row->url}}" name="url"  class="form-control" placeholder="Add Slider URL link to"> </div>
                                                </div>
                                            </div>

                                        <div class="col-sm-4">
                                            <div class="form-group last">
                                                    <label class="control-label col-md-12"> {{$trans->cmslang('photo')}} </label>
                                                    <div class="col-md-12">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="{{url('/')}}/uploads/sliders/{{$row->photo}}" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new">  {{$trans->cmslang('select_image')}} </span>
                                                                    <span class="fileinput-exists"> {{$trans->cmslang('change')}} </span>
                                                                    <input type="file" name="photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{$trans->cmslang('remove')}}  </a>
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
                                                            <input name="stuts" id="stuts1" value="1" type="radio" @if($row->stuts === '1') checked="" @endif> {{$trans->cmslang('yes')}}
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio" @if($row->stuts === '0') checked="" @endif> {{$trans->cmslang('no')}}
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
