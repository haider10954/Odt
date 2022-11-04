@extends('web.layouts.web_user_layout')

@section('title', 'Odt - Library')

@section('content')
<div class="content-heading mb-4">
    <div class="left"><p class="mb-0">2001:Odyssey</p></div>
    <div class="right"><p class="mb-0">19</p></div>
</div>

<div class="row book-rack">
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-1.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-2.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-3.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-4.png') }}" class="book-img">
        </a>
    </div>   
</div>

<div class="row book-rack">
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-1.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-2.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-3.png') }}" class="book-img">
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-12 text-center">
        <a href="book_detail.html">
            <img src="{{ asset('web_assets/img/book-img-4.png') }}" class="book-img">
        </a>
    </div>   
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