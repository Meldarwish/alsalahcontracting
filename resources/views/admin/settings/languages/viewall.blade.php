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
                                                    <th>lang name </th> 
                                                    <th>lang code </th> 
                                                    <th>is main lang</th> 
                                                    <th>Translation</th> 
                                                    <th>Add Key</th> 
                                                    <th>photo</th>
                                                    <th>active stuts</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if( count($languages))
                                            	@foreach($languages as $lang )
                                                <tr>
                                                    <td>{{$lang->name}}</td>
                                                    <td>{{$lang->code}}</td>  
                                                    <td>                                                  
                                                     @if($lang->is_main !='yes')
                                                      <a href="{{url('/admincp/setadminmainlang')}}/{{$lang->id}}" class="btn btn-sm btn-block purple">
                                                        <i class="fa fa-flag"></i>
                                                        <i class="fa fa-hand-o-up"></i>
                                                     </a>                                                        
                                                    @endif    
                                                    </td>
                                                    <td>                                                  
                                                     @if($lang->is_main ==='yes')
                                                      <a href="{{url('/admincp/addlangkey')}}/{{$lang->code}}" class="btn btn-sm blue"><i class="fa fa-key"></i>
                                                        </a>
                                                    @endif    
                                                    </td> 
                                                    <td>
                                                      <a title="Edit Slider" href="{{url('/admincp/translationadminlanguage')}}/{{$lang->code}}" class="btn btn-sm blue"> Translation lang <i class="fa fa-language"></i>
                                                        </a>
                                                    </td>                                                     
                                                    <td>
                                                    @if($lang->photo != NULL)
                                                    <img  src="{{url('/')}}/uploads/settings/languages/{{$lang->photo}}"> </td>
                                                    @endif
                                                    <td>
                                                    @if($lang->stuts === 1) 
														<a href="{{url('/admincp/adminlangstuts')}}/{{$lang->id}}/0" title="dicactive item" class="btn btn-icon green">
                                                          Yes <i class="fa fa-check-square"></i>
                                                        </a>
                                                    @endif

                                                    @if($lang->stuts === 0) 
														<a href="{{url('/admincp/adminlangstuts')}}/{{$lang->id}}/1" title="active item" class="btn btn-icon dark">
                                                          No <i class="fa fa-times-circle"></i>
                                                        </a>
                                                    @endif                                                    

                                                    </td>
                                                    <td>
												      <a title="Edit Slider" href="{{url('/admincp/editadminlanguage')}}/{{$lang->id}}" class="btn btn-sm green-meadow"> Edit <i class="fa fa-edit"></i>
                                                        </a>
                                                    </td> 
                                                    <td>
												      <a href="{{url('/admincp/deleteadminlang')}}/{{$lang->id}}" 
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