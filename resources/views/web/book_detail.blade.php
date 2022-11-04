@extends('web.layouts.web_user_layout')

@section('title', 'Odt - Book Detail')

@section('content')
<p class="font-weight-600">TDYB vol.3</p>

<div class="book-pages">
    <div class="book-page">
        <img src="{{ asset('web_assets/img/book-img-1.png') }}" class="book-page-img">
    </div>
    <div class="book-page">
        <img src="{{ asset('web_assets/img/book-img-2.png') }}" class="book-page-img">
    </div>
    <div class="book-page">
        <img src="{{ asset('web_assets/img/book-img-3.png') }}" class="book-page-img">
    </div>
    <div class="book-page">
        <img src="{{ asset('web_assets/img/book-img-4.png') }}" class="book-page-img">
    </div>
</div>
@endsection