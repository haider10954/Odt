<!doctype html>

<html class="no-js" lang="zxx">



<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @include('web.includes.style')

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

    <!-- Wrapper -->

    <div id="wrapper" class="wrapper">

        <!-- Header -->

        @include('web.includes.header')

        <!--// Header -->

        <!-- Page Conttent -->

        <main class="page-content">

           @yield('content')

        </main>

        <!--// Page Conttent -->

    </div>

    <!--// Wrapper -->

    @include('web.includes.script')

    @yield('custom-script')

</body>



</html>
