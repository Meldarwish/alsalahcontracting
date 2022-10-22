@extends('layouts.layout')
@section('content')
   <!-- SLIDER START --> 
   <div class="slider-outer">
               
    <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
        <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
            <ul>	
                @foreach ($sliders as $slider)
                <!-- SLIDE 1 -->
                <li data-index="rs-901" 
                data-transition="fade" 
                data-slotamount="default" 
                data-hideafterloop="0" 
                data-hideslideonmobile="off"  
                data-easein="default" 
                data-easeout="default" 
                data-masterspeed="default"  
                data-thumb="{{$slider->photo}}"  
                data-rotate="0"  
                data-fstransition="fade" 
                data-fsmasterspeed="300" 
                data-fsslotamount="7" 
                data-saveperformance="off"  
                data-title="Slide Title" 
                data-param1="Additional Text" 
                data-param2="" 
                data-param3="" 
                data-param4="" 
                data-param5="" 
                data-param6="" 
                data-param7="" 
                data-param8="" 
                data-param9="" 
                data-param10="" 
                data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('uploads/sliders/'.$slider->photo)}}"  alt=""  data-lazyload="{{asset('uploads/sliders/'.$slider->photo)}}" data-bgposition="center center" 
                    data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    
                    <!-- LAYER NR. 1 [ for overlay ] -->
                    <div class="tp-caption tp-shape tp-shapewrapper " 
                    id="slide-901-layer-0" 
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                    data-width="full"
                    data-height="full"
                    data-whitespace="nowrap"
                    data-type="shape" 
                    data-basealign="slide" 
                    data-responsive_offset="off" 
                    data-responsive="off"
                    data-frames='[
                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
                    </div>
                   
                    <!-- LAYER NR. 2 [ Black Box ] -->
                    <div class="tp-caption   tp-resizeme site-text-primary rev-title-left-border" 
                    id="slide-901-layer-2" 
                    data-x="['left','left','left','left']" data-hoffset="['34','34','34','30']" 
                    data-y="['top','top','top','top']" data-voffset="['160','160','160','160']"  
                    data-fontsize="['48','48','48','34']"
                    data-lineheight="['48','48','48','48']"
                    data-width="['700','700','96%','96%']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                
                    data-type="text" 
                    data-responsive_offset="on" 
                    data-frames='[
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[10,10,10,4]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[10,10,10,4]"
                    data-paddingleft="[30,30,30,20]"
                
                    style="z-index: 13; 
                    white-space: normal; 
                    font-weight: 300;
                    font-family: 'Teko', sans-serif;">High Performance</div>
                                                
                    <!-- LAYER NR. 3 [ for title ] -->
                    <div class="tp-caption   tp-resizeme" 
                    id="slide-901-layer-3" 
                    data-x="['left','left','left','left']" data-hoffset="[30','30','30','30']" 
                    data-y="['top','top','top','top']" data-voffset="['260','250','260','230']"  
                    data-fontsize="['120','72','72','38']"
                    data-lineheight="['100','66','48','38']"
                    data-width="['700','700','96%','96%']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                
                    data-type="text" 
                    data-responsive_offset="on" 
                    data-frames='[
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[5,5,5,5]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                
                    style="z-index: 13; 
                    white-space: normal; 
                    font-weight: 300;
                    color:#fff;
                    border-width:0px; font-family: 'Teko', sans-serif; text-transform:uppercase;">Services For Industries</div>
                
                    <!-- LAYER NR. 4 [ for paragraph] -->
                    <div class="tp-caption  tp-resizeme" 
                    id="slide-901-layer-4" 
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['150','10','0','-40']"  
                    data-fontsize="['20','20','20','16']"
                    data-lineheight="['30','30','30','22']"
                    data-width="['600','600','90%','90%']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                
                    data-type="text" 
                    data-responsive_offset="on"
                    data-frames='[
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                
                    style="z-index: 13; 
                    font-weight: 500; 
                    color:#fff;
                    border-width:0px;font-family: 'Poppins', sans-serif;">
                    In the world of renewable energy we cast quite a shadow. innovative products and services...
                    </div>
                
                    <!-- LAYER NR. 5 [ for see all service botton ] -->
                    <div class="tp-caption tp-resizeme" 	
                    id="slide-901-layer-5"						
                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']" 
                    data-y="['middle','middle','middle','middle']" data-voffset="['250','100','100','40']"  
                    data-lineheight="['none','none','none','none']"
                    data-width="['300','300','300','300']"
                    data-height="['none','none','none','none']"
                    data-whitespace="['normal','normal','normal','normal']"
                    
                    data-type="text" 
                    data-responsive_offset="on"
                    data-frames='[ 
                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                    ]'
                    data-textAlign="['left','left','left','left']"
                    data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    
                    style="z-index:13; text-transform:uppercase;">
                    <a href="contact-1.html" class="site-button site-btn-effect">Book Now</a>
                    </div>

                </li>
                
                @endforeach                                                
                 
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
        </div>
    </div>

</div>
<!-- SLIDER END -->  

  <!-- ABOUT SECTION START -->
  <div class="section-full welcome-section-outer">
    <div class="welcome-section-top bg-white p-tb80">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-6 col-md-12">
                    <div class="img-colarge">
                        <div class="colarge-1"><img src="{{asset('interface/images/colarge/s1.jpg')}}" alt="" class="slide-righ"></div>
                        <div class="since-year-outer"><div class="since-year"><span>Since</span><strong>2015</strong></div></div>
                    </div>
                </div>  
                                      
                <div class="col-lg-6 col-md-12">
                    <div class="welcom-to-section">
                        <!-- TITLE START-->
                        <div class="left wt-small-separator-outer">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>Welcome to Al salah contracting</div>
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
                        
                        <div class="welcom-to-section-bottom d-flex justify-content-between">
                            <div class="welcom-btn-position"><a href="{{route('about')}}" class="site-button-secondry site-btn-effect">More About</a></div>
                            {{-- <div class="welcom-sign-pic"><img src="images/sign.png" alt=""></div>
                            <div class="welcom-sign-info"><strong>Brayden</strong><span>( CEO & Founder )</span></div> --}}
                        </div>   
                    </div>
                </div>

            </div>
        </div> 
    </div>
</div>   
<!-- ABOUT SECTION  SECTION END -->  

     <!-- SERVICES SECTION START -->
     <div class="section-full p-t80 p-b70 overlay-wraper bg-no-repeat bg-bottom-left bg-cover services-main-section" style="background-image:url({{asset('interface/images/background/bg2.jpg')}})">
        <div class="overlay-main site-bg-secondry opacity-08"></div>
                               
        <div class="section-content services-section-content">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="services-section-content-left">
                        <!-- TITLE START-->
                        <div class="left wt-small-separator-outer text-white">
                            <div class="wt-small-separator site-text-primary">
                                <div  class="sep-leaf-left"></div>
                                <div>The Best Industry services</div>
                                <div  class="sep-leaf-right"></div>
                            </div>
                            <h2>High Performance Services For Multiple Insdustries And Technologies!</h2>
                            <p>Progressively maintain extensive infomediaries via extensible niches.
                                 Capitalize on low hanging fruit to identify a ballpark value added is activity to beta test.
                                 Override the igital divide with additional click throughs from fruit to identify a ballpark value added.
                            </p>
                            <a href="contact-1.html" class="site-button site-btn-effect">Contact Us</a>
                        </div>
                        <!-- TITLE END-->
                    </div>                        
                </div> 
               
                <div class="col-xl-6 col-lg-12 col-md-12">
                    <div class="services-section-content-right">
                        <div class="owl-carousel services-slider owl-btn-vertical-center">
                            @foreach($services as $service)
                            <div class="item">
                              
                                <div class="wt-box service-box-1 bg-white">
                                    
                                    <div class="service-box-title title-style-2 site-text-secondry">
                                        <span  class="s-title-one">{{$service->title}} </span>
                   
                                    </div>
                                    <div class="service-box-content">
                                        <p>{!!$service->content!!}</p>
                                        {{-- <a href="s-oilgas.html" class="site-button-link">Read More</a> --}}
                                    </div>
                                    
                                    <div class="wt-icon-box-wraper">
                                        <div class="wt-icon-box-md site-bg-primary">
                                            <span class="icon-cell text-white"><i class="flaticon-industry"></i></span>
                                        </div>
                                        {{-- <div class="wt-icon-number"><span>01</span></div> --}}
                                    </div>                                            
                                                                                
                                </div>
                                
                            </div>
                            @endforeach
                                                         
                        </div>
                    </div>
                </div>
               
            </div>
        </div>                                        

    </div>   
    <!-- SERVICES SECTION END -->  
    
     <!-- WHAT WE DO SECTION START -->
    <div class="section-full p-t80 p-b70 bg-gray what-we-do-section">
        
        <div class="container">                      
            <div class="section-content what-we-do-content">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="whatWedo-media-section">
                            <div class="wt-media">
                                <img src="{{asset('interface/images/what-we/pic2.jpg')}}" alt="">
                            </div>
                            <div class="whatWedo-media-content text-white">
                                <div class="whatWedo-media-inner">
                                    <h3>Team Working Dedicatedly</h3>
                                    <p>We have 26+ years of experience with providing wide area of specialty services works listed below</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                                       
                    <div class="col-lg-6 col-md-12">
                        <div class="whatWedo-info-section">
                            <!-- TITLE START-->
                            <div class="left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div  class="sep-leaf-left"></div>
                                    <div>What We do</div>
                                    <div  class="sep-leaf-right"></div>
                                </div>
                                <h2>Providing Full Range of High Services Solution Worldwide</h2>
                                <p>Progressively maintain extensive infomediaries via extensible niches. Capitalize on low hanging fruit to identify a ballpark value added is activity to beta test. Override the igital divide</p>
                                
                            </div>
                            <!-- TITLE END-->
                            <div class="wt-icon-card-outer">
                            <div class="wt-icon-card bg-white shadow">
                                <div class="wt-card-header"><i class="flaticon-robotic-arm site-text-primary"></i><span class="title-style-2 site-text-secondry">A Full Services</span></div>
                                <div class="wt-card-content"><p>We are Providing different services in this sector to wide area of world</p></div>
                            </div>
                            
                            <div class="wt-icon-card bg-white shadow">
                                <div class="wt-card-header"><i class="flaticon-repair site-text-primary"></i><span class="title-style-2 site-text-secondry">All Maintenance</span></div>
                                <div class="wt-card-content"><p>We are Prous to Protect your organization with our award-winning products</p></div>
                            </div>
                            </div>
                                                                
                        </div>                        
                    </div> 
                

                </div>
            </div>                                        
        </div>
        <div class="hilite-large-title title-style-2">
            <span>What we do</span>
        </div>
        
    </div>   
    <!-- WHAT WE DO SECTION END -->             
     <!-- VIDEO SECTION START -->
     <div class="section-full video-counter-section p-t80 bg-white">
                                       
        <div class="video-counter-bg-white"> 
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer text-center">
                        <div class="wt-small-separator site-text-primary">
                            <div  class="sep-leaf-left"></div>
                            <div>All Solutions</div>
                            <div  class="sep-leaf-right"></div>
                        </div>
                        <h2>Get A Solution For All Industries</h2>
                    </div>
                    <!-- TITLE END--> 
                </div>
         </div>
         
        <div class="video-counter-bg-image overlay-wraper bg-cover bg-no-repeat" style="background-image:url({{asset('interface/images/background/bg2.jpg')}});">
            <div class="overlay-main site-bg-secondry opacity-09"></div>

                {{-- <div class="video-section-outer mfp-gallery">
                    <div class="video-section">
                         <a href="https://www.youtube.com/watch?v=fgExvIUYg5w" class="mfp-video play-now">
                            <i class="icon fa fa-play"></i>
                            <span class="ripple"></span>
                        </a>                                              
                    </div>	    
                </div> --}}
                
                <div class="container">
                    <div class="counter-section-outer-top">
                        <div class="counter-outer">                            
                            
                            <div class="row justify-content-center">
                                    
                                <div class="col-lg-4 col-md-4 m-b30 ">
                                    <div class="wt-icon-box-wraper center">
                                        <h2 class="counter site-text-primary">35</h2>
                                        <span class="site-text-white title-style-2">Projects Completed</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 m-b30">
                                    <div class="wt-icon-box-wraper center">
                                        <h2 class="counter site-text-primary">1435</h2>
                                        <span class="site-text-white title-style-2">Work Employed</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-4 m-b30">
                                    <div class="wt-icon-box-wraper center">
                                        <h2 class="counter site-text-primary" >750</h2>
                                        <span class="site-text-white title-style-2">Work facilities</span>
                                    </div>
                                </div>

                            </div>                            
                        
                        </div>   
                    </div>
                    {{-- <div class="counter-section-outer-bottom">
               
                            
                            <div class="row justify-content-center">
                                    
                                <div class="col-lg-5 col-md-6 m-b30 ">
                                    <div class="video-section-info site-bg-primary site-text-white">
                                        <h3 class="wt-tilte site-text-white">The Best Solution For all industries</h3>
                                        <p>Seving an impressive list of long-term clients with experience and expertise in industries.</p>
                                        <a href="s-mechanical.html" class="site-button-link">Read More</a>
                                    </div>
                                </div>
                                
                                {{-- <div class="col-lg-7 col-md-6 m-b30">
                                    <div class="video-section-blockquote">
                                        <i class="fa fa-quote-left"></i>
                                        <span class="q-author-detail site-text-white title-style-2">Many of Our SELF registered employees are requested an main preferred temporary staff when all service</span>
                                        <div class="q-author-name site-text-primary title-style-2">Farnandoz Biki, CEO</div>
                                    </div>
                                </div> --}}
                                
                                

                            </div>                            

                    </div>                                 
                </div>

        </div>

</div>   
<!-- VIDEO SECTION  SECTION END -->    
 <!-- TITLE START-->
 <div class="section-head center wt-small-separator-outer text-center">
    <div class="wt-small-separator site-text-primary">
        <div  class="sep-leaf-left"></div>
        <div>Our Clients</div>
        <div  class="sep-leaf-right"></div>
    </div>
   
</div>
<!-- TITLE END--> 
<!-- CLIENT LOGO SECTION START -->
<div class="section-full bg-gray">
    <div class="container">
        <div class="section-content">
        
            <!-- TESTIMONIAL 4 START ON BACKGROUND -->   
            <div class="section-content">
                 <div class="section-content p-tb30 owl-btn-vertical-center">
                    <div class="owl-carousel home-client-carousel-2">
                    
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w1.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w2.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w3.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w4.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w5.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo client-logo-media">
                                <a href="javascript:void(0);"><img src="{{asset('interface/images/client-logo/w6.png')}}" alt=""></a></div>
                            </div>
                        </div>
                        
                                                                                           
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CLIENT LOGO  SECTION End -->  

@endsection