<div class="col-lg-3">

    <div class="sidemenu">

        <div class="sidemenu-header">

            <p class="font-18 mb-0">{{ __('translation.Meeting in attendace') }}</p>

        </div>

        <div class="sidemenu-menu">

            <ul class="books-list">
                @foreach (latest_reservation() as $item)
                <li class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)">{{ $item->ticket->club_name }}</a>
                    <span class="book-badge book-badge-dark">{{\Carbon\Carbon::parse($item->meet_up_date)->format('d M, Y')}}</span>
                </li>
                @endforeach
            </ul>

            <ul class="menu">

                <li><a href="{{ route('web_tickets') }}">{{ __('translation.Ticketing') }}</a></li>

                <li>
                    <a href="javascript:void(0)"
                        class="d-flex align-items-center justify-content-between submenu-toggle"><span>{{ __('translation.Library') }}</span> <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="submenu mt-3 mb-0" style="display: none;">
                        <li><a href="{{ route('web_library') }}">{{ __('translation.Reading') }}</a></li>
                        <li><a href="{{ route('web_drawing') }}">{{ __('translation.Drawing') }}</a></li>
                    </ul>
                </li>

            </ul>

        </div>

        <div class="sidemenu-footer">

            <a href="{{ route('web_reservations') }}" class="text-dark">
                <div class="d-flex align-items-center">

                    <img src="{{ asset('web_assets/img/user-1.png') }}" height="48" style="margin-right: 20px">
    
                    <div class="sidemenu-footer-content">
    
                        <p class="mb-0">{{ \Str::ucfirst(auth()->user()->name) }}</p>
                        <small class="d-block text-muted mb-0">{{ auth()->user()->email }}</small>
    
                    </div>
    
                </div>
            </a>

        </div>

    </div>

</div>
