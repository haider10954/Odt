@extends('admin_dashboard.Layout.layout')

@section('title' , 'Member Management')

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
    }
</style>

@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">{{ __('translation.Member Management')}}</h4>
        </div>
    </div>

    <div class="col-12">
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control py-4" placeholder="{{ __('translation.Search all members')}}" id="myInput" onkeyup="myFunction()">
                <span class="fa fa-search"></span>
            </div>
        </form>
    </div>
</div>
<div>
    @if (Session::has('removed'))
    <p class="alert alert-info" id="responseMessage">{{ Session::get('removed') }}</p>
    @endif
    @if (Session::has('error'))
    <p class="alert alert-danger" id="responseMessage">{{ Session::get('error') }}</p>
    @endif
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-content">
            <div class="card-header header-content">
                <p class="heading">{{ __('translation.Total Members') }} : <span> {{ $user->total() }} </span></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="myTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="align-middle">{{ __('translation.Number') }}</th>
                                <th class="align-middle">{{ __('translation.Name')}}</th>
                                <th class="align-middle">Id</th>
                                <th class="align-middle">{{ __('translation.Mobile Number')}}</th>
                                <th class="align-middle">{{ __('translation.Member Since')}}</th>
                                <th class="align-middle">{{ __('translation.Email Address')}}</th>
                                <th class="align-middle"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($user->count() > 0)
                            @foreach ($user as $u)
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>{{ $loop-> index + 1 }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/user-avatar.png') }}" alt="Header Avatar">
                                        </div>
                                        <div>
                                            <span class="span-text">{{ $u->name }}</span> <br />
                                            <span class="update">Updated 1 day ago</span>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $u->id}}</td>
                                <td>{{ $u->mobile}}</td>
                                <td>
                                    <p class="span-text mb-0">{{ Carbon\Carbon::parse($u->created_at)->format('d M, Y')}}</p>
                                    <span class="update">{{ Carbon\Carbon::parse($u->created_at)->format('g:i A')}}</span>
                                </td>
                                <td>{{ $u->email}}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <a type="button" class="dot-icon" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0)" onclick="delete_record( '{{ $u->id }}')" class="dropdown-item text-danger"><span><i class="fa fa-trash pe-2"></i></span>{{ __('translation.Delete')}}</a>
                                        </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="7" class="text-center fw-bold">{{ __('translation.No User Found') }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            {{ $user->links('vendor.pagination.custom-pagination') }}
        </div>
    </div>
</div>

<!-- Delete Record -->
<div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ __('translation.Confirm Delete')}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('delete_user')}}">
                    @csrf
                    <div class="modal-body">
                        <p>{{ __('translation.Are you sure to delete ?')}}</p>
                        <input id="del_id" type="hidden" name="id">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translation.Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{ __('translation.Save')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom-script')
<script>
    var delModal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {});

    function delete_record(id) {
        $('#del_id').val(id);
        delModal.show();
    }

    $(document).ready(function() {
        setTimeout(function() {
            $("#responseMessage").hide()
        }, 2000);
    });

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
