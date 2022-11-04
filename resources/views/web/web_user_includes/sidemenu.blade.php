<div class="col-lg-3">

    <div class="sidemenu">

        <div class="sidemenu-header">

            <p class="font-18 mb-0">참여중인 모임</p>

        </div>

        <div class="sidemenu-menu">

            <ul class="books-list">

                <li class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)">2001:Odyssey</a>
                    <span class="book-badge book-badge-dark">NEW</span>
                </li>

                <li class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)">글과 파도</a>
                    <span class="book-badge">02/21</span>
                </li>

                <li class="d-flex align-items-center justify-content-between">
                    <a href="javascript:void(0)">신림드로잉 클럽</a>
                    <span class="book-badge book-badge-dark">D-7</span>
                </li>

            </ul>

            <ul class="menu">

                <li><a href="ticketing.html">티켓팅</a></li>

                <li>
                    <a href="javascript:void(0)"
                        class="d-flex align-items-center justify-content-between submenu-toggle"><span>도서관</span> <i
                            class="fa fa-angle-down"></i></a>

                    <ul class="submenu mt-3 mb-0" style="display: none;">
                        <li><a href="library.html">독서</a></li>
                        <li><a href="drwaing.html">드로잉</a></li>
                    </ul>
                </li>

            </ul>

        </div>

        <div class="sidemenu-footer">

            <div class="d-flex align-items-center">

                <img src="{{ asset('web_assets/img/user-1.png') }}" height="48" style="margin-right: 20px">

                <div class="sidemenu-footer-content">

                    <p class="mb-0">{{ \Str::ucfirst(auth()->user()->name) }}</p>
                    <small class="d-block text-muted mb-0">{{ auth()->user()->email }}</small>

                </div>

            </div>

        </div>

    </div>

</div>
