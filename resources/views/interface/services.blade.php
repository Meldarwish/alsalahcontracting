@extends('layouts.layout')
@section('content')

 <!-- INNER PAGE BANNER -->
 <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{asset('interface/images/banner/3.jpg')}});">
    <div class="overlay-main site-bg-secondry opacity-07"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="site-text-primary">Services</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->                            
            
                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            
            <!-- BREADCRUMB ROW END -->                        
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->


 <!-- GALLERY SECTION START -->
 <div class="section-full p-t80 p-b80 bg-gray">
                                       
    <div class="section-content container-fluid"> 
    
        <div class="owl-carousel gallery-slider2 owl-btn-vertical-center mfp-gallery ">
            @foreach($services as $service)
            <div class="item">
                <a href="{{asset('uploads/service/'.$service->photo)}}" class="mfp-link">
                <div class="project-img-effect-1 mfp-link">
                      <img  style="height: 300px" src="{{asset('uploads/service/'.$service->photo)}}" alt="" />
                      
                    <div class="wt-info" >
                        <h3 class="wt-tilte m-b10 m-t0">{{$service->title}}</h3>
                        <p >{!!$service->content!!}</p>
                        {{-- <a href="project-detail.html" class="site-button-link">Read More</a> --}}
                        
                    </div>
                   
                </div>
                </a>
            </div>
            
           @endforeach
            
        </div>

    </div>                                        

</div>   
<!-- GALLERY SECTION END -->  

@endsection