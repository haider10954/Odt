<!doctype html>

<html class="no-js" lang="zxx">



<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="apple-touch-icon" href="img/icon.png">

    @include('web.web_user_includes.style')

    @yield('custom-style')

</head>



<body class="template-color-21 template-font-2">


    <div id="page-preloader" class="page-loading clearfix">

        <div class="page-load-inner">

            <div class="preloader-wrap">

                <div class="wrap-2">

                    <div> <img src="{{ asset('web_assets/img/favicon.png') }}" alt="ODT Preloader" height="100"></div>

                </div>

            </div>

        </div>

    </div>

   

    <div class="page-wrapper">

        <div class="row">

            <!-- side menu -->
            
            @include('web.web_user_includes.sidemenu')    

            <!-- content -->

            <div class="col-lg-9">
                
                @include('web.web_user_includes.header')

                <!-- content start here -->

                <div class="user-dashboard-content">
                    
                    @yield('content')

                </div>

                <!-- content end here -->

            </div>

        </div>
        
    </div>
    
    @yield('modals')

    @include('web.web_user_includes.script')

    @yield('custom-script')

</body>



</html>