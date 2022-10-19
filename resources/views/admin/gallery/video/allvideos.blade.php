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
                                                    <th>{{$trans::cmslang('title')}}</th>
                                                    <th>{{$trans::cmslang('section')}}</th>
                                                    <th>{{$trans::cmslang('language')}}</th>
                                                    <th>{{$trans::cmslang('active_stuts')}}</th>
                                                    <th>{{$trans::cmslang('edit')}}</th>
                                                    <th>{{$trans::cmslang('delete')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($sections))
                                            	@foreach($sections as $section )
                                                @php
                                                     $get_name  =  \App\Models\CmsModels\GallerySectionsModelCMS::where('id',$section->section_id )->first();
                                                        if($get_name){
                                                           $section_name =  $get_name->title;
                                                        }else{
                                                            $section_name = '';
                                                        }

                                                @endphp
                                                <tr>
                                                    <td>{{$section->title}}</td>
                                                    <td>{{$section_name}}</td>
                                                    <td>{{$trans::getlangname($section->langkey)}}</td>
                                                     <td>
                                                    @if($section->stuts === 1)
                                                        <a href="{{url('/admincp/videogallerystuts')}}/{{$section->id}}/0" title="dicactive item" class="btn btn-icon green">
                                                          {{$trans::cmslang('yes')}} <i class="fa fa-check-square"></i>
                                                        </a>
                                                    @endif

                                                    @if($section->stuts === 0)
                                                        <a href="{{url('/admincp/videogallerystuts')}}/{{$section->id}}/1" title="active item" class="btn btn-icon dark">
                                                          {{$trans::cmslang('no')}} <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    @endif
                                                    </td>
                                                    <td>
                                                      <a title="{{$trans::cmslang('edit')}}" href="{{url('/admincp/editvideogallery')}}/{{$section->id}}" class="btn btn-sm green-meadow"> {{$trans::cmslang('edit')}} <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                      <a href="{{url('/admincp/deletevideogallery')}}/{{$section->id}}"
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
