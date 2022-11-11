@extends('admin_dashboard.Layout.layout')

@section('title' , 'Ticket Management')

@section('custom-style')

<style>
    .description {
        padding: 5px;
    }

    .card-body span {
        font-size: 10px;
        margin-bottom: 2px;
        color: #666;
    }

    .button-add {
        padding: 5px 25px 5px 25px;
        background-color: #F87171;
        color: white;
        border-radius: 2px;
        border: none;
        font-size: 10px;
    }

    .button-reserve {
        font-size: 9px;
        padding: 7px 10px 0px 10px;
        height: 30px;
        background-color: #696CFF;
        border-radius: 2px;
        color: white;
        border: none;
    }

    .button-reserve:hover {
        font-size: 9px;
        padding: 7px 10px 0px 10px;
        height: 30px;
        background-color: #696CFF;
        border-radius: 2px;
        color: white;
        border: none;
    }



    .button-edit {
        font-size: 9px;
        padding: 7px 10px 0px 10px;
        height: 30px;
        background-color: #C5C7CD;
        border-radius: 2px;
        color: white;
        border: none;
    }

    .button-edit:hover {
        font-size: 9px;
        padding: 7px 10px 0px 10px;
        height: 30px;
        background-color: #C5C7CD;
        border-radius: 2px;
        color: white;
        border: none;
    }

    .button-delete {
        font-size: 9px;
        padding: 0px 10px 0px 10px;
        height: 30px;
        background-color: #F87171;
        border-radius: 2px;
        color: white;
        border: none;
    }

    .bold-text {
        font-weight: 700;
    }

    .Image {
        height: 250px;
        border-radius: 8px;
        width: 100%;
        padding: 5px;
    }

    @media only screen and (max-width: 767px) {
        .Image {
            top: 0px;
            width: 100% !important;
            border-radius: 5px;
            object-fit: cover;
        }
    }

    .button-add-modal {
        width: 70px;
        height: 30px;
        box-sizing: border-box;
        background: #FFFFFF;
        border: 1px solid #DFE0EB;
        border-radius: 2px;
    }

    .button-add-modal:hover {
        border: 1px solid black;
    }

    .button-delete-modal {
        box-sizing: border-box;
        background: #F87171;
        border: 1px solid #F87171;
        border-radius: 2px;
        width: 70px;
        height: 30px;
        color: white;
    }

    .gap {
        margin-right: 4px;
    }

    .span-text {
        color: #696CFF;
    }
</style>

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">{{ __('translation.Ticket Management')}}</h4>
        </div>
    </div>

    <div class="col-12">
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="{{ __('translation.Search Tickets')}}" id="myInput">
                <span class="fa fa-search"></span>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">{{ __('translation.Ticket ongoing') }} <span class="span-text"> {{ $ticket->count() }}</span>
                <span style="padding-left: 30px;">
                    <button type="button" class="button-add" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('translation.Add Tickets')}}</button>
                </span>
            </h4>
        </div>
    </div>
</div>
<div>
    @if (Session::has('msg'))
    <p class="alert alert-info" id="responseMessage">{{ Session::get('msg') }}</p>
    @endif
    @if (Session::has('error'))
    <p class="alert alert-danger" id="responseMessage">{{ Session::get('error') }}</p>
    @endif
</div>
<div class="row">

    @foreach ($ticket as $tickets)


    <div class="col-lg-4 searchable" data-name="{{ $tickets->club_name }}">
        <div class="card">
            <div class="d-flex align-items-start">
                <div class="w-50">
                    <img src="{{ $tickets->ticketImage() }}" class="Image" alt="Card image">
                </div>
                <div class="card-body description py-0 w-50">
                    <span class="bold-text">{{ __('translation.Club name') }}: {{ $tickets->club_name }}</span> <br>
                    <span>{{ __('translation.subject') }} : {{ $tickets->subject }} </span> <br>
                    <span class="bold-text">{{ __('translation.Total Number') }} : {{ $tickets->number }}</span> <br>
                    <span>{{ __('translation.Meet up Date') }} : {{  Carbon\Carbon::parse($tickets->meet_up_date)->format('Y-m-d') }}</span> <br>
                    <span>{{ __('translation.Date of last meeting') }} : {{ Carbon\Carbon::parse($tickets->date_last_meeting)->format('Y-m-d') }}</span> <br>
                    <span>{{ __('translation.Number of gatherings') }} : {{ $tickets->gatherings }}</span> <br>
                    <span>{{ __('translation.Meet up til now')}} : {{ $tickets->meetups }} (회)</span> <br>
                    <span class="bold-text">{{ __('translation.Tag_1') }} : {{ implode(' , ',$tickets->tag_1) }}</span> <br>
                    <span>{{ __('translation.Tag_2') }} : {{ implode(' , ',$tickets->tag_2) }} </span> <br>
                    <span>{{ __('translation.Description') }} : {{ Str::limit($tickets->description, 40) }}</span> <br>
                    <span class="bold-text">{{ __('translation.Sub Description') }} : {{ Str::limit($tickets->sub_description, 40) }}</span>
                    <div class="mb-2 mt-3 d-flex justify-content-center">
                        <a class="button-reserve gap" href="{{ route('content-management' , $tickets->id)}}">{{ __('translation.Reservations')}}</a>
                        <a class="button-edit gap" href="{{ route('edit_ticket_form' , $tickets->id ) }}">{{ __('translation.Edit')}}</a>
                        <button class="button-delete gap" onclick="deleteModal('{{ $tickets -> id }}')">{{ __('translation.Delete')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!--Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" id="modal-content">
            <div class="modal-header" id="modal-header">
                <h5 class="modal-title fw-bolder" id="exampleModalLabel">{{ __('translation.Meeting Information')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="prompt p-3"></div>
            <form enctype="multipart/form-data" id="ticketForm">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Club name')}}</label>
                                <input type="text" class="form-control" name="club_name">
                                @error('club_name')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Total Number')}}</label>
                                <input type="text" class="form-control" name="total_number">
                                @error('total_number')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.subject') }}</label>
                                <input type="text" class="form-control" name="subject">
                                @error('subject')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Meet up Date')}}</label>
                                <input type="date" class="form-control" name="meet_up_date">
                                @error('meet_up_date')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Date of last meeting')}}</label>
                                <input type="date" class="form-control" name="last_date">
                                @error('last_date')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Number of gatherings')}}</label>
                                <input type="text" class="form-control" name="number_of_gathering">
                                @error('number_of_gathering')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Meet up til now')}}</label>
                                <input type="text" class="form-control" name="meet_now">
                                @error('meet_now')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Tag_1')}}</label>
                                <input type="text" class="form-control" id="tags" data-role="tagsinput" name="tag_1">
                                @error('tag_1')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Tag_2')}}</label>
                                <input type="text" class="form-control" id="tags2" data-role="tagsinput" name="tag_2">
                                @error('tag_2')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Description')}}</label>
                                <textarea type="text" class="form-control" name="description" rows="2" style="resize: none;"> </textarea>
                                @error('description')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Sub Description')}}</label>
                                <textarea type="text" class="form-control" name="sub_description" rows="2" style="resize: none;"> </textarea>
                                @error('sub_description')
                                <p style="color:#d02525;">{{$message}}</p>
                                @enderror

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label class="form-label">{{ __('translation.Meet up Date')}}</label>
                                <input type="file" class="form-control" name="image" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submitForm" type="button" class="button-add-modal">{{ __('translation.Add') }}</button>
                    <button type="button" class="button-delete-modal">{{ __('translation.Delete')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Modal End -->

<!-- Delete Modal -->
<div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ __('translation.Confirm Delete')}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('delete-ticket')}}">
                    @csrf
                    <div class="modal-body">
                        <p>{{ __('translation.Are you sure to delete ?') }} </p>
                        <input id="del_id" type="hidden" name="id">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('translation.Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{ __('translation.Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End delete Modal -->
@endsection

@section('custom-script')
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $("#responseMessage").hide()
        }, 3000);
    });

    var showModal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {});

    function deleteModal(id) {
        $('#del_id').val(id);
        showModal.show();
    }
    $('#submitForm').on('click', function() {

        $("#submitForm").html('<i class="fa fa-spinner fa-spin"></i>');

        $('#exampleModal').animate({scrollTop:0}, '300');;
        $("#submitForm").attr('disabled', '');

        var formData = new FormData($("#ticketForm")[0]);
        $.ajax({
            type: "POST",
            url: "{{ route('add-ticket') }}",
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            mimeType: "multipart/form-data",
            beforeSend: function() {

            },
            success: function(res) {
                $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                setTimeout(function() {
                    window.location.href = "{{ route('ticket-management') }}";
                }, 3000);
            },
            error: function(e) {
                console.log('error');
            }

        });
    });
</script>

<script>
    var input = document.querySelector('#tags');
    var input2 = document.querySelector('#tags2');
    new Tagify(input);
    new Tagify(input2);
</script>

<script>
    $("#myInput").on("keyup keypress", function() {
        var value = $(this).val();
        $(".searchable").each(function(index) {
            $row = $(this);
            var id = $row.attr("data-name");
            if (id.indexOf(value) != 0) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
</script>
<script>

</script>
@endsection
