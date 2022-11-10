@extends('web.layouts.web_user_layout')

@section('title', 'Odt - '.__('Book Detail'))

@section('page_title',__('Book Detail'))

@section('custom-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
@endsection

@section('content')
<p class="font-weight-600">{{ $book->book_title }}</p>
<div class="book-pages">
    @foreach ($book->book_pages as $item)
        <div class="book-page">
            <a href="{{ asset('storage/books/pages/'.$item) }}" data-fancybox="gallery">
                <img src="{{ asset('storage/books/pages/'.$item) }}" class="book-page-img">
            </a>
        </div>
    @endforeach
</div>
@endsection

@section('custom-script')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@endsection