<div class="user-dashboard-header">

    <p class="font-14 mb-0">@yield('page_title')</p>

    <ul class="mb-0 header-menu">

        <li><a href="{{ route('web_index') }}" class="fw-bold">odt.</a></li>

        <li><a href="{{ route('web_tickets') }}">{{ __('Ticketing') }}</a></li>

        <li><a href="{{ route('web_library') }}">{{ __('Library') }}</a></li>

        <li><a href="{{ route('web_reservations') }}">{{ __('My Page') }}</a></li>

        <li><a href="{{ route('web_auth_logout') }}">{{ __('Logout') }}</a></li>

    </ul>

</div>
