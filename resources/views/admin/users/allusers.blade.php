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
                                                    <th>{{$trans::cmslang('username')}}</th>
                                                    <th>{{$trans::cmslang('user_mail')}}</th>
                                                    <th>{{$trans::cmslang('edit')}}</th>
                                                    <th>{{$trans::cmslang('delete')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($users))
                                            	@foreach($users as $user )
                                                <tr>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    @if($user->level ==='fulladmin')
                                                    <td></td><td></td>
                                                    @else
                                                        <td>
                                                          <a title="{{$trans::cmslang('edit')}}" href="{{url('/admincp/editusers')}}/{{$user->id}}" class="btn btn-sm green-meadow"> {{$trans::cmslang('edit')}} <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                          <a href="{{url('/admincp/deleteusers')}}/{{$user->id}}"
                                                           onclick="return confirm('{{$trans::cmslang('confirmdelete')}}')" class="btn btn-sm red"> {{$trans::cmslang('delete')}} <i class="fa fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    @endif
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
