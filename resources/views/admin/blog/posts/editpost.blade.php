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
                                            <span class="caption-subject bold uppercase">{{trans::cmslang('edit')}}</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                       <form  action="{{url('admincp/updatepost')}}/{{$row->id}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}

                                            <div class="col-sm-12">

                                                <div class="col-sm-8">
                                           <div class="form-group">
                                                <label for="single" class="control-label">{{trans::cmslang('select_viewlang')}}</label>
                                                <select id="single" name="langkey" class="form-control select2">
                                                    @if($row->langkey != NULL)
                                                    <option value="{{$row->langkey}}">{{trans::getlangname($row->langkey)}}</option>
                                                    @endif
                                                    @if(count(sitelanguage::all()))
                                                        @foreach(sitelanguage::all() as $cmslang)
                                                          <option value="{{$cmslang->code}}">{{$cmslang->name}}</option>
                                                        @endforeach
                                                    @endif
                                                   </select>
                                            </div>

                                       <div class="form-group">
                                            <label for="single" class="control-label">{{trans::cmslang('select_ection')}}</label>
                                            <select id="single" name="section_id" class="form-control select2">
                                                @if($row->section_id != NULL)
                                                  <option value="{{$row->section_id}}">  {{App\Models\CmsModels\BlogSectionsCMS::get_name_by_id($row->section_id)}} </option>
                                                @endif
                                                @if(count($sections))
                                                    @foreach($sections as $section )
                                                      <option value="{{$section->id}}">{{$section->title}}</option>
                                                    @endforeach
                                                @endif
                                               </select>
                                        </div>

                                                    <div class="form-group">
                                                        <label>{{trans::cmslang('title')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text" value="{{$row->title}}"  name="title" required="" class="form-control" placeholder="Add  post title Here"> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> {{trans::cmslang('seo_url')}} </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text" value="{{urldecode($row->url)}}" name="url" required="" class="form-control" placeholder="{{trans::cmslang('seo_url')}}"> </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label> {{trans::cmslang('writter')}}  </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text" value="{{$row->aouther}}" name="aouther"  class="form-control" placeholder="  {{trans::cmslang('writter')}}"> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-md-12">{{trans::cmslang('short_info')}}</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" name="short_desc"  rows="4" placeholder="Enter Section  Description here">{{$row->short_desc}}</textarea>
                                                            <span class="help-block">  </span>
                                                        </div>
                                                    </div>

                                                <div class="form-group">
                                                    <label> {{trans::cmslang('active_stuts')}} </label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" type="radio"  @if($row->stuts === 1) checked="" @endif>{{trans::cmslang('yes')}}
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio"  @if($row->stuts === 0) checked="" @endif> {{trans::cmslang('no')}}
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-4">
                                                <div class="form-group last">
                                                        <label class="control-label col-md-12">{{trans::cmslang('active_stuts')}}</label>
                                                        <div class="col-md-12">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="{{url('/uploads/blog/posts/')}}/{{$row->photo}}" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new">{{trans::cmslang('select_image')}}</span>
                                                                        <span class="fileinput-exists">{{trans::cmslang('change')}}</span>
                                                                        <input type="file" name="photo"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{trans::cmslang('remove')}} </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                 <label class="control-label col-md-12"> {{trans::cmslang('addcontent')}}</label>

                                                  <textarea id="editor_1" name="content" class=" form-control"   rows="4" >{{$row->content}}</textarea>
                                            <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>


                                         </div>

                                     <div class="row">
                                        <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label col-md-12">{{trans::cmslang('seo_desc')}}</label>
                                                       <div class="col-md-12">
                                                         <span class="help-block">     </span>
                                                            <textarea  name="meat_description" id="maxlength_textarea" class="form-control" maxlength="225" rows="2" placeholder="This textarea has a limit of 225 chars.">{{$row->meat_description}}</textarea>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label col-md-12">{{trans::cmslang('seo_keywords')}}</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="meat_keywords" style="width: 100%;" class="form-control input-full" value="{{$row->meat_keywords}}" data-role="tagsinput"> </div>
                                            </div>

                                         </div>
                                    </div>

                                            </div><!-- // end form body -->
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">{{trans::cmslang('submit')}}</button>
                                                <button type="reset" class="btn red">{{trans::cmslang('cancel')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- END SAMPLE FORM PORTLET-->
                            </div>
                        </div>
@endsection
