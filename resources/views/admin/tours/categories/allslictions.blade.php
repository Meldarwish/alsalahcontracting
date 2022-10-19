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
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="sample_2">
                                            <thead>
                                                <tr>
                                                    <th>Category Name</th> 
                                                    <th>photo</th>
                                                    <th>active stuts</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($sections))
                                            	@foreach($sections as $section )
                                                <tr>
                                                    <td>{{$section->title}}</td> 
                                                    <td><a href="{{url('/')}}/uploads/tours/category/{{$section->photo}}" target="blank">
                                                    <img  src="{{url('/')}}/uploads/tours/category/{{$section->photo}}" id="table_immg"></a> </td>
                                                    <td>
                                                    @if($section->stuts === '1') 
														<a href="{{url('/admincp/tourcategorystuts')}}/{{$section->id}}/0" title="dicactive item" class="btn btn-icon green">
                                                          Yes <i class="fa fa-check-square"></i>
                                                        </a>
                                                    @endif

                                                    @if($section->stuts === '0') 
														<a href="{{url('/admincp/tourcategorystuts')}}/{{$section->id}}/1" title="active item" class="btn btn-icon dark">
                                                          No <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    @endif                                                    

                                                    </td>
                                                    <td>
												      <a title="Edit Slider" href="{{url('/admincp/edittourcategory')}}/{{$section->id}}" class="btn btn-sm green-meadow"> Edit <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td> 
                                                    <td>
												      <a href="{{url('/admincp/deletetourcategory')}}/{{$section->id}}" 
												       onclick="return confirm('Are you sure?')" class="btn btn-sm red"> Delete <i class="fa fa-trash"></i>
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