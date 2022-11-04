<script src="{{ asset('web_assets/js/vendor/vendor.min.js') }}"></script>

<script src="{{ asset('web_assets/js/plugins.min.js') }}"></script>

<script src="{{ asset('web_assets/js/main.js') }}"></script>

<script type="text/javascript">
    $('.submenu-toggle').on('click', function() {
        $(this).next('.submenu').slideToggle();
    });
    $('.sidemenu-toggle-btn').on('click', function() {
        $('.sidemenu-content').slideToggle();
    });
    $('.ticket').on('click', function() {
        if ($(this).next('.ticket_detail').css('display') !== 'block') {
            $('.ticket_detail').hide();
        }
        $(this).next('.ticket_detail').fadeToggle();
    });
</script>
