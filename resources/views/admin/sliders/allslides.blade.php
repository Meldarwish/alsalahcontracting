@extends('admin.layouts.cms')
@php $trans = new App\Http\Helpers\Cmstranslate; @endphp
@section('content')
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">{{$trans->cmslang('allsliders')}}</span>
                                        </div>
                                        <div class="tools"> </div>
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>{{$trans->cmslang('slider_title_1')}}</th>
                                                    <th>{{$trans->cmslang('slider_title_2')}}</th>
                                                    <th>{{$trans->cmslang('language')}}</th>
                                                    <th>{{$trans->cmslang('url')}}</th>
                                                    <th>{{$trans->cmslang('photo')}}</th>
                                                    <th>{{$trans->cmslang('active_stuts')}}</th>
                                                    <th>{{$trans->cmslang('edit')}}</th>
                                                    <th>{{$trans->cmslang('delete')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($sliders))
                                            	@foreach($sliders as $slide )
                                                <tr>
                                                    <td>{{$slide->text_1}}</td>
                                                    <td>{{$slide->text_2}}</td>
                                                    <td>{{$trans::getlangname($slide->langkey)}}</td>
                                                    <td> <a href="{{$slide->url}}" target="blank" class="btn btn-icon dark">
                                                            <i class="fa fa-globe"></i></a></td>
                                                    <td><a href="{{url('/')}}/uploads/sliders/{{$slide->photo}}" target="blank">
                                                    <img  src="{{url('/')}}/uploads/sliders/{{$slide->photo}}" id="table_immg"></a> </td>
                                                    <td>
                                                    @if($slide->stuts === '1')
														<a href="{{url('/admincp/slidestuts')}}/{{$slide->id}}/0" title="dicactive item" class="btn btn-icon green">
                                                          {{$trans->cmslang('yes')}} <i class="fa fa-check-square"></i>
                                                        </a>
                                                    @endif

                                                    @if($slide->stuts === '0')
														<a href="{{url('/admincp/slidestuts')}}/{{$slide->id}}/1" title="active item" class="btn btn-icon dark">
                                                           {{$trans->cmslang('no')}} <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    @endif

                                                    </td>
                                                    <td>
												      <a title="Edit Slider" href="{{url('/admincp/editslier')}}/{{$slide->id}}" class="btn btn-sm green-meadow"> {{$trans::cmslang('edit')}} <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td>
                                                    <td>
												      <a href="{{url('/admincp/deleteslier')}}/{{$slide->id}}"
												       onclick="return confirm('Are you sure?')" class="btn btn-sm red"> {{$trans->cmslang('delete')}} <i class="fa fa-trash"></i>
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
