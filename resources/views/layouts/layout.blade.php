@php
   $code_lang  = app()->getLocale();

   if($code_lang == 'ar'){
          $dir = 'rtl';
   }else{
       $dir ='';
    }
         //   echo print_r( $live_lang); exit();
@endphp
<html dir="{{$dir}}">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('interface/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('interface/images/favicon.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>Alsalah contracting</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/fontawesome/css/font-awesome.min.css') }}" />

    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    @if(app()->getLocale()=='ar')
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/style3.css') }}">
    @else
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/style.css') }}">
    @endif
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/flaticon.min.css') }}">

    <!-- IMAGE POPUP -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/lc_lightbox.css') }}" />

    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('interface/css/skin/skin-1.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('interface/css/switcher.css') }}">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('interface/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('interface/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="page-wraper">

        <header class="site-header header-style-1 mobile-sider-drawer-menu">

            <!-- SITE Search -->
            {{-- <div id="search-toggle-block">
                <div id="search"> 
                    <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                        <div class="input-group">
                            <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                            <span class="input-group-append"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                        </div>   
                    </form>
                </div>
            </div>     --}}

            <div class="top-bar site-bg-secondry">
                <div class="container">

                    <div class="d-flex justify-content-between">
                        <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                            <ul class="wt-topbar-info e-p-bx text-white">
                                <li><span> Monday - Saturday</span><span>8AM -7PM</span></li>
                                <li><i class="fa fa-phone"></i>{{ config('site.site_phone') }}</li>
                                <li><i class="fa fa-envelope"></i>{{ config('site.site_email_1') }}</li>
                            </ul>
                        </div>

                        {{-- <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                                <div class="header-search">
                                    <a href="javascript:;" class="header-search-icon"><i class="fa fa-search"></i></a>
                                </div>                          
                            </div> --}}
                    </div>

                </div>
            </div>


            <div class="container header-middle clearfix">
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('interface/images/My-logo2.png') }}" alt="" />
                        </a>
                    </div>
                </div>

                <div class="header-info">
                    {{-- <ul>
                        <li>
                            <div class="icon-md">
                                <span class="icon-cell"><i class="flaticon-trophy"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>The Best Industrial</strong>
                                <span>Solution Provider</span>
                            </div>
                        </li>
                        <li>

                            <div class="icon-md">
                                <span class="icon-cell"><i class="flaticon-stamp"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Certified Company</strong>
                                <span>ISO 9001-2020</span>
                            </div>

                        </li>
                    </ul> --}}
                </div>

            </div>

            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
                <div class="main-bar">
                    <div class="container clearfix">
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>

                        <!-- MAIN Vav -->
                        <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                            <ul class=" nav navbar-nav">
                                <li><a href="{{ route('index') }}">{{__('layout.layout.home')}}</a>
                                    {{-- <ul class="sub-menu">
                                                    <li><a href="index.html">Home Industries</a></li>                                        
                                                    <li><a href="index-2.html">Home Factory</a></li>
                                                    <li><a href="index-3.html">Home Construction</a></li>
                                                    <li><a href="index-4.html">Home Transport</a></li>
                                                    <li><a href="index-5.html">Home Agriculture</a></li>
                                                    <li><a href="index-6.html">Home Solar Energy</a></li>
                                                    <li><a href="index-7.html">Home Oil/Gas Plant</a></li>
                                                    <li><a href="index-8.html">Home Page 8</a></li>
                                                    <li><a href="index-9.html">Home Industries 9</a></li>
                                                    <li><a href="index-10.html">Home Factory 10</a></li>
                                                    <li><a href="index-11.html">Home Construction 11 <span class="new_blink">New</span></a></li>
                                                    <li><a href="index-12.html">Air Conditioning Repair 12 <span class="new_blink">New</span></a></li>                                            
                                        </ul>                                  --}}
                                </li>

                                <li><a href="{{ route('about') }}">{{__('layout.layout.about')}}</a>
                                    {{-- <ul class="sub-menu">
                                            <li><a href="about-1.html">About 1</a></li>                                        
                                            <li><a href="about-2.html">About 2</a></li>
                                        </ul>                                 --}}
                                </li>
                                {{-- <li><a href="javascript:;">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services-1.html">Services one</a></li>                                        
                                            <li><a href="services-2.html">Services Two</a></li>
                                            <li><a href="s-agricultural.html">Agricultural Automation</a></li>
                                            <li><a href="s-automotive.html">Automotive Manufacturing</a></li>
                                            <li><a href="s-chemical.html">Chemical Research</a></li>
                                            <li><a href="s-civil.html">Civil Engineering</a></li>
                                            <li><a href="s-mechanical.html">Mechanical Engineering</a></li>
                                            <li><a href="s-oilgas.html">Oil & Gas Engineering</a></li>
                                            <li><a href="s-power-energy.html">Power & Energy Sector</a></li>                                              
                                                                                       
                                        </ul>                                
                                    </li> --}}
                                <li><a href="{{ route('services') }}">{{__('layout.layout.services')}}</a>
                                    {{-- <ul class="sub-menu">
                                            <li><a href="project-grid.html">Project Grid</a></li>                                        
                                            <li><a href="project-masonry.html">Project Masonry</a></li>
                                            <li><a href="project-carousel.html">Project Carousel</a></li>
                                            <li><a href="project-detail.html">Project Detail</a>
                                        </ul>                                 --}}
                                </li>
                                {{-- <li><a href="javascript:;">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="product.html">Shop</a></li>                                        
                                            <li><a href="product-detail.html">Shop Detail</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkut</a></li>
                                            <li><a href="wish-list.html">Wishlist</a></li>                                            
                                        </ul>                                
                                   </li>                                    --}}
                                {{-- <li><a href="{{route('blog')}}">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>                                        
                                            <li><a href="blog-list-sidebar.html">Blog List</a></li>
                                            <li><a href="blog-post-right-sidebar.html">Blog Post</a></li>
                                        </ul>                                
                                    </li>                                                                 --}}
                                {{-- <li>
                                        <a href="javascript:;">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="our-prices.html">Pricing Plan</a></li>
                                            <li><a href="icon-font.html">Icon Font</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>                                            
                                            <li><a href="Faq.html">FAQ</a></li>
                                            <li><a href="error-403.html">Error 403</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                            <li><a href="error-405.html">Error 405</a></li>                                                 
                                        </ul>
                                    </li> --}}
                                <li><a href="{{ route('gallery') }}">{{__('layout.layout.gallery')}}</a></li>
                                <li><a href="{{ route('contact') }}">{{__('layout.layout.contact')}}</a></li>
                                <li class="">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        {{-- <i class="fa fa-map-marker"></i> --}}
                                        <img  class="" src="{{asset('interface/images/earth.png')}}" style="width: 15px" aria-hidden="true">
                                    </a>
                                    
                                    <ul class="sub-menu">
                                        @foreach (Config('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                <li>
                                                    <a href="{{ route('lang.switch', $lang) }}">{{ $language }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        

                        {{-- <div class="header-nav-request">
                            	<a href="#" class="contact-slide-show">Request a Quote <i class="fa fa-angle-right"></i></a>
                            </div> --}}
                    </div>
                </div>
            </div>



        </header>
        <!-- HEADER END -->
        @yield('content')
        <!-- FOOTER START -->
        <footer class="site-footer footer-large footer-dark text-white footer-style1">


            <!-- FOOTER BLOCKES START -->
            <div class="footer-top bg-no-repeat bg-bottom-right"
                style="background-image:url({{ asset('interface/images/background/footer-bg.png') }})">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="footer-h-left">
                                <div class="widget widget_about">
                                    <div class="logo-footer clearfix">
                                        <a href="{{ route('index') }}"><img
                                                src="{{ asset('interface/images/My-logo2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <p>Our Co. tends to produce aluminum profiles based on the highest level of quality
                                        and the application of highest systems European quality standards. Aim of
                                        innovation, excellence and integrity, and work to deliver our customers the best
                                        quality and the highest rate of satisfaction.</p>
                                </div>
                                <div class="widget recent-posts-entry">
                                    <ul class="widget_address">
                                        <li><i class="fa fa-map-marker"></i>{{ config('site.site_address') }}</li>
                                        <li><i class="fa fa-envelope"></i>{{ config('site.site_email_1') }}</li>
                                        <li> <i class="fa fa-phone"></i>{{ config('site.site_phone') }}</li>
                                    </ul>
                                </div>
                                <ul class="social-icons  wt-social-links footer-social-icon">
                                    <li><a href="javascript:void(0);" class="fa fa-envelope"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="row footer-h-right">
                                <div class="col-lg-5 col-md-4">
                                    <div class="widget widget_services">
                                        <h3 class="widget-title">Useful links</h3>
                                        <ul>
                                            <li><a href="about-1.html">About</a></li>
                                            <li><a href="our-prices.html">Pricing Plan </a></li>
                                            <li><a href="Faq.html">FAQ</a></li>
                                            <li><a href="team-single.html">Our Team </a></li>
                                            <li><a href="services-1.html">Services </a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8">
                                    <div class="widget widget_services">
                                        <h3 class="widget-title"></h3>
                                        </h3>
                                        {{-- <ul>
                                        <li><a href="s-oilgas.html">Oil & Gas Factory</a><a href="s-chemical.html">Chemical Research</a></li>
                                        <li><a href="s-chemical.html">Chemical Research</a><a href="s-agricultural.html">Agricultural</a></li>
                                        <li><a href="s-mechanical.html">Mechanical</a><a href="s-agricultural.html">Agricultural </a></li>
                                        <li><a href="s-civil.html">Manufacturing</a><a href="s-civil.html">Civil Engineering</a></li>
                                        <li><a href="s-automotive.html">Mechanical </a><a href="s-automotive.html">Auto Motive  </a></li>
                                    </ul> --}}
                                        <img src="{{ asset('interface/images/My-logo.png') }}"
                                            style="height: 300px;">
                                    </div>
                                </div>

                            </div>

                            <div class="widget widget_newsletter">
                                <h3 class="widget-title">Newsletter</h3>
                                <p>Subscribe to our newsletter to receive latest news on our services.</p>
                                <div class="newsletter-input">
                                    <div class="input-group">
                                        <input id="email" type="text" class="form-control" name="email"
                                            placeholder="Enter your email">
                                        <div class="input-group-append">
                                            <button type="submit"
                                                class="input-group-text nl-search-btn text-black site-bg-primary title-style-2">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- FOOTER COPYRIGHT -->

            <div class="footer-bottom">
                <div class="container">
                    <div class="wt-footer-bot-left d-flex justify-content-between">
                        <span class="copyrights-text">Copyright © 2022</span>
                        <ul class="copyrights-nav">
                            <li><a href="javascript:void(0);">Terms &amp; Condition</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="contact-1.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </footer>
        <!-- FOOTER END -->

        <!-- Get In Touch -->
        {{-- <div class="contact-slide-hide bg-cover bg-no-repeat" style="background-image:url({{asset('interface/images/background/bg-7.jpg')}})"> 
        <div class="contact-nav">
             <a href="javascript:void(0)" class="contact_close">&times;</a>
             <div class="contact-nav-form">
                <div class="contact-nav-info bg-white p-a30 bg-center bg-no-repeat" style="background-image:url({{asset('interface/images/background/bg-map2.png')}});">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="contact-nav-media-section">
                                <div class="contact-nav-media">
                                    <img src="{{asset('interface/images/self-pic.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <form class="cons-contact-form" method="post" action="">
                                <div class="m-b30">
                                    <!-- TITLE START -->
                                     <h2 class="m-b30">Get In Touch</h2>
                                    <!-- TITLE END --> 
                                        <div class="row">
                                           <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="username" type="text" required class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                   <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                     <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                 </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                   <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                                 </div>
                                            </div>
                                            
                                           <div class="col-md-12">
                                                <button type="submit" class="site-button site-btn-effect">Submit Now</button>
                                            </div>
                                            
                                        </div>
                                </div>
                            </form>
                            <div class="contact-nav-inner text-black">
                                <!-- TITLE START -->
                                <h2 class="m-b30">Contact Info</h2>
                                <!-- TITLE END -->
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="wt-icon-box-wraper left icon-shake-outer">
                                                <div class="icon-content">
                                                    <h4 class="m-t0">Phone number</h4>
                                                    <p>{{config('site.site_phone')}}</p>
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="wt-icon-box-wraper left icon-shake-outer">
                                                <div class="icon-content">
                                                    <h4 class="m-t0">Email address</h4>
                                                    <p>{{config('site.site_email_1')}}</p>
                                                   
                                                </div>
                                            </div>
                                        </div>    
                                        <div class="col-lg-4 col-md-12">
                                            <div class="wt-icon-box-wraper left icon-shake-outer">
                                                <div class="icon-content">
                                                    <h4 class="m-t0">Address info</h4>
                                                    <p>{{config('site.site_address')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
                                                                                    
             </div>
        </div> 
    </div>     
     --}}
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>



    </div>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">

            <div class="loader">
                <span class="block-1"></span>
                <span class="block-2"></span>
                <span class="block-3"></span>
                <span class="block-4"></span>
                <span class="block-5"></span>
                <span class="block-6"></span>
                <span class="block-7"></span>
                <span class="block-8"></span>
                <span class="block-9"></span>
                <span class="block-10"></span>
                <span class="block-11"></span>
                <span class="block-12"></span>
                <span class="block-13"></span>
                <span class="block-14"></span>
                <span class="block-15"></span>
                <span class="block-16"></span>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('interface/js/jquery-2.2.0.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('interface/js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
    <script src="{{ asset('interface/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('interface/js/bootstrap-select.min.js') }}"></script><!-- Form js -->
    <script src="{{ asset('interface/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('interface/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('interface/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('interface/js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
    <script src="{{ asset('interface/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
    <script src="{{ asset('interface/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
    <script src="{{ asset('interface/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
    <script src="{{ asset('interface/js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
    <script src="{{ asset('interface/js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
    <script src="{{ asset('interface/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('interface/js/lc_lightbox.lite.js') }}"></script><!-- IMAGE POPUP -->
    <script src="{{ asset('interface/js/switcher.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

    <!-- REVOLUTION JS FILES -->

    <script src="{{ asset('interface/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('interface/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('interface/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('interface/js/rev-script-1.js') }}"></script>


    <!-- STYLE SWITCHER  ======= -->
    {{-- <div class="styleswitcher">

<div class="switcher-btn-bx">
    <a class="switch-btn">
        <span class="fa fa-cog fa-spin"></span>
    </a>
</div>

<div class="styleswitcher-inner">

    <h6 class="switcher-title">Color Skin</h6>
    <ul class="color-skins">
        <li><a class="theme-skin skin-1" href="?theme=css/skin/skin-1"></a></li>
        <li><a class="theme-skin skin-2" href="?theme=css/skin/skin-2"></a></li>
        <li><a class="theme-skin skin-3" href="?theme=css/skin/skin-3"></a></li>
        <li><a class="theme-skin skin-4" href="?theme=css/skin/skin-4"></a></li>
        <li><a class="theme-skin skin-5" href="?theme=css/skin/skin-5"></a></li>
        <li><a class="theme-skin skin-6" href="?theme=css/skin/skin-6"></a></li>
        <li><a class="theme-skin skin-7" href="?theme=css/skin/skin-7"></a></li>
        <li><a class="theme-skin skin-8" href="?theme=css/skin/skin-8"></a></li>
        <li><a class="theme-skin skin-9" href="?theme=css/skin/skin-9"></a></li>
        <li><a class="theme-skin skin-10" href="?theme=css/skin/skin-10"></a></li>
        <li><a class="theme-skin skin-11" href="?theme=css/skin/skin-11"></a></li>
        <li><a class="theme-skin skin-12" href="?theme=css/skin/skin-12"></a></li>
    </ul>           
    
</div>   --}}


    </div>
</body>

</html>
