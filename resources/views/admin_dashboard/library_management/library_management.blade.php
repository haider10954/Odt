@extends('admin_dashboard.Layout.layout')

@section('title' , 'Library Management')


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
        background: #ffffff;
        border: 2px solid #DFE0EB;
        border-radius: 2px;
        color: #CCD2E3;
        padding: 5px 25px;
    }


    .button-wait {
        background: #C5C7CD;
        border: 2px solid #DFE0EB;
        border-radius: 2px;
        color: white;
        padding: 5px 25px;
    }

    .dot-icon {
        font-size: 18px;
        color: #C5C7CD;
        width: 4px;
        height: 16px;
    }

    .span-text {
        font-size: 14px;
        font-weight: 700;
        color: #252733;
    }

    .update {
        font-size: 12px;
        line-height: 16px;
        color: black;
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

    .ticket-img {
        width: 35px;
        height: 51px;
    }

    .action-btn {
        margin-left: 0px;
    }

    @media screen and (max-width:500px) {
        .action-btn {
            margin-left: 10px;
        }
    }

    .button-add-modal {
        width: 70px;
        height: 30px;
        box-sizing: border-box;
        background: #FFFFFF;
        border: 1px solid #DFE0EB;
        border-radius: 2px;
    }

    .button-add-modal:hover {
        border: 1px solid black;
    }
</style>

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18 bold-text">Library Management</h4>
        </div>
    </div>

    <div class="col-12">
        <form class="app-search d-none d-lg-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search all books" id="myInput" onkeyup="myFunction()">
                <span class="fa fa-search"></span>
            </div>
        </form>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card card-content">
            <div class="card-header header-content d-flex justify-content-between">
                <p class="heading mb-0">In-progress content : <span> {{ $book->total() }} </span></p>
                <a class="btn btn-primary" href="{{ route('add-book-form')}}"> Add Book </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0" id="myTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="align-middle">Number</th>
                                <th colspan="2" class="align-middle">Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book as $books)
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input border border-dark" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td colspan="2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <img class="ticket-img" src="{{ $books->bookImage()  }}" alt="Header Avatar">
                                            </div>
                                            <div>
                                                <span class="span-text">{{ Str::limit($books->title, 40) }}</span> <br />
                                                <span class="update">{{ Str::limit($books->description, 50) }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <a class="button-confirm" href="{{ route('edit-book',$books->id) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <button type="button" class="button-wait" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                <i class="fa fa-download"></i>
                                            </button>
                                            <span class="dot-icon">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            {{ $book->links('vendor.pagination.custom-pagination') }}
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
