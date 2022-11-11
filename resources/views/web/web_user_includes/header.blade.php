<div class="user-dashboard-header">

    <p class="font-14 mb-0">@yield('page_title')</p>

    <ul class="mb-0 header-menu">

        <li><a href="{{ route('web_index') }}" class="fw-bold">odt.</a></li>

        <li><a href="{{ route('web_tickets') }}">{{ __('translation.Ticketing') }}</a></li>

        <li><a href="{{ route('web_library') }}">{{ __('translation.Library') }}</a></li>

        <li><a href="{{ route('web_reservations') }}">{{ __('translation.My Page') }}</a></li>

        @if (auth()->check())
            <li><a href="{{ route('web_auth_logout') }}">{{ __('translation.Logout') }}</a></li>
        @endif

    </ul>

</div>
