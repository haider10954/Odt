<!-- Use the minified version files listed below for better performance and remove the files listed above -->

<script src="{{ asset('web_assets/js/vendor/vendor.min.js') }}"></script>

<script src="{{ asset('web_assets/js/plugins.min.js') }}"></script>

<!-- REVOLUTION JS FILES -->

<script src="{{ asset('web_assets/js/revolution.tools.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->

<script src="{{ asset('web_assets/js/revolution.extension.min.js') }}"></script>

<script src="{{ asset('web_assets/js/main.js') }}"></script>

<script src="{{ asset('web_assets/js/revoulation.js') }}"></script>



<script type="text/javascript">
    $(".page-content").bind("DOMSubtreeModified", function() {

        if ($('.active').hasClass('section-dark')) {

            $('.header-left p').css('color', '#fdc307');

            $('.header-left small').css('color', '#fdc307');

            $('.header-left .section-title-border').css('background', '#fdc307');

            $('.header-right small').css('color', '#fdc307');

            $('.manu-hamber div i').css('background', '#fdc307');

        } else {

            $('.header-left p').css('color', '#333333');

            $('.header-left small').css('color', '#333333');

            $('.header-left .section-title-border').css('background', '#333333');

            $('.header-right small').css('color', '#333333');

            $('.manu-hamber div i').css('background', '#333333');

        }

    });
</script>