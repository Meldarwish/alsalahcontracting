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
                                                    <th>{{$trans::cmslang('photo')}}</th>
                                                    <th>{{$trans::cmslang('section')}}</th>
                                                    <th>{{$trans::cmslang('language')}}</th>
                                                    <th>{{$trans::cmslang('delete')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($photos))
                                            	@foreach($photos as $photo )
                                                    @php
                                                        $get_name  =  \App\Models\CmsModels\GallerySectionsModelCMS::where('id',$photo->section_id )->first();
                                                        if($get_name){
                                                           $section_name =  $get_name->title;
                                                        }else{
                                                            $section_name = '';
                                                        }
                                                    @endphp
                                                <tr>
                                                    <td><a href="{{url('/')}}/public/uploads/gallery/{{$photo->photo}}" target="blank">
                                                    <img  src="{{url('/')}}/public/uploads/gallery/{{$photo->photo}}" id="table_immg"></a> </td>
                                                    <td>
                                                    <a href="{{url('/admincp/getsectionphotos')}}/{{$photo->section_id}}" class="btn blue">{{$section_name}}</a>
                                                    </td>
                                                    <td>{{$trans::getlangname($photo->langkey)}}</td>
                                                    <td>
                                                      <a href="{{url('/admincp/deletephotogallery')}}/{{$photo->id}}"
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
