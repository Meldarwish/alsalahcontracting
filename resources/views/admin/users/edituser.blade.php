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
                                       <form  action="{{url('admincp/updateusers')}}/{{$row->id}}" method="post" method="post" enctype="multipart/form-data" role="form">
                                            <div class="form-body">
                                               {{ csrf_field() }}
                                               <div class="col-sm-12">

                                                    <div class="form-group">
                                                        <label>{{$trans::cmslang('username')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-user"></i>
                                                            </span>
                                                            <input type="text" value="{{$row->name}}"  name="username" required="" class="form-control" placeholder="{{$trans::cmslang('username')}}"> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> {{$trans::cmslang('user_mail')}}  </label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-envelope"></i>
                                                            </span>
                                                            <input type="text" value="{{$row->email}}"   name="email" required="" class="form-control" placeholder="{{$trans::cmslang('user_mail')}}"> </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> {{$trans::cmslang('user_password')}}</label>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-key"></i>
                                                            </span>
                                                            <input type="text"  name="userpassword" class="form-control" placeholder="{{$trans::cmslang('user_password')}}"> </div>
                                                    </div>
                                                    <h3 align="center">{{$trans::cmslang('user_rolls')}}</h3>

                                                <div class="form-group">
                                                    <label>{{$trans::cmslang('user_choose_rolls')}}</label>

                                                    <div class="mt-checkbox-inline">
                                                     @if( count($rolls))
                                                     @php  $r_num=1; @endphp
                                                     @foreach($rolls as $roll)
                                                     @php
                                                        $GRT_ROLL  =  \App\Models\CmsModels\UserAccessRollsModel::where('roll_id', '=',$roll->id)->where('user_id', '=', $row->id)->first();
                                                    @endphp
                                                        <label class="mt-checkbox">
                                                            <input id="user_roll_{{$r_num}}" name="userroll[]" value="{{$roll->id}}" @if($GRT_ROLL) checked="" @endif   type="checkbox"> {{$trans::cmslang($roll->name)}}</h3>

                                                            <span></span>
                                                        </label>
                                                     @php $r_num++; @endphp
                                                @endforeach
                                            @endif
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
