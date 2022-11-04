@extends('web.layouts.web_user_layout')

@section('title', 'Odt - Reservations')

@section('content')
    <div class="theme-box mb-4">
        <div class="d-flex align-items-center">
            <img src="{{ asset('web_assets/img/user-1.png') }}" height="70" class="mx-3">
            <div class="info mx-2">
                <p class="mb-1">Name : John Doe</p>
                <p class="mb-1">honghong@naver.com</p>
                <p class="mb-1">010-1234-5678</p>
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
                <tr>
                    <td>1</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('web_assets/img/book-1.png') }}" height="70">
                            <div class="club-name-content mx-2">
                                <p class="mb-0">글과 파도</p>
                                <p class="mb-0">신림드로잉 클럽</p>
                            </div>
                        </div>
                    </td>
                    <td>2022.11.26 10pm</td>
                    <td>
                        <span class="badge bg-primary">Completed</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('web_assets/img/book-2.png') }}" height="70">
                            <div class="club-name-content mx-2">
                                <p class="mb-0">글과 파도</p>
                                <p class="mb-0">신림드로잉 클럽</p>
                            </div>
                        </div>
                    </td>
                    <td>2022.11.26 10pm</td>
                    <td>
                        <span class="badge bg-light text-muted">Declined</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('web_assets/img/book-3.png') }}" height="70">
                            <div class="club-name-content mx-2">
                                <p class="mb-0">글과 파도</p>
                                <p class="mb-0">신림드로잉 클럽</p>
                            </div>
                        </div>
                    </td>
                    <td>2022.11.26 10pm</td>
                    <td>
                        <span class="badge bg-primary">Completed</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('web_assets/img/book-4.png') }}" height="70">
                            <div class="club-name-content mx-2">
                                <p class="mb-0">글과 파도</p>
                                <p class="mb-0">신림드로잉 클럽</p>
                            </div>
                        </div>
                    </td>
                    <td>2022.11.26 10pm</td>
                    <td>
                        <span class="badge bg-light text-muted">Declined</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('web_assets/img/book-5.png') }}" height="70">
                            <div class="club-name-content mx-2">
                                <p class="mb-0">글과 파도</p>
                                <p class="mb-0">신림드로잉 클럽</p>
                            </div>
                        </div>
                    </td>
                    <td>2022.11.26 10pm</td>
                    <td>
                        <span class="badge bg-primary">Completed</span>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="btn btn-light btn-table-theme">TICKET INFO</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
