@extends('admin_dashboard.Layout.layout')

@section('title' , 'Add Books')
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
        right: 31px;
        font-size: 14px;
        color: #f00 !important;
        padding: 2px 7px 0px 7px;
        background: #fff;
        border-radius: 50%;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">Edit Book</h4>
        </div>
    </div>
</div>
<div class="prompt p-3"></div>
<div class="row">
    <div class="col-lg-4">
        <div id="main_image_view"></div>
    </div>
    <div class="col-lg-8">
        <form enctype="multipart/form-data" method="POST" action="{{ route('edit-books')}}">
            @csrf
            <input type="hidden" name="id" value="{{ $book->id }}" id="id">
            @if (Session::has('msg'))
            <p class="alert alert-danger">{{ Session::get('msg') }}</p>
            @endif
            <div class="form-group mb-2">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control" name="book_title" value="{{ $book->book_title}}">
                @error('book_title')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label">Book Description</label>
                <input type="text" class="form-control" name="book_description" value="{{ $book->description}}">
                @error('book_description')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label">Book Cover</label>
                <input type="file" class="form-control" name="image" id="main_picture" />
            </div>


            <div class="form-group mb-2">
                <label class="form-label">Book Pages</label>
                <input type="file" class="form-control" name="book_pages[]" id="additional_picture" multiple>
                @error('book_pages')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>
            <div class="row mb-3 align-items-start">
                <h4 class="my-4">Already Uploaded Images</h4>
                @foreach ($book->bookPageImageList() as $book_page)
                <div class="col-3 mb-2 d-flex align-items-end image-preview-box" data-file="{{ $book_page }}">
                    <div class="display-img">
                        <img src="{{ $book_page }}" data-original-src="{{ $book_page }}" id="multi_index_${index}" data-index="${index}" class="img-fluid img-block-" data-multi="yes">
                    </div>
                    <a type="button" class="text-danger del-icon" onclick="delete_book_page_image('{{ $book_page }}')">
                        <i class="fa fa-times font-18 "></i>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row mb-3" id="other_images_preview">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-sm btn-dark">Add</button>
            </div>
        </form>
    </div>
</div>

<!-- Vertically centered modal -->
<div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="prompt"></div>
                        <p>Are you sure to delete ? </p>
                        <input id="del_id" type="hidden" name="id">
                        <input type="hidden" id="delImg" name="del_photo">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger remove-image-preview" onclick="deleteImages()">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-script')
<script src="{{ asset('assets/js/book.js') }}"></script>
<script>
    $("#main_picture").on("change", function(e) {

        f = Array.prototype.slice.call(e.target.files)[0]
        let reader = new FileReader();
        reader.onload = function(e) {

            $("#main_image_view").html(`<img style="height: 300px; object-fit: contain;"  id="main_image_preview"  src="${e.target.result}" class="main_image_preview img-block- img-fluid w-100">`);
        }
        reader.readAsDataURL(f);


    })

    var delModal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {});

    function delete_book_page_image(file) {
        $('#delImg').val(file);
        $('#del_id').val(id);
        $("#staticBackdrop .remove-image-preview").attr("data-file", file);
        delModal.show();
    }

    function deleteImages(photo) {
        $.ajax({
            type: "POST",
            url: "{{ route('delete_book_page_images') }}",
            dataType: 'json',
            data: {
                id: $('#id').val(),
                photo: $('#delImg').val(),
                _token: '{{ csrf_token() }}'
            },

            beforeSend: function() {},
            success: function(res) {
                if (res.success == true) {
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                    setTimeout(function() {
                        delModal.hide();
                    }, 2000);
                } else {
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                }

            },
            error: function(e) {}
        });

    }
</script>
@endsection
