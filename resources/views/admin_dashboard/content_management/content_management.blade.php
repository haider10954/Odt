@extends('admin_dashboard.Layout.layout')

@section('title' , 'Content Management')

@section('custom-style')

<style>
    .heading {
        font-size: 19px;
        font-weight: 700;
        line-height: 23.85px;
        color: 000000;
        margin-bottom: 0px;
        letter-spacing: 0.4 px;
    }

    .card-header span {
        color: #696CFF;
    }

    .table th {
        font-size: 14px;
        font-weight: 700;
        line-height: 18px;
        letter-spacing: 0.2px;
        color: #9FA2B4;
    }

    .button-confirm {
        background-color: #696CFF;
        border-radius: 2px;
        color: white;
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        font-style: normal;
        font-family: 'mulish' !important;
        border: none;
        padding: 5px 8px 5px 8px;
    }

    .button-confirm:hover {
        background: #696CFF;
        border: none;
        color: white;
    }

    .button-wait {
        background-color: #C5C7CD;
        border-radius: 2px;
        color: white;
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        font-style: normal;
        font-family: 'mulish' !important;
        border: none;
        padding: 5px 8px 5px 8px;
    }

    .button-wait:hover {
        background: #696CFF;
        border: none;
        color: white;
    }

    .dot-icon {
        font-size: 18px;
        color: #C5C7CD;
        width: 4px;
        height: 16px;
    }

    .span-text {
        font-size: 14px;
        font-weight: 600;
        color: #252733;
    }

    .update {
        font-size: 12px;
        line-height: 16px;
        color: #C5C7CD;
    }

    .paginate {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .paginate a {
        font-size: 15px;
        color: #9f9f9f;
        margin-left: 10px;
        margin-right: 10px;
    }

    .paginate a.active{
        color: black;
    }

    .paginate a.paginate-btn {
        background: transparent;
        padding: 2px 10px;
        color: #9FA2B4;
        border-radius: 50%;
    }
    .card-content{
        border: 1px solid #DFE0EB;
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
    }
    .header-content{
        background: #fff;
        border: 1px solid #DFE0EB;
    }
</style>

@endsection
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">Ticket Management</h4>
        </div>
    </div>

    <div class="col-12">
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search Tickets">
                <span class="fa fa-search"></span>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-content">
            <div class="card-header header-content">
                <p class="heading">Club Name : {{ $ticket->club_name }} <a style="margin-left: 20px;" >Meet up date : {{ $ticket->meet_up_date->format('Y-m-d H:i:s a')}}</a></p>
                <p class="heading">Registered Participants : <span>10 / 20 </span> </p>
                <p class="heading">Confirmed Participants : <span> 5 / 20 </span></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="align-middle">Number</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Phone Number</th>
                                <th class="align-middle">Reservation confirm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Confirm
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Confirm
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Confirm
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Confirm
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>5</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Confirm
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>6</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">Name</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>asff1009</td>
                                <td>010-0000-0000</td>
                                <td>
                                    <button type="button" class="btn button-wait" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Waiting
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="custom-pagination mb-3">
                <div class="paginate">
                    <a class="paginate-btn">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="javascript:void(0)" class="active">1</a>
                    <a href="javascript:void(0)">2</a>
                    <a href="javascript:void(0)">3</a>
                    <a href="javascript:void(0)">4</a>
                    <a href="javascript:void(0)">5</a>
                    <a class="paginate-btn">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
