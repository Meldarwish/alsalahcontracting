@extends('admin.layouts.cms')

@section('content')
            
@if(!$errors->isEmpty())
    <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
           <strong>  {{$errors->first('code')}}</strong> 
    </div>
@endif 
            
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
                                            <span class="caption-subject bold uppercase">@if(isset($page_title)) {{$page_title}} @endif</span>
                                        </div> 
                                    </div> 		 
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/updateadminlang')}}/{{$row->id}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                              <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label> language Name </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="name" value="{{$row->name}}" required="" class="form-control" placeholder="language Name"> </div>
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label>language Key</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" maxlength="2" value="{{$row->code}}"  name="code" required="" class="form-control" 
                                                        placeholder="Add language Key like en,ar,fr"> </div>
                                                </div>
 
                                            </div>

                                        <div class="col-sm-4"> 
                                            <div class="form-group last">
                                                    <label class="control-label col-md-12"> Add Image Here</label>
                                                    <div class="col-md-12">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="{{url('/')}}/uploads/settings/languages/{{$row->photo}}" alt="" /> </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                            <div>
                                                                <span class="btn default btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="photo"> </span>
                                                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                               
                                             
                                        </div>  

                                                <div class="form-group">
                                                    <label> language Direction </label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="dir" id="dir1" value="ltr" type="radio" @if($row->dir =='ltr') checked="" @endif> left to right 
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="dir" id="dir2" value="rtl" type="radio"  @if($row->dir =='rtl') checked="" @endif>  right to left 
                                                            <span></span>
                                                        </label> 
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label>Active Lang</label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" type="radio" @if($row->stuts ===1) checked="" @endif> Yes
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio" @if($row->stuts === 0) checked="" @endif> No
                                                            <span></span>
                                                        </label> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">Submit</button>
                                                <button type="reset" class="btn red">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET--> 
                            </div> 
                        </div> 
@endsection