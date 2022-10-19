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
                                            <span class="caption-subject bold uppercase">
                                              {{$trans::cmslang('addmenulocation')}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="portlet-body form">
                                        <form  action="{{url('admincp/savemenulocation')}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}

                                                <div class="col-sm-12">



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
                                                        <label>{{$trans::cmslang('title')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text"  name="title" required="" class="form-control" placeholder="{{$trans::cmslang('title')}} "> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>{{$trans::cmslang('url')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-text-width"></i>
                                                            </span>
                                                            <input type="text"  name="url" required="" class="form-control" placeholder="{{$trans::cmslang('url')}} "> </div>
                                                    </div>

                                                <div class="form-group">
                                                    <label>{{$trans::cmslang('active_stuts')}}</label>
                                                    <div class="mt-radio-inline">
                                                        <i class="fa fa-unlock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts1" value="1" checked="" type="radio"> {{$trans::cmslang('yes')}}
                                                            <span></span>
                                                        </label>
                                                        <i class="fa fa-lock"></i>
                                                        <label class="mt-radio">
                                                            <input name="stuts" id="stuts2" value="0" type="radio"> {{$trans::cmslang('no')}}
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>







                                           <div class="form-group">
                                                <label for="single" class="control-label">{{$trans::cmslang('select_sitelinks')}}</label>
                                                <select id="single" name="langkey" class="form-control select2">
                                                    @if(count($menus))
                                                      <optgroup label="{{$trans::cmslang('sitemenu')}}">
                                                        @foreach($menus as $menu)
                                                          <option value="{{$menu->id}}">{{$menu->title}}</option>
                                                        @endforeach
                                                        </optgroup>
                                                    @endif

                                                  @php /*   */ @endphp
                                                    @if(count($blogsections))
                                                      <optgroup label="{{$trans::cmslang('blogsections')}}">
                                                        @foreach($blogsections as $blog_sections)
                                                          <option value="{{$blog_sections->url}}">{{$blog_sections->title}}</option>
                                                        @endforeach
                                                        </optgroup>
                                                    @endif

                                                    @if(count($blogposts))
                                                      <optgroup label="{{$trans::cmslang('blogposts')}}">
                                                        @foreach($blogposts as $bblog_post)
                                                          <option value="{{$bblog_post->url}}">{{$bblog_post->title}}</option>
                                                        @endforeach
                                                        </optgroup>
                                                    @endif

                                                    @if(count($pages))
                                                      <optgroup label="{{$trans::cmslang('pages')}}">
                                                        @foreach($pages as $page)
                                                          <option value="{{$page->url}}">{{$page->title}}</option>
                                                        @endforeach
                                                        </optgroup>
                                                    @endif

                                                    @if(count($services))
                                                      <optgroup label="{{$trans::cmslang('services')}}">
                                                        @foreach($services as $service)
                                                          <option value="{{$service->url}}">{{$service->title}}</option>
                                                        @endforeach
                                                        </optgroup>
                                                    @endif




                                                   </select>
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
