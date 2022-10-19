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
                                        <form  action="{{url('admincp/addlangkeyvalue')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                              <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Lang Key  </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="langkey" required="" class="form-control" 
                                                        placeholder="Add Your Lang Key"> </div>
                                                </div>
                                                @foreach($languages as $lang )
                                                <div class="form-group">
                                                    <label> {{$lang->name}}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="{{$lang->code}}" required="" class="form-control" 
                                                        placeholder="Add Translation Value"> </div>
                                                </div>
                                                @endforeach
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