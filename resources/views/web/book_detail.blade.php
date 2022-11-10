@extends('web.layouts.web_user_layout')

@section('title', 'Odt - '.__('Book Detail'))

@section('page_title',__('Book Detail'))

@section('content')
<p class="font-weight-600">{{ $book->book_title }}</p>
<div class="book-pages">
    @foreach ($book->book_pages as $item)
        <div class="book-page">
            <img src="{{ asset('storage/books/pages/'.$item) }}" class="book-page-img">
        </div>
    @endforeach
</div>
@endsection