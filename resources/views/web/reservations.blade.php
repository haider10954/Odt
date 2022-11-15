@extends('web.layouts.web_user_layout')

@section('title', 'Odt - ' . __('translation.Reservations'))

@section('page_title', __('translation.My Page'))

@section('content')
    <div class="theme-box mb-4">
        <div class="d-flex align-items-center">
            <img src="{{ asset('web_assets/img/user-1.png') }}" height="70" class="mx-3">
            <div class="info mx-2">
                <p class="mb-1">{{ __('translation.Name') }} : {{ auth()->user()->name }}</p>
                <p class="mb-1">{{ auth()->user()->email }}</p>
            </div>
        </div>
    </div>

    <div class="theme-box">
        <p class="font-weight-600">{{ __('translation.My reservation status') }}</p>
        <table class="table theme-table table-responsive">
            <thead>
                <tr>
                    <td class="text-muted">{{ __('translation.No') }}</td>
                    <td class="text-muted">{{ __('translation.Club name') }}</td>
                    <td class="text-muted">{{ __('translation.Meet up Date') }}</td>
                    <td class="text-muted">{{ __('translation.Status') }}</td>
                    <td class="text-muted">{{ __('translation.Action') }}</td>
                </tr>
            </thead>
            <tbody>
                @if ($reservations->count() > 0)
                    @foreach ($reservations as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('storage/ticket/' . $item->ticket->image) }}" height="90">
                                    <div class="club-name-content mx-2">
                                        <p class="mb-0">{{ $item->ticket->club_name }}</p>
                                        <p class="mb-0">{{ Str::limit($item->ticket->description, 40) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($item->ticket->meet_up_date)->format('d M, Y') }}</td>
                            <td>
                                <span class="badge bg-{{ $item->getStatus() }}">
                                @if ($item->status == 'pending')
                                    {{ __('Waiting for approval') }}
                                @else
                                    {{ __('Approved') }}
                                @endif
                                </span>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ticket_info"
                                    class="btn btn-light btn-table-theme">{{ __('translation.TICKET INFO') }}</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">{{ __('translation.No Reservations Found') }}</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection

@section('modals')
    <div class="modal fade" id="ticket_info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding: 0;border-radius: 10px;">
                    <div class="ticket_item ticket_detail" style="width:100%;padding:0;">
                        <div class="ticket-detail-content" style="border-radius: 0;">
                            <div class="top-bar-style"></div>
                            <div class="ticket_item_content">
                                <div class="d-flex">
                                    <div class="left-content mx-2">
                                        <div class="ticket_item_content_header">
                                            <h4 class="mb-2">Text and waves</h4>
                                            <p class="mb-0">Ticket/Science Fiction</p>
                                        </div>
                                        <div class="ticket_item_content_body">
                                            <div class="ticket_tags">
                                                <span class="ticket_tag">SF</span>
                                                <span class="ticket_tag">meet regularly</span>
                                                <span class="ticket_tag">Seoul/Gyeonggi</span>
                                                <span class="ticket_tag">Office workers</span>
                                                <span class="ticket_tag">30's</span>
                                            </div>
                                            <div class="ticket_tags my-2">
                                                <span class="ticket_tag">SF</span>
                                                <span class="ticket_tag">meet regularly</span>
                                                <span class="ticket_tag">Seoul/Gyeonggi</span>
                                                <span class="ticket_tag">office</span>
                                                <span class="ticket_tag">office workers</span>
                                            </div>
                                        </div>

                                        <div class="ticket_item_content-footer">
                                            <div class="my-1">
                                                <p class="mb-0 font-size-12">Sillim Drawing Club
                                                    writing and waves</p>
                                                <h4 class="mb-0">19 degrees</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content mx-2">
                                        <div class="ticket_item_content_header">
                                            <h4 class="mb-2">07 Nov, 2022</h4>
                                        </div>
                                        <div class="ticket_item_content_body">
                                            <div class="ticket-item-detail mt-2">
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">4 도I</h4>
                                                    <p class="mb-0">모인 횟수</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">24 Nov, 2022</h4>
                                                    <p class="mb-0">최근 모임날짜</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">12도</h4>
                                                    <p class="mb-0">신림드로잉 클럽</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">80%</h4>
                                                    <p class="mb-0">Text and waves</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket_item_content-footer">
                                            <div class="my-1">
                                                <p class="mb-2 font-size-12">People who like science fiction, movies and
                                                    coffee.</p>
                                                <button type="button" data-id="1" data-bs-toggle="modal"
                                                    data-bs-target="#reservationModal"
                                                    class="btn btn-warning btn-theme-sm w-100 applyBtn"
                                                    disabled="">Reserved</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
