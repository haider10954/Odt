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

    .paginate a.active {
        color: black;
    }

    .paginate a.paginate-btn {
        background: transparent;
        padding: 2px 10px;
        color: #9FA2B4;
        border-radius: 50%;
    }

    .card-content {
        border: 1px solid #DFE0EB;
        box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
    }

    .header-content {
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
                <input type="text" class="form-control" placeholder="Search Tickets" id="myInput" onkeyup="myFunction()">
                <span class="fa fa-search"></span>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-content">
            <div class="card-header header-content">
                <p class="heading">Club Name : {{ $ticket->club_name }} <a style="margin-left: 20px;">Meet up date : {{ $ticket->meet_up_date->format('Y-m-d')}}</a></p>
                <p class="heading">Registered Participants : <span>{{ $reserve->count() }} / {{ $user->count() }} </span> </p>
                <p class="heading">Confirmed Participants : <span> {{ $confirmed_reservations }} / {{ $user->count() }} </span></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="myTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="align-middle">Number</th>
                                <th class="align-middle">Name</th>
                                <th class="align-middle">Email</th>
                                <th class="align-middle">Phone Number</th>
                                <th class="align-middle">Status</th>
                                <th class="align-middle">Reservation confirm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reserve as $r)
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">{{ $r->user->name }}</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $r->user->email }}</td>
                                <td>{{ $r->user->mobile}}</td>
                                <td>{{ $r->status }}</td>
                                @if ($r->status == 'pending')
                                <td>
                                    <button type="button" class="btn button-wait" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        Pending
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                                @else
                                <td>
                                    <button type="button" class="btn button-confirm" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        In-Progress
                                    </button>
                                    <span class="dot-icon">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </span>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            {{ $reserve->links('vendor.pagination.custom-pagination') }}
        </div>
    </div>
</div>


@endsection

@section('custom-script')
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
@endsection
