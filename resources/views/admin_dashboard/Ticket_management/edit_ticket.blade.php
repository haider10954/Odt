@extends('admin_dashboard.Layout.layout')

@section('title' , 'Edit Ticket')

@section('custom-style')
<style>
    .display-img {

        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0px 0px 5px #2a2a2a;
        position: relative;
    }

    .del-icon {
        position: absolute;
        top: 7px;
        right: 20px;
        font-size: 14px;
        color: #f00 !important;
        padding: 2px 7px 0px 7px;
        background: #fff;
        border-radius: 50%;
    }

    #toHide1 {
        display: flex !important;
    }
</style>

@endsection

@section('content')
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18 bold-text">{{ __('translation.Edit Ticket') }}
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="prompt"></div>
<form enctype="multipart/form-data" id="ticketEditForm">
    @csrf
    <input type="hidden" name="id" value="{{ $ticket->id }}" id="id">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Club name')}}</label>
                <input type="text" class="form-control" name="club_name" value="{{ $ticket->club_name }}">
                @error('club_name')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Total Number')}}</label>
                <input type="text" class="form-control" name="total_number" value="{{ $ticket->number }}">
                @error('total_number')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.subject')}}</label>
                <input type="text" class="form-control" name="subject" value="{{ $ticket->subject }}">
                @error('subject')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Meet up Date')}}</label>
                <input type="date" class="form-control" name="meet_up_date" value="{{ Carbon\Carbon::parse($ticket->meet_up_date)->format('Y-m-d')}}">
                @error('meet_up_date')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Date of last meeting')}}</label>
                <input type="date" class="form-control" name="last_date" value="{{ Carbon\Carbon::parse($ticket->date_last_meeting)->format('Y-m-d')}}">
                @error('last_date')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Number of gatherings')}}</label>
                <input type="text" class="form-control" name="number_of_gathering" value="{{ $ticket->gatherings }}">
                @error('number_of_gathering')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Meet up til now')}}</label>
                <input type="text" class="form-control" name="meet_now" value="{{ $ticket->meetups }}">
                @error('meet_now')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Tag_1')}}</label>
                <input type="text" class="form-control" id="tags" data-role="tagsinput" name="tag_1" value="{{ $ticket->getTagsJsonString('tag_1') }}">
                @error('tag_1')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Tag_2')}}</label>
                <input type="text" class="form-control" id="tags2" data-role="tagsinput" value="{{ $ticket->getTagsJsonString('tag_2') }} " name="tag_2">
                @error('tag_2')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Description')}}</label>
                <textarea type="text" class="form-control" name="description" rows="2" style="resize: none;">{{ $ticket->description }}</textarea>
                @error('description')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Sub Description')}}</label>
                <textarea type="text" class="form-control" name="sub_description" rows="2" style="resize: none;">{{ $ticket->sub_description}}</textarea>
                @error('sub_description')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror

            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.image')}}</label>
                <input type="file" class="form-control" name="image" />
            </div>
        </div>
        <div class="col-lg-4">
            <div id="toHide1" class="mb-2 preview-img">
                <div class="display-img h-100" id='toHide'>
                    <img class="img-fluid img-block-" src="{{ $ticket->ticketImage() }}" data-original-src="{{ $ticket->ticketImage() }}" id="multi_index_${index}" data-index="${index}">
                    <a type="button" class="text-danger del-icon" onclick="delete_Ticket_image('{{ $ticket->ticketImage() }}')">
                        <i class="fa fa-times font-18 "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" id="submitForm" class="btn btn-primary">{{ __('translation.Edit')}}</button>
        <button type="button" class="btn btn-dark">{{ __('translation.Delete')}}</button>
    </div>
</form>

<!-- Delete Ticket Image -->
<div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ __('translation.Confirm Delete')}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="prompt"></div>
                        <p>{{ __('translation.Are you sure to delete ?')  }}</p>
                        <input id="del_id1" type="hidden" name="id">
                        <input type="hidden" id="delImg1" name="del_photo">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translation.Close')}}</button>
                        <button type="button" class="btn btn-danger remove-image-preview" onclick="deleteCoverImage()">{{ __('translation.Delete')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom-script')
<script>
    var delModalCover = new bootstrap.Modal(document.getElementById("staticBackdrop1"), {});

    function delete_Ticket_image(file) {
        $('#delImg1').val(file);
        $('#del_id1').val(id);
        $("#staticBackdrop1 .remove-image-preview").attr("data-file", file);
        delModalCover.show();
    }

    function deleteCoverImage(photo) {
        $.ajax({
            type: "POST",
            url: "{{ route('delete_ticket_image') }}",
            dataType: 'json',
            data: {
                id: $('#id').val(),
                photo: $('#delImg1').val(),
                _token: '{{ csrf_token() }}'
            },

            beforeSend: function() {},
            success: function(res) {
                if (res.success == true) {
                    $('#toHide').hide();
                    $('#toHide1').hide();
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                    setTimeout(function() {
                        delModalCover.hide();
                    }, 2000);
                } else {
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                }

            },
            error: function(e) {}
        });
    }

    $("#ticketEditForm").on('submit', function(e) {
        $("#submitForm").html('<i class="fa fa-spinner fa-spin"></i>');
        $("#submitForm").attr('disabled', '');
        e.preventDefault();
        var formData = new FormData($("#ticketEditForm")[0]);
        $.ajax({
            type: "POST",
            url: "{{ route('edit-ticket') }}",
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            mimeType: "multipart/form-data",
            beforeSend: function() {

            },
            success: function(res) {
                if (res.success) {
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                    $('html, body').animate({
                        scrollTop: $("html, body").offset().top
                    }, 1000);
                    setTimeout(function() {
                        window.location.href = "{{ route('ticket-management') }}";
                    }, 3000);
                } else {
                    $('.prompt').html('<div class="alert alert-danger mb-3">' + res.message + '</div>');
                    $('html, body').animate({
                        scrollTop: $("html, body").offset().top
                    }, 1000);
                }
            },
            error: function(e) {
                console.log('error');
            }

        });
    });

    var input = document.querySelector('#tags');
    var input2 = document.querySelector('#tags2');
    new Tagify(input);
    new Tagify(input2);
</script>
@endsection
