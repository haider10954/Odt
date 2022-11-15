<style>
    .status {
        height: 8px;
        width: 8px;
        background-color: #71DD37;
        position: absolute;
        bottom: 25%;
        right: 27%;
        border-radius: 50%;
        border: none;
    }
</style>

<header id="page-topbar">
    <div class="navbar-header" id="header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/index.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo.png')}}" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect d-none" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">4</span>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect position-relative" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                    <div class="status"></div>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item text-danger" href="{{ route('admin_auth_logout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">{{ __('translation.Logout')}}</span></a>
                </div>
            </div>
        </div>
    </div>
</header>
