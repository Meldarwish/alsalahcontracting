@php
    $code_lang = session('cmslangcode');
    $lang_dir = 'cmsdir.' . $code_lang;
    $style_dir = config($lang_dir);
    if ($style_dir === 'rtl') {
        $dir = '-' . $style_dir;
    } else {
        $dir = '';
    }
    //   echo print_r( $live_lang); exit();
@endphp

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>{{ config('site.site_name') }} </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #1 for blank page layout" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/admin/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assets/global/plugins/bootstrap/css/') }}/bootstrap{{ $dir }}.min.css"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('public/admin/assets/global/plugins/bootstrap-switch/css/') }}/bootstrap-switch{{ $dir }}.min.css"
        rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('public/admin/assets/global/plugins/bootstrap-toastr/toastr.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('public/admin/assets/global/css/') }}/components-md{{ $dir }}.min.css"
        rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('public/admin/assets/global/css/') }}/plugins-md{{ $dir }}.min.css" rel="stylesheet"
        type="text/css" />
    <!-- END THEME GLOBAL STYLES -->

    <link href="{{ asset('public/admin/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}"
        rel="stylesheet" type="text/css" />
    <link
        href="{{ asset('public/admin/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link
        href="{{ asset('public/admin/assets/global/plugins/datatables/plugins/bootstrap/') }}/datatables.bootstrap{{ $dir }}.css"
        rel="stylesheet" type="text/css" />


    <link href="{{ asset('public/admin/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('public/admin/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('public/admin/assets/layouts/layout/css/') }}/layout{{ $dir }}.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/admin/assets/layouts/layout/css/themes/') }}/darkblue{{ $dir }}.min.css"
        rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('public/admin/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    {{-- <link href="{{asset('public/admin/font.css')}}" rel="stylesheet" type="text/css" /> --}}
    <style type="text/css">
        @font-face {
            font-family: 'bahaa_elden';
            src: url('{{ asset('public/admin/font/janna_regular.woff') }}') format('embedded-opentype'),
                url('{{ asset('public/admin/font/janna_regular.eot') }}') format('woff'),
                url('{{ asset('public/admin/font/janna_regular.ttf') }}') format('truetype');
            Cloudward;
        }

        * {
            font-family: 'bahaa_elden';
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        .page-title,
        .page-header.navbar .hor-menu .navbar-nav>li .dropdown-menu li>a {
            font-family: 'bahaa_elden';

        }
    </style>

    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md">
    <div class="page-wrapper">
        <!-- BEGIN HEADER -->
        @include('admin.layouts.top_header')
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            @include('admin.layouts.menu_sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    @include('admin.layouts.style_options')
                    <!-- END THEME PANEL -->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <!--<li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <a href="#">Blank Page</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Page Layouts</span>
                                </li> -->
                        </ul>
                        <div class="page-toolbar">
                            <div class="btn-group pull-right">
                                <!--button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button-->
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon-bell"></i> Action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-shield"></i> Another action</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-user"></i> Something else here</a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-bag"></i> Separated link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- END PAGE HEADER-->
                    @yield('content')
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            @include('admin.layouts.quick_sidbar')
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> {{ date('Y') }} &copy; By
                {{-- <a target="_blank" href="https://royaheg.com">Royah Agency</a> &nbsp;|&nbsp; --}}
                <a target="_blank" href="https://www.linkedin.com/in/mohamed-el-darwish-5b3864146/">M.EL-Darwish</a>
                &nbsp;|&nbsp;
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>
    <!-- BEGIN QUICK NAV -->
    <!--nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="#" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav-->
    <!---div class="quick-nav-overlay"></div-->
    <!-- END QUICK NAV -->
    <!--[if lt IE 9]>
        <script src="{{ asset('public/admin/assets/global/plugins/respond.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/global/plugins/excanvas.min.js') }}"></script>
        <script src="{{ asset('public/admin/assets/global/plugins/ie8.fix.min.js') }}"></script>
        <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="{{ asset('public/admin/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/pages/scripts/components-bootstrap-maxlength.min.js') }}"
        type="text/javascript"></script>

    <script src="{{ asset('public/admin/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/global/plugins/typeahead/handlebars.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/global/plugins/typeahead/typeahead.bundle.min.js') }}"
        type="text/javascript"></script>

    <script src="{{ asset('public/admin/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/global/plugins/jquery-repeater/jquery.repeater.js') }}"
        type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{ asset('public/admin/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/pages/scripts/form-repeater.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/pages/scripts/table-datatables-fixedheader.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/pages/scripts/ui-toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/pages/scripts/components-select2.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/pages/scripts/components-bootstrap-tagsinput.min.js') }}"
        type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{ asset('public/admin/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('public/admin/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript">
    </script>






    <!-- for ck editor scripts -->
    <script src="{{ asset('public/admin/ck/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/ck/ckfinder/ckfinder.js') }}" type="text/javascript"></script>
    <!-- setup ck efitor -->

    <script type="text/javascript">
        $('input[name=title]').on('change keydown paste input', function() {
            var SEOURL = this.value;
            document.getElementsByName("url")[0].value = SEOURL;
        });


        $('input[name=url]').on('change keydown paste input', function() {
            var SEOURL = this.value;
            document.getElementsByName("title")[0].value = SEOURL;
        });


        var editor = CKEDITOR.replace("editor_1", {
            uiColor: '#14B8C4',
            filebrowserBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
        });
        var editor = CKEDITOR.replace("editor_2", {
            uiColor: '#14B8C4',
            filebrowserBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('admin/ck/ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('admin/ck/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}',
        });
        //CKFinder.setupCKEditor( editor, '../' );
    </script>






    <!-- END THEME LAYOUT SCRIPTS -->
</body>
<script type="text/javascript">
    // for paymenit type
    $(document).ready(function() {
        $('input[name="mailstmpoptions"]').click(function() {
            if ($(this).attr("value") == "simple_settings") {
                $("#mail_advanced_settings").hide();
                $("#mail_simple_settings").show();
            }
            if ($(this).attr("value") == "advanced_settings") {
                $("#mail_advanced_settings").show();
                $("#mail_simple_settings").hide();
            }
        });
    });

    @if (session('addsuss') === 'suss')
        toastr.success('the data has been added successfully', 'Notifications', toastr.options = {
            "closeButton": true,
            "debug": true,
            "positionClass": "toast-top-right",
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
    @endif
    @if (session('is_edit') === 'suss')
        toastr.info('the data has been updated successfully', 'Notifications', toastr.options = {
            "closeButton": true,
            "debug": true,
            "positionClass": "toast-top-right",
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
    @endif
    @if (session('is_delete') === 'suss')
        toastr.warning('the data has been deleted successfully', 'Notifications', toastr.options = {
            "closeButton": true,
            "debug": true,
            "positionClass": "toast-top-right",
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
    @endif
    @if (session('is_indb') === 'isexist')
        toastr.error('تم إدخال هذه البيانت من قبل يرحى التامد من البيانت المدخله', 'Notifications', toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-full-width",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
    @endif

    @if (session('is_mainlang') === 'yes')
        toastr.error('you cant delete the main language', 'Notifications', toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-full-width",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "7000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        });
    @endif
</script>

</html>
