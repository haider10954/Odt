@extends('web.layouts.web_user_layout')

@section('title', 'Odt - Tickets')

@section('content')
    <div class="content-heading mb-4">
        <div class="left">
            <p class="mb-0">2001:Odyssey</p>
        </div>
        <div class="right">
            <p class="mb-0">19</p>
        </div>
    </div>

    <div class="content-tags mb-5">
        <p>“ 공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들 ”</p>
        <div class="tags">
            <span class="mx-2 badge-tag">서울/경기</span>
            <span class="mx-2 badge-tag">직장인</span>
            <span class="mx-2 badge-tag">정기적으로 모여요</span>
            <span class="mx-2 badge-tag">30대</span>
        </div>
    </div>

    <div class="mb-4">
        <ul class="tabs_links mb-2">
            <li><a href="javascript:void(0)" class="active">Scedule</a></li>
            <li><a href="javascript:void(0)">Board</a></li>
            <li><a href="javascript:void(0)">Number</a></li>
            <li><a href="javascript:void(0)">Detail</a></li>
        </ul>
        <a href="javascript:void(0)" class="btn btn-dark btn-custom mx-2">Notice</a>
    </div>

    <div class="tickets_stack mb-4">

        <!-- ticket group -->
        <div class="ticket" style="background-image: url('{{ asset('web_assets/img/book-img-2.png') }}');">
            <div class="top-bar-style"></div>
            <div class="ticket_content">
                <h4 class="mb-2">글과 파도</h4>
                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                <div class="seperator"></div>
                <p class="mb-0">참여중/SF,참여<br>참여중/SF,참여중인</p>
                <h4 class="mb-2">25중</h4>
            </div>
        </div>
        <div class="ticket_item ticket_detail" style="display: none;">
            <div class="ticket-detail-content">
                <div class="top-bar-style"></div>
                <div class="ticket_item_content">
                    <div class="d-flex">
                        <div class="left-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2001:<br>Odyssey</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket_tags">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                    <span class="ticket_tag">30대</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                </div>
                                <div class="ticket_tags my-2">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                </div>
                            </div>

                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-0 font-size-12">신림드로잉 클럽<br>글과 파도</p>
                                    <h4 class="mb-0">19도</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2020.<br>03.12~</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket-item-detail mt-2">
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">9도I</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">2021로</h4>
                                        <p class="mb-0">티켓</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">12도</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">80%</h4>
                                        <p class="mb-0">글과 파도</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-2 font-size-12">공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들</p>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-theme-sm w-100">직장인</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticket group end -->

        <!-- ticket group -->
        <div class="ticket" style="background-image: url('{{ asset('web_assets/img/book-img-1.png') }}');">
            <div class="top-bar-style"></div>
            <div class="ticket_content">
                <h4 class="mb-2">글과 파도</h4>
                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                <div class="seperator"></div>
                <p class="mb-0">참여중/SF,참여<br>참여중/SF,참여중인</p>
                <h4 class="mb-2">25중</h4>
            </div>
        </div>
        <div class="ticket_item ticket_detail" style="display: none;">
            <div class="ticket-detail-content">
                <div class="top-bar-style"></div>
                <div class="ticket_item_content">
                    <div class="d-flex">
                        <div class="left-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2001:<br>Odyssey</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket_tags">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                    <span class="ticket_tag">30대</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                </div>
                                <div class="ticket_tags my-2">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                </div>
                            </div>

                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-0 font-size-12">신림드로잉 클럽<br>글과 파도</p>
                                    <h4 class="mb-0">19도</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2020.<br>03.12~</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket-item-detail mt-2">
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">9도I</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">2021로</h4>
                                        <p class="mb-0">티켓</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">12도</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">80%</h4>
                                        <p class="mb-0">글과 파도</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-2 font-size-12">공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들</p>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-theme-sm w-100">직장인</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticket group end -->

        <!-- ticket group -->
        <div class="ticket" style="background-image: url('{{ asset('web_assets/img/book-img-3.png') }}');">
            <div class="top-bar-style"></div>
            <div class="ticket_content">
                <h4 class="mb-2">글과 파도</h4>
                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                <div class="seperator"></div>
                <p class="mb-0">참여중/SF,참여<br>참여중/SF,참여중인</p>
                <h4 class="mb-2">25중</h4>
            </div>
        </div>
        <div class="ticket_item ticket_detail" style="display: none;">
            <div class="ticket-detail-content">
                <div class="top-bar-style"></div>
                <div class="ticket_item_content">
                    <div class="d-flex">
                        <div class="left-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2001:<br>Odyssey</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket_tags">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                    <span class="ticket_tag">30대</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                </div>
                                <div class="ticket_tags my-2">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                </div>
                            </div>

                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-0 font-size-12">신림드로잉 클럽<br>글과 파도</p>
                                    <h4 class="mb-0">19도</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2020.<br>03.12~</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket-item-detail mt-2">
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">9도I</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">2021로</h4>
                                        <p class="mb-0">티켓</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">12도</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">80%</h4>
                                        <p class="mb-0">글과 파도</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-2 font-size-12">공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들</p>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-theme-sm w-100">직장인</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticket group end -->

        <!-- ticket group -->
        <div class="ticket" style="background-image: url('{{ asset('web_assets/img/book-img-4.png') }}');">
            <div class="top-bar-style"></div>
            <div class="ticket_content">
                <h4 class="mb-2">글과 파도</h4>
                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                <div class="seperator"></div>
                <p class="mb-0">참여중/SF,참여<br>참여중/SF,참여중인</p>
                <h4 class="mb-2">25중</h4>
            </div>
        </div>
        <div class="ticket_item ticket_detail" style="display: none;">
            <div class="ticket-detail-content">
                <div class="top-bar-style"></div>
                <div class="ticket_item_content">
                    <div class="d-flex">
                        <div class="left-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2001:<br>Odyssey</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket_tags">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                    <span class="ticket_tag">30대</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                </div>
                                <div class="ticket_tags my-2">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                </div>
                            </div>

                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-0 font-size-12">신림드로잉 클럽<br>글과 파도</p>
                                    <h4 class="mb-0">19도</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2020.<br>03.12~</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket-item-detail mt-2">
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">9도I</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">2021로</h4>
                                        <p class="mb-0">티켓</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">12도</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">80%</h4>
                                        <p class="mb-0">글과 파도</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-2 font-size-12">공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들</p>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-theme-sm w-100">직장인</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticket group end -->

        <!-- ticket group -->
        <div class="ticket" style="background-image: url('{{ asset('web_assets/img/book-img-2.png') }}');">
            <div class="top-bar-style"></div>
            <div class="ticket_content">
                <h4 class="mb-2">글과 파도</h4>
                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                <div class="seperator"></div>
                <p class="mb-0">참여중/SF,참여<br>참여중/SF,참여중인</p>
                <h4 class="mb-2">25중</h4>
            </div>
        </div>
        <div class="ticket_item ticket_detail" style="display: none;">
            <div class="ticket-detail-content">
                <div class="top-bar-style"></div>
                <div class="ticket_item_content">
                    <div class="d-flex">
                        <div class="left-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2001:<br>Odyssey</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket_tags">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                    <span class="ticket_tag">30대</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                </div>
                                <div class="ticket_tags my-2">
                                    <span class="ticket_tag">SF</span>
                                    <span class="ticket_tag">정기적으로 모여요</span>
                                    <span class="ticket_tag">서울/경기</span>
                                    <span class="ticket_tag">직장인</span>
                                </div>
                            </div>

                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-0 font-size-12">신림드로잉 클럽<br>글과 파도</p>
                                    <h4 class="mb-0">19도</h4>
                                </div>
                            </div>
                        </div>
                        <div class="right-content mx-2">
                            <div class="ticket_item_content_header">
                                <h4 class="mb-2">2020.<br>03.12~</h4>
                                <p class="mb-0">티켓/Science Fiction<br>참여중/SF,참여중인</p>
                            </div>
                            <div class="ticket_item_content_body">
                                <div class="ticket-item-detail mt-2">
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">9도I</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">2021로</h4>
                                        <p class="mb-0">티켓</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">12도</h4>
                                        <p class="mb-0">신림드로잉</p>
                                    </div>
                                    <div class="w-50 mb-2">
                                        <h4 class="mb-0">80%</h4>
                                        <p class="mb-0">글과 파도</p>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket_item_content-footer">
                                <div class="my-1">
                                    <p class="mb-2 font-size-12">공상 과학 소설, 영화 그리고 커피를 좋아하는 사람들</p>
                                    <a href="javascript:void(0)" class="btn btn-warning btn-theme-sm w-100">직장인</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ticket group end -->

    </div>

    <div class="custom-pagination mb-3">
        <div class="paginate">
            <a href="javascript:void(0)" class="page_navigate_btn"><i class="fa fa-angle-left"></i></a>
            <a href="javascript:void(0)" class="active">1</a>
            <a href="javascript:void(0)">2</a>
            <a href="javascript:void(0)">3</a>
            <a href="javascript:void(0)">4</a>
            <a href="javascript:void(0)">5</a>
            <a href="javascript:void(0)" class="page_navigate_btn"><i class="fa fa-angle-right"></i></a>
        </div>
    </div>
@endsection