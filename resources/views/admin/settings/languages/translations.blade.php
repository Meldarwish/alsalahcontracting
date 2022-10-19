@extends('admin.layouts.cms')

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
                            <div class="portlet-body form">
                                        <form  action="{{url('admincp/updatetranslations')}}/{{$lang_code}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                            @if( count($language))
                                                @foreach($language as $lang )
                                                <div class="col-sm-3">
                                                @php
                                                    $main_lang = App\Models\CmsModels\CMSTranslation::getmainlang($lang->langkey);
                                                @endphp
                                                <div class="form-group">
                                                    <label> main language</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text"  readonly=""  value="{{$main_lang}}" required="" class="form-control disable"> </div>
                                                </div>
                                                </div>

                                               <div class="col-sm-9">
                                                <div class="form-group">
                                                    <label> text translation </label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-text-width"></i>
                                                        </span>
                                                        <input type="text" name="{{$lang->langkey}}"  value=" {{$lang->text}}" class="form-control"> </div>
                                                </div>
                                                </div>
                                              @endforeach
                                            @endif
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">Submit</button>
                                                <button type="reset" class="btn red">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
