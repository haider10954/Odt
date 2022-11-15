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
                                    {{ __('translation.Waiting for approval') }}
                                @else
                                    {{ __('translation.Approved') }}
                                @endif
                                </span>
                            </td>
                            <td>
                                @php
                                $tag1_string = implode('||',$item->ticket->tag_1);
                                $tag2_string = implode('||',$item->ticket->tag_2);    
                                @endphp
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#ticket_info"
                                    class="btn btn-dark text-white btn-table-theme ticket_info_btn" data-club-name="{{ $item->ticket->club_name }}" data-subject="{{ $item->ticket->subject }}" data-sub-description="{{ $item->ticket->sub_description }}" data-gatherings="{{ $item->ticket->gatherings.' 명' }}" data-meet-up-date="{{\Carbon\Carbon::parse($item->ticket->meet_up_date)->format('d M, Y')}}" data-meetups="{{ $item->ticket->meetups.' 회' }}" data-date-last-meeting="{{\Carbon\Carbon::parse($item->ticket->date_last_meeting)->format('d M, Y')}}" data-description="{{ $item->ticket->description }}" data-tag-1="{{ $tag1_string }}" data-tag-2="{{ $tag2_string }}">{{ __('translation.TICKET INFO') }}</a>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="padding: 0;border-radius: 10px;">
                    <div class="ticket_item ticket_detail" style="width:100%;padding:0;">
                        <div class="ticket-detail-content" style="border-radius: 0;">
                            <div class="top-bar-style"></div>
                            <div class="ticket_item_content">
                                <div class="d-flex">
                                    <div class="left-content mx-2">
                                        <div class="ticket_item_content_header">
                                            <h4 class="mb-2 club_name"></h4>
                                            <p class="mb-0 subject"></p>
                                        </div>
                                        <div class="ticket_item_content_body">
                                            <div class="ticket_tags tag_1_div"></div>
                                            <div class="ticket_tags tag_2_div my-2"></div>
                                        </div>

                                        <div class="ticket_item_content-footer">
                                            <div class="my-1">
                                                <p class="mb-0 font-size-12 sub_description"></p>
                                                <h4 class="mb-0 gatherings"></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content mx-2">
                                        <div class="ticket_item_content_header">
                                            <h4 class="mb-2 meet_up_date"></h4>
                                        </div>
                                        <div class="ticket_item_content_body">
                                            <div class="ticket-item-detail mt-2">
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0 meetups"></h4>
                                                    <p class="mb-0">{{ __('translation.Encounters so far') }}</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0 date_last_meeting"></h4>
                                                    <p class="mb-0">{{ __('translation.Last meeting date') }}</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">12도</h4>
                                                    <p class="mb-0">{{ __('translation.Sillim Drawing') }}</p>
                                                </div>
                                                <div class="w-50 mb-2">
                                                    <h4 class="mb-0">80%</h4>
                                                    <p class="mb-0 club_name"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket_item_content-footer">
                                            <div class="my-1">
                                                <p class="mb-2 font-size-12 description"></p>
                                                <button type="button" data-id="1" data-bs-toggle="modal"
                                                    data-bs-target="#reservationModal"
                                                    class="btn btn-warning btn-theme-sm w-100 applyBtn"
                                                    disabled="">{{__('translation.Reserved')}}</button>
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

@section('custom-script')
<script>
    $('.ticket_info_btn').on('click',function(){
        var tags1 = [];
        tags1 = $(this).attr('data-tag-1').split("||");
        $('.tag_1_div').html('');
        tags1.forEach(element => {
            $('.tag_1_div').append('<span class="ticket_tag mr-1">'+element+'</span>');
        });
        var tags2 = [];
        tags2 = $(this).attr('data-tag-2').split("||");
        $('.tag_2_div').html('');
        tags1.forEach(element => {
            $('.tag_2_div').append('<span class="ticket_tag mr-1">'+element+'</span>');
        });
        $('.club_name').text($(this).attr('data-club-name'));
        $('.subject').text($(this).attr('data-subject'));
        $('.sub_description').text($(this).attr('data-sub-description'));
        $('.gatherings').text($(this).attr('data-gatherings'));
        $('.meet_up_date').text($(this).attr('data-meet-up-date'));
        $('.meetups').text($(this).attr('data-meetups'));
        $('.date_last_meeting').text($(this).attr('data-date-last-meeting'));
        $('.description').text($(this).attr('data-description'));
    });
</script>
@endsection
