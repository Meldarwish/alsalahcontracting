@extends('admin.layouts.cms')

@section('content')
            
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
                                            <span class="caption-subject bold uppercase">@if(isset($page_title)) {{$page_title}} @endif</span>
                                        </div> 
                                    </div> 		 
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/savetourcategory')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                                                                     
                                            <div class="col-sm-12">
                                                       
                                                <div class="col-sm-8">                    
                                                    
                                                    <div class="form-group">
                                                        <label> Category Name</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text"  name="title" required="" class="form-control" placeholder="Add Category Name"> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> SEO Frindly URl for Category  </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text" id="show_seourl"  name="url" required="" class="form-control" placeholder=" SEO Frindly URl for Category here "> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-12"> Category  Description here</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" name="content"  rows="4" placeholder="Enter Category  Description here"></textarea>
                                                            <span class="help-block">  </span>
                                                        </div>
                                                    </div>

                                                <div class="form-group">
                                                    <label> Active </label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" checked="" type="radio"> Yes
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio"> No
                                                            <span></span>
                                                        </label> 
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-4"> 
                                                <div class="form-group last">
                                                        <label class="control-label col-md-12"> Add Image Here</label>
                                                        <div class="col-md-12">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
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
                                         </div>
                                        
                                     <div class="row">      
                                        <div class="col-sm-12">                                         
                                                <div class="form-group">
                                                    <label class="control-label col-md-12">Meat Description</label>
                                                       <div class="col-md-12">
                                                         <span class="help-block"> enter your meta description for SEO here   </span>
                                                            <textarea  name="meat_description" id="maxlength_textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars."></textarea> 
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-12">SEO Meat Keywords</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="meat_keywords" style="width: 100%;" class="form-control input-full" value="some text," data-role="tagsinput"> </div>
                                            </div>

                                         </div> 
                                    </div> 
    
                                            </div><!-- // end form body --> 
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