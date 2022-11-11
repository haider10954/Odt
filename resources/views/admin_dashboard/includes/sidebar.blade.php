            <div class="vertical-menu" style="background-color: #3F3F3F;">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li >
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">{{ __('translation.Home')}}</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('ticket-management') }}" class="has-arrow waves-effect">
                                    <i class="bx bx-layout"></i>
                                    <span key="t-layouts">{{ __('translation.Ticket Management') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('library-management')}}" class="has-arrow waves-effect">
                                    <i class="fa fa-file"></i>
                                    <span key="t-file-manager">{{ __('translation.Library Management')}}</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('member-management')}}" class="has-arrow waves-effect">
                                    <i class="fa fa-users"></i>
                                    <span key="t-file-manager">{{ __('translation.Member Management')}}</span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-cog"></i>
                                    <span key="t-ecommerce">{{ __('translation.Settings')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
