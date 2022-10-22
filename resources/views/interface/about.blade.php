@extends('layouts.layout')
@section('content')
  <!-- INNER PAGE BANNER -->
  <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset('interface/images/banner/3.jpg')}});">
    <div class="overlay-main site-bg-secondry opacity-09"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="site-text-primary">About Us</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->                            
            
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>About-us</li>
                    </ul>
                </div>
            
            <!-- BREADCRUMB ROW END -->                        
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->


 <!-- ABOUT SECTION START -->
 <div class="section-full welcome-section-outer">
    <div class="welcome-section-top bg-white p-t80 p-b50">
        <div class="container">
            <div class="row d-flex justify-content-center">
            
                <div class="col-lg-6 col-md-12 m-b30">
                    <div class="welcom-to-section">
                        <!-- TITLE START-->
                        <div class="left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>Welcome to industro</div>
                                <div  class="sep-leaf-right"></div>
                            </div>
                        </div>
                        <h2>We Are Here to Increase Your Knowledge With Experience</h2>
                        <!-- TITLE END-->
                        <ul class="site-list-style-one">
                            <li>Quality Control System , 100% Satisfaction Guarantee</li>
                            <li>Unrivalled Workmanship, Professional and Qualified</li>
                            <li>Environmental Sensitivity, Personalised Solutions</li>
                        </ul>
                        
                        <p>Progressively maintain extensive infomediaries via extensible nich. Capitalize on low hanging fruit. a ballpark value added is activity to beta test. Override the digital divide with additional click throughs from fruit to identify a ballpark value added.</p> 
                        
                         
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-12 m-b30">
                    <div class="img-colarge2">
                        <div class="colarge-2 slide-right"><img src="{{asset('interface/images/banner/3.jpg')}}" alt=""></div>
                        <div class="colarge-2-1"><img src="{{asset('interface/images/colarge/s1.jpg')}}" alt=""></div>
                        <div class="since-year-outer2"><div class="since-year2"><span>Since</span><strong>2015</strong></div></div>
                    </div>
                </div>                              

            </div>
        </div> 
    </div>
</div>   
<!-- ABOUT SECTION  SECTION END --> 

   <!-- ALL SERVICES START -->
   <div class="section-full p-t80 p-b40 bg-no-repeat bg-bottom-right bg-cover" style="background-image:url({{asset('interface/images/background/bg7.jpg')}});opacity: 0.8;
   filter: alpha(opacity=80);">
    <div class="container">
        <div class="section-content">
        
        <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer text-center">
                <div class="wt-small-separator site-text-primary">
                    <div class="sep-leaf-left"></div>
                    <div>The Best Industry services</div>
                    <div class="sep-leaf-right"></div>
                </div>
                <h2>High Performance Services For Multiple Insdustries And Technologies!</h2>
            </div>
        <!-- TITLE END-->
         
            <div class="row d-flex justify-content-center">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 m-b50">
                        <div class="service-border-box">
                            <div class="wt-box service-box-1 bg-white">
                                
                                <div class="service-box-title title-style-2 site-text-secondry">
                                    <span  class="s-title-one">{{$service->title}}</span>
                                    
                                </div>
                                <div class="service-box-content">
                                    <p>{!!$service->content!!}</p>
                                </div>
                                
                                <div class="wt-icon-box-wraper">
                                    <div class="wt-icon-box-md site-bg-primary">
                                        <span class="icon-cell text-white"><img src="{{asset('uploads/service/'.$service->photo)}}"></i></span>
                                    </div>
                                    
                                </div>                                            
                                                                            
                            </div>
                        </div>                     
                    </div>
                    @endforeach
                                         
                                                                    
            </div>
        </div>
    </div>
</div>   
<!-- ALL SERVICES SECTION END --> 
   
@endsection