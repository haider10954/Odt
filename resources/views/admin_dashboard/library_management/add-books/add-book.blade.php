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
            <h4 class="mb-sm-0 font-size-18 bold-text">Add Book</h4>
        </div>
    </div>
</div>
<div class="prompt"></div>
<div class="row align-items-center">
    <div class="col-lg-4 preview-img">
        <div id="main_image_view" class="h-100">
            <p class="d-flex align-items-center h-100 justify-content-center fw-bold fs-4">Preview Image</p>
        </div>
    </div>
    <div class="col-lg-8">
        <form enctype="multipart/form-data" id="bookForm">
            @csrf
            <div class="form-group mb-2">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control" name="book_title">
                @error('book_title')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label">Book Description</label>
                <input type="text" class="form-control" name="book_description">
                @error('book_description')
                <p style="color:#d02525;">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label class="form-label">Book Category</label>
                <select type="text" class="form-control" name="category">
                    <option>Select Category</option>
                    <option value="reading">Reading</option>
                    <option value="drawing">Drawing</option>
                </select>
                @error('category')
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
            <div class="row mb-3" id="other_images_preview">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Add Book</button>
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
                    window.location.href = "{{ route('library-management') }}";
                }, 3000);
            },
            error: function(e) {
                console.log('error');
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
