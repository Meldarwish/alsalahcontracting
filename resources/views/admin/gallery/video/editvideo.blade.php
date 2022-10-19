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
                                            <span class="caption-subject bold uppercase">@if(isset($page_title)) {{$page_title}} @endif</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                       <form  action="{{url('admincp/updatevideogallery')}}/{{$row->id}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}

                                                <div class="col-sm-12">
                                           <div class="form-group">
                                                <label for="single" class="control-label">{{$trans::cmslang('select_viewlang')}}</label>
                                                <select id="single" name="langkey" class="form-control select2">
                                                    @if($row->langkey != NULL)
                                                    <option value="{{$row->langkey}}">{{$trans::getlangname($row->langkey)}}</option>
                                                    @endif
                                                    @if(count($lang::all()))
                                                        @foreach($lang::all() as $cmslang)
                                                          <option value="{{$cmslang->code}}">{{$cmslang->name}}</option>
                                                        @endforeach
                                                    @endif
                                                   </select>
                                            </div>

                                                   <div class="form-group">
                                                        <label for="single" class="control-label">{{$trans::cmslang('select_ection')}}</label>
                                                        <select id="single" name="section_id" class="form-control select2">
                                                         @if($row->section_id != NULL)
                                                            @php
                                                            $get_name  =  \App\Models\CmsModels\GallerySectionsModelCMS::where('id',$row->section_id )->first();
                                                        if($get_name){
                                                           $section_name =  $get_name->title;
                                                        }else{
                                                            $section_name = '';
                                                        }
                                                        @endphp
                                                            <option value="{{$row->section_id}}">{{$section_name}}</option>
                                                         @endif
                                                            @if(count($sections))
                                                                @foreach($sections as $section )
                                                                  <option value="{{$section->id}}">{{$section->title}}</option>
                                                                @endforeach
                                                            @endif
                                                           </select>
                                                    </div>



                                                    <div class="form-group">
                                                        <label>{{$trans::cmslang('title')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text" value="{{$row->title}}"  name="title" required="" class="form-control" placeholder="Add  post title Here"> </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>{{$trans::cmslang('videourl')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text"  value="{{$row->url}}" name="videourl" required="" class="form-control" placeholder="{{$trans::cmslang('videourl')}}"> </div>
                                                    </div>




                                                <div class="form-group">
                                                    <label> {{$trans::cmslang('active_stuts')}} </label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" type="radio"  @if($row->stuts === 1) checked="" @endif>{{$trans::cmslang('yes')}}
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio"  @if($row->stuts === 0) checked="" @endif> {{$trans::cmslang('no')}}
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>

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
