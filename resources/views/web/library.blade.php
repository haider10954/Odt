@extends('web.layouts.web_user_layout')

@section('title', 'Odt - '.__('translation.Reading'))

@section('page_title',__('translation.Reading'))

@section('content')
<div class="content-heading mb-4">
    <div class="left"><p class="mb-0">2001:Odyssey</p></div>
    <div class="right"><p class="mb-0">19</p></div>
</div>
<div class="row book-rack justify-content-center position-relative">
    <div class="wooden-frame">
        <img src="{{ asset('web_assets/img/wooden-frame.jpg') }}" alt="img">
    </div>
    @if ($books->count() > 0)
        @foreach ($books as $item)
            <div class="col-lg-3 col-md-6 col-12 text-center">
                <a href="{{ route('web_book_detail',$item->id) }}">
                    <img src="{{ asset('storage/books/cover/'.$item->image) }}" class="book-img">
                </a>
            </div>
        @endforeach
    @else
        <div class="col-12 text-center">
            <h4 class="my-3 font-weight-600">{{ __('translation.No Books Found') }}</h4>
        </div>
    @endif
</div>

{{ $books->links('vendor.pagination.custom-pagination') }}
@endsection