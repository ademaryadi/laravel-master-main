<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="http://www.thymeleaf.org"
      xmlns:sec="https://www.thymeleaf.org/thymeleaf-extras-springsecurity5"
      xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout">

<!--begin::Head-->
<head>
    <base href="">
    <title>Aplikasi Perizinan Kominfo</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="shortcut icon" href="{{asset('theme')}}/media/kominfo/logo_kominfo.png" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{asset('theme')}}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme')}}/css/dashboard.css" rel="stylesheet" type="text/css" />
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<!--end::Head-->
<!--begin::Body-->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="flex-column flex-row-fluid" id="kt_wrapper">
                    @include('layout.menu-login');
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--<div class="toolbar" id="kt_toolbar" th:if="${#authentication.principal == 'anonymousUser'}">
                        <div class="toolbar" id="kt_toolbar">
                            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
                            </div>
                        </div>                        
                            <div class="toolbar bg-purple" id="kt_toolbar" th:if="${#authentication.principal.applicantNumber != ''}">
                            <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack">
                                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1 col-lg-12">
                                    <li class="breadcrumb-item text-white col-lg-3">
                                        <a href="/dashboard" class="text-white text-hover-primary">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item text-white col-lg-3">
                                        <a href="" class="text-white text-hover-primary">Manajemen Perizinan</a>
                                    </li>
                                    <li class="breadcrumb-item text-white col-lg-3">
                                        <a href="" class="text-white text-hover-primary">Layanan Informasi</a>
                                    </li>
                                    <li class="breadcrumb-item text-white col-lg-3">
                                        <a href="" class="text-white text-hover-primary">Layanan Kontak</a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                        
                        <!--end::Toolbar-->
                        <!--begin::Post-->
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <!--begin::Container-->
                            <div id="kt_content_container" class="container-xxl">
                                <div layout:fragment="content">
                                @yield('container')    
                                </div>

                               <section class="content">
                                @yield('content')
                               </section>
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Post-->
                    </div>
                    <!--end::Content-->
                    @include('layout.footer');
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Root-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Scrolltop-->
        <!--end::Main-->                               
        <script src="{{asset('theme')}}/plugins/global/plugins.bundle.js"></script>
        <script src="{{asset('theme')}}/js/scripts.bundle.js"></script>
        <script src="{{asset('theme')}}/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="{{asset('theme')}}/js/custom/widgets.js"></script>                
        <script src="{{asset('theme')}}/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="{{asset('theme')}}/vendors/general/jquery-validation/dist/localization/messages_id.js" type="text/javascript"></script>
        <script src="{{asset('theme')}}/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="{{asset('theme')}}/vendors/general/jquery-validation.init.js" type="text/javascript"></script>
<!--        <script src="{{asset('theme')}}/js/custom/modals/create-account.js}"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>        
        <script src="{{asset('theme')}}/js/kominfo/dashboardUser.js" type="text/javascript"></script>
        <script src="{{asset('theme')}}/js/kominfo/baseUser.js" type="text/javascript"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        @stack('scripts')

    </body>
    <!--end::Body-->
</html>