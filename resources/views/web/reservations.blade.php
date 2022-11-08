@extends('web.layouts.web_user_layout')

@section('title', 'Odt - Reservations')

@section('page_title','My Page')

@section('content')
    <div class="theme-box mb-4">
        <div class="d-flex align-items-center">
            <img src="{{ asset('web_assets/img/user-1.png') }}" height="70" class="mx-3">
            <div class="info mx-2">
                <p class="mb-1">Name : {{ auth()->user()->name }}</p>
                <p class="mb-1">{{ auth()->user()->email }}</p>
            </div>
        </div>
    </div>

    <div class="theme-box">
        <p class="font-weight-600">My reservation status</p>
        <table class="table theme-table table-responsive">
            <thead>
                <tr>
                    <td class="text-muted">No</td>
                    <td class="text-muted">Club name</td>
                    <td class="text-muted">Meet up Date</td>
                    <td class="text-muted">Status</td>
                    <td class="text-muted">Action</td>
                </tr>
            </thead>
            <tbody>
                @if($reservations->count() > 0)
                    @foreach ($reservations as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('storage/ticket/'.$item->ticket->image) }}" height="90">
                                <div class="club-name-content mx-2">
                                    <p class="mb-0">{{ $item->ticket->club_name }}</p>
                                    <p class="mb-0">{{ Str::limit($item->ticket->description, 40) }}</p>
                                </div>
                            </div>
                        </td>
                        <td>{{\Carbon\Carbon::parse($item->ticket->meet_up_date)->format('d M, Y')}}</td>
                        <td>
                            <span class="badge bg-{{ $item->getStatus() }}">{{ $item->status }}</span>
                        </td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="5">No Reservations Found</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
