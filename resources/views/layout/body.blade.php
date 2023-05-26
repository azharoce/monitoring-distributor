
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";

    </script>

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                @include('layout.container.menu')
               
                <div class="toolbar py-5 pb-lg-15" id="kt_toolbar">
                    <!--begin::Container-->
                    <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap">


                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column me-3">
                            <!--begin::Title-->
                            <h1 class="d-flex text-white fw-bold my-1 fs-3">
                                Dashboard
                            </h1>
                            <!--end::Title-->


                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">
                                    <a href="index.html" class="text-white text-hover-primary">
                                        Home </a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">
                                    Dashboards </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item text-white opacity-75">
                                    Default </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Actions-->
                        <div class="d-flex align-items-center py-3 py-md-1">
                            <!--begin::Wrapper-->
                            <div class="me-4">
                                <!--begin::Menu-->
                                <a href="#"
                                    class="btn btn-custom btn-active-white btn-flex btn-color-white btn-active-color-white"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-filter fs-5 me-1"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Filter
                                </a>



                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_646f6366a4829">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" data-kt-select2="true"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_646f6366a4829"
                                                    data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->

                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">
                                                        Author
                                                    </span>
                                                </label>
                                                <!--end::Options-->

                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
                                                    <span class="form-check-label">
                                                        Customer
                                                    </span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->

                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked />
                                                <label class="form-check-label">
                                                    Enabled
                                                </label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">Reset</button>

                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Button-->
                            <a href="#" data-bs-theme="light" class="btn bg-body btn-active-color-primary"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_create_app"
                                id="kt_toolbar_primary_button">
                                Create </a>
                            <!--end::Button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->
                </div>
                @yield('content')
               
                <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class=" container-xxl  d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com/" target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                    class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="../../../devs.keenthemes.com/index.html" target="_blank"
                                    class="menu-link px-2">Support</a></li>

                            <li class="menu-item"><a
                                    href="../../../themeforest.net/item/metronic-responsive-admin-dashboard-template/402146974a7.html"
                                    target="_blank" class="menu-link px-2">Purchase</a></li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->



    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>


