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
        @if($tickets->count() > 0)
            @foreach ($tickets as $item)
                <!-- ticket group -->
                <div class="ticket" style="background-image: url('{{ asset('storage/ticket/'.$item->image) }}');">
                    <div class="top-bar-style"></div>
                    <div class="ticket_content">
                        <h4 class="mb-2">{{ $item->club_name }}</h4>
                        <p class="mb-0">{{ $item->subject }}</p>
                        <div class="seperator"></div>
                        <p class="mb-0">{{ $item->sub_description }}</p>
                        <h4 class="mb-2">{{ $item->number }}중</h4>
                    </div>
                </div>
                <div class="ticket_item ticket_detail" style="display: none;">
                    <div class="ticket-detail-content">
                        <div class="top-bar-style"></div>
                        <div class="ticket_item_content">
                            <div class="d-flex">
                                <div class="left-content mx-2">
                                    <div class="ticket_item_content_header">
                                        <h4 class="mb-2">{{ $item->club_name }}</h4>
                                        <p class="mb-0">{{ $item->subject }}</p>
                                    </div>
                                    <div class="ticket_item_content_body">
                                        <div class="ticket_tags">
                                            @foreach ($item->tag_1 as $tag)
                                                <span class="ticket_tag">{{ $tag }}</span>
                                            @endforeach  
                                        </div>
                                        <div class="ticket_tags my-2">
                                            @foreach ($item->tag_2 as $tag2)
                                                <span class="ticket_tag">{{ $tag2 }}</span>
                                            @endforeach  
                                        </div>
                                    </div>

                                    <div class="ticket_item_content-footer">
                                        <div class="my-1">
                                            <p class="mb-0 font-size-12">{{ $item->sub_description }}</p>
                                            <h4 class="mb-0">{{ $item->gatherings }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-content mx-2">
                                    <div class="ticket_item_content_header">
                                        <h4 class="mb-2">{{\Carbon\Carbon::parse($item->meet_up_date)->format('d M, Y')}}</h4>
                                    </div>
                                    <div class="ticket_item_content_body">
                                        <div class="ticket-item-detail mt-2">
                                            <div class="w-50 mb-2">
                                                <h4 class="mb-0">{{ $item->meetups }} 도I</h4>
                                                <p class="mb-0">지금까지의 만남</p>
                                            </div>
                                            <div class="w-50 mb-2">
                                                <h4 class="mb-0">{{\Carbon\Carbon::parse($item->date_last_meeting)->format('d M, Y')}}</h4>
                                                <p class="mb-0">마지막 회의 날짜</p>
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
                                            <p class="mb-2 font-size-12">{{ $item->description }}</p>
                                            <button type="button" data-id="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#reservationModal" class="btn btn-warning btn-theme-sm w-100 applyBtn" {{ in_array($item->id,$reservation) ? 'disabled' : ''}}>{{ in_array($item->id,$reservation) ? 'Reserved' : 'Apply'}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ticket group end -->
            @endforeach
        @else
            <div class="text-center">
                <h3>No Tickets Found</h3>
            </div>
        @endif

    </div>
    {{ $tickets->links('vendor.pagination.custom-pagination') }}
@endsection

@section('modals')
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Reservation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="prompt"></div>
            <input type="hidden" id="confirmReserveTicketId">
          <p>Are you sure you want to reserve this ticket?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <a href="javascript:void(0)" id="confirmReservation" class="btn btn-dark">Confirm</a>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('custom-script')
<script>
    $('.applyBtn').on('click',function(){
        $('#confirmReserveTicketId').val($(this).attr('data-id'));
    });
    $('#confirmReservation').on('click',function(){
        $( "#confirmReservation" ).html( '<i class="fa fa-spinner fa-spin"></i> Processing' );

		$("#confirmReservation").attr('disabled','');
        $.ajax( {

        dataType: 'json',

        url: "{{ route('web_reserve_ticket') }}",

        type: 'POST',

        data: {id:$('#confirmReserveTicketId').val(),_token:"{{csrf_token()}}"},

        success: function ( data ) {

            if ( data.Success == 'true' ) 

            {

                $(".prompt").show();

                $(".prompt").html('<div class="alert alert-success mb-3"><i class="fa fa-check mx-2"></i>'+data.Msg+'</div>');

                setTimeout(function () {

                    window.location.href = "{{ route('web_tickets') }}";

                }, 2000);
            } 

            else 

            {

                $(".prompt").show();

                $(".prompt").html('<div class="alert alert-danger mb-3"><i class="fa fa-exclamation-triangle mx-2"></i>'+data.Msg+'</div>');

                setTimeout(function () {

                    $( "#confirmReservation" ).html( 'Confirm' );

                    $("#confirmReservation").removeAttr('disabled');

                    $(".prompt").hide();

                }, 2000);

            }
        }
        } );
    });
</script>
@endsection