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
        right: 8px;
        font-size: 14px;
        color: #f00 !important;
        padding: 2px 7px 0px 7px;
        background: #fff;
        border-radius: 50%;
    }

    .preview-img {
        height: 300px;
        background-color: #f2f2f2;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #bdbdbd;
    }
</style>
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">{{ __('translation.Add Book')}}</h4>
        </div>
    </div>
</div>
<div class="prompt"></div>
<div class="row" id="onTop">
    <div class="col-lg-4 preview-img mt-4">
        <div id="main_image_view" class="h-100">
            <p class="d-flex align-items-center h-100 justify-content-center fw-bold fs-4">{{ __('translation.Preview Image')}}</p>
        </div>
    </div>
    <div class="col-lg-8">
        <form id="bookForm">
            @csrf
            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Book Title')}}</label>
                <input type="text" class="form-control" name="book_title">
                <div class="error-book-title"></div>
            </div>

            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Book Description') }}</label>
                <input type="text" class="form-control" name="book_description">
                <div class="error-book-description"></div>
            </div>

            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Book Category')}}</label>
                <select type="text" class="form-control" name="category" autocomplete="off">
                    <option value="" disabled selected>Select Category</option>
                    <option value="reading">{{ __('translation.Reading') }}</option>
                    <option value="drawing">{{ __('translation.Drawing')}}</option>
                </select>
                <div class="error-book-category"></div>
            </div>

            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Book Cover')}}</label>
                <input type="file" class="form-control" name="image" id="main_picture" />
                <div class="error-book-cover-image"></div>
            </div>


            <div class="form-group mb-2">
                <label class="form-label">{{ __('translation.Book Pages')}}</label>
                <input type="file" class="form-control" name="book_pages[]" id="additional_picture" multiple>
                <div class="error-book-page"></div>
            </div>
            <div class="row mb-3" id="other_images_preview">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark" id="submitForm">{{ __('translation.Add Book')}}</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('custom-script')
<script src="{{ asset('assets/js/book.js') }}"></script>
<script>
    $("#bookForm").on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($("#bookForm")[0]);
        $.ajax({
            type: "POST",
            url: "{{ route('add-book') }}",
            dataType: 'json',
            contentType: false,
            processData: false,
            cache: false,
            data: formData,
            mimeType: "multipart/form-data",
            beforeSend: function() {
                $("#submitForm").html('<i class="fa fa-spinner fa-spin"></i>');
                $(".error-message").hide();
            },
            success: function(res) {

                $("#submitForm").html('<class="btn btn-dark">도서 추가</>');
                if (res.error) {
                    $('.prompt').html('<div class="alert alert-danger mb-3">' + res.message + '</div>');
                    $('html, body').animate({
                        scrollTop: $("html, body").offset().top
                    }, 1000);
                } else {
                    $('.prompt').html('<div class="alert alert-success mb-3">' + res.message + '</div>');
                    $('html, body').animate({
                        scrollTop: $("html, body").offset().top
                    }, 1000);
                    setTimeout(function() {
                        window.location.href = "{{ route('library-management') }}";
                    }, 2000);
                }
            },
            error: function(e) {
                $("#submitForm").html('<class="btn btn-dark">도서 추가</>');
                if (e.responseJSON.errors['book_title']) {
                    $('.error-book-title').html('<span class=" error-message text-danger">' + e.responseJSON.errors['book_title'][0] + '</span>');
                }
                if (e.responseJSON.errors['book_description']) {
                    $('.error-book-description').html('<span class=" error-message text-danger">' + e.responseJSON.errors['book_description'][0] + '</span>');
                }
                if (e.responseJSON.errors['category']) {
                    $('.error-book-category').html('<span class=" error-message text-danger">' + e.responseJSON.errors['category'][0] + '</span>');
                }
                if (e.responseJSON.errors['image']) {
                    $('.error-book-cover-image').html('<span class=" error-message text-danger">' + e.responseJSON.errors['image'][0] + '</span>');
                }
                if (e.responseJSON.errors['book_pages']) {
                    $('.error-book-page').html('<span class=" error-message text-danger">' + e.responseJSON.errors['book_pages'][0] + '</span>');
                }
            }
        });
    });

    $("#main_picture").on("change", function(e) {

        f = Array.prototype.slice.call(e.target.files)[0]
        let reader = new FileReader();
        reader.onload = function(e) {

            $("#main_image_view").html(`<img style="height: 100%; object-fit: contain;"  id="main_image_preview"  src="${e.target.result}" class="main_image_preview img-block- img-fluid w-100">`);
        }
        reader.readAsDataURL(f);


    })
</script>
@endsection
