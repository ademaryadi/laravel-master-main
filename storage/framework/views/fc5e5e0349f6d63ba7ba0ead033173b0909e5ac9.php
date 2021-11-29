<!--begin::Header-->
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-xxl d-flex align-items-stretch justify-content-between">
        <!--begin::Aside mobile toggle-->
        <!--end::Aside mobile toggle-->
        <!--begin::Logo-->
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15 col-lg-3">
            <a href="/home" style="font-size: 16px;">
                <img alt="KOMINFO" src="<?php echo e(asset('theme')); ?>/media/kominfo/logo_kominfo.png" class="h-50px" />
                <span class="menu-title text-dark" style="margin-left: 5px;"> KOMINFO</span>
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--begin::Navbar-->
            <div class="d-flex align-items-stretch" id="kt_header_nav">
                <!--begin::Menu wrapper-->
                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                    <!--begin::Menu-->
                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true" style="">
                        <div class="menu-item me-lg-1">
                            <a id="homeMenu" class="menu-link py-3" href="/home">
                                <span class="menu-title text-dark">Home</span>
                            </a>
                        </div>
                        
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu wrapper-->
            </div>
            <!--end::Navbar-->
            <div class="d-flex align-items-stretch flex-shrink-0" th:if="${#authentication.principal != 'anonymousUser'}">
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <!--begin::User-->
                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle" th:if="${#authentication.principal != 'anonymousUser'}">
                        <div class="btn btn-icon btn-light pulse mt-10 mb-10" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <i class="fa fa-user" style="font-size: 16px;"></i>
                            <span class="pulse-ring"></span>
                        </div>
                        <div class="text-center" style="margin-left: 5px;"><?php echo e(auth()->user()->nama); ?></div> 
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true" style="">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5"><span sec:authentication="principal.username" ><?php echo e(auth()->user()->nib); ?></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="#" class="menu-link px-5">Dashboard</a>
                            </div>
                            <div class="menu-item px-5">
                                <form action="<?php echo e(url('logout')); ?>" class="menu-link px-5" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="menu-lg-dropdown" style="border:none; background:none;">Keluar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--begin::Heaeder menu toggle-->
                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black"></path>
                                    <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                    </div>
                    <!--end::Heaeder menu toggle-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header--><?php /**PATH C:\Users\Ade Maryadi\Documents\GitHub\laravel-master-main\resources\views/layout/menu.blade.php ENDPATH**/ ?>