<div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo py-8" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{route('dashboard')}}" class="d-flex align-items-center">
            <img alt="Logo" src="{{asset('assets/media/logos/logo-2.png')}}" class="h-50px logo" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item py-2">
                    <a class="menu-link menu-center {{ request()->is('dashboard') ? 'active' : '' }}" href="{{route('dashboard')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon me-0">
                            <i class="bi bi-house fs-2"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item py-2">
                    <a class="menu-link menu-center {{ request()->is('product') ? 'active' : '' }}" href="{{route('product.index')}}" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Shopping/ATM.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <rect fill="#000000" opacity="0.3" x="2" y="4" width="20" height="5" rx="1"/>
                                <path d="M5,7 L8,7 L8,21 L7,21 C5.8954305,21 5,20.1045695 5,19 L5,7 Z M19,7 L19,19 C19,20.1045695 18.1045695,21 17,21 L11,21 L11,7 L19,7 Z" fill="#000000"/>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                        <span class="menu-title">Product</span>
                    </a>
                </div>
                
            </div>
            
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->

</div>