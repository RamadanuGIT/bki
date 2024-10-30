@extends('partials.header')
@section('content')

<style>
    /* --------------- */
    /* Datatable Style */
    /* --------------- */

    /* Pagination */
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: none;
        color: #459fff!important;
        border-radius: 50%;
        border: 1px solid #ccc;
        transition: none!important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #459fff;
        color: white!important;
        border: 1px solid #ccc;
        border-radius: 50px;
        margin: 2px;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button.previous,
    .dataTables_wrapper .dataTables_paginate .paginate_button.next {
        border-radius: 10px;
    }
    /* end pagination */

    .dataTables_info,
    .dataTables_wrapper,
    .dataTables_paginate {
        margin-top: 10px;
        font-size: 15px;
    }

    .dataTables_length,
    .dataTables_length select,
    .dataTables_filter {
        margin-bottom: 20px;
        font-size: 15px;
    }
    .dataTables_length select,
    .dataTables_filter input {
        border-radius: 10px!important;
    }
    /* End dataTable Style */

    .card-body {
    overflow-x: auto;
    }
    .text {
        display: none;
    }
    .dataTables_filter {
        margin-bottom: 10px;
    }
    #example1 {
        border-collapse: collapse;
        width: 100%;
        font-family: "Nunito", sans-serif;
        /* border: 1px solid #ddd; */
    }
    tr, th, td {
        border: 1px solid #ddd;
        text-align: center;
        padding: 8px;
    }
    .table-responsive {
        overflow-x: auto;
    }
    .bi{
        margin-right: 5px;
    }
    .card-title{
        padding: 10px 0 0 0;
        font-size: 20px;
    }
    .float-end{
        padding: 5px 5px 5px 0;
        font-size: 20px;
    }
    .button-container {
        display: block;
    }
    .filter {
        display: none;
    }

    @media (max-width: 767px) {
        .custom-button {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
            line-height: 1.5;
            border-radius: 0.2rem;
        }
        tr, th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 8px;
        }
        .card-title {
            font-size: 18px;
            padding: 0;
            margin-bottom: 0;
        }
        .table-responsive{
            font-size: 11px;
        }
        .button-container {
            display: none;
        }
        .filter {
            display: block;
        }
    }
</style>
    <div class="row">
        <div class="col-lg-12">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Menu</h6>
                      </li>
                      <li><a class="dropdown-item" href="{{ route('create.invoice') }}" ><i class="bi bi-file-earmark-plus mr-3"></i>Create</a></li>
                    </ul>
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Performance Invoice</h5>
                        </div>
                        <div class="col button-container">
                            <h5 class="mt-0">
                                <div class="float-end">
                                    <a href="{{ route('create.invoice') }}" class="btn btn-primary">Create</a>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive  mt-2 overflow-x: auto;">
                        <table id="example1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nomor Surat/Performa Invoice</th>
                                    <th>Tanggal</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Pekerjaan</th>
                                    <th>Nilai Pekerjaan</th>
                                    <th>Penerbit</th>
                                    <th>SPI</th>
                                    <th>Pelunasan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($invoice as $inv)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $inv->no_invoice }}</td>
                                        <td>{{ $inv->date }}</td>
                                        <td>{{ $inv->company_name }}</td>
                                        <td>{{ $inv->job_name }}</td>
                                        <td>{{ $inv->value }}</td>
                                        <td>{{ $inv->penerbitan }}</td>
                                        <td>{{ $inv->spi }}</td>
                                        <td>{{ $inv->pelunasan }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered{{$emp->id}}">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $inv->id }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach --}}
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger delete-btn" data-id="#">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered Modal -->

    @foreach ($invoice as $inv)
    <div class="modal fade" id="verticalycentered{{$inv->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vertically Centered</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{route('employee.update',$inv->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group mb-3">
                                    <label for="">No surat/Performance invoice</label>
                                    <input type="text" class="form-control" name="no_employe" value="{{$inv->no_invoice}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control" name="name" value="{{$inv->date}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Nama Perusahaan</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->company_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Nama Pekerjaan</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->job_name}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Nilai pekerjaan</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->value}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Penerbitan</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->penerbitan}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">SPI</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->spi}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Pelunasan</label>
                                    <input type="text" class="form-control" name="position" value="{{$inv->pelunasan}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- End Vertically centered Modal-->
    @endforeach

@endsection
@push('js')
    <script>
        document.getElementById('fileInput').onchange = function(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };

            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const dataId = this.getAttribute('data-id');
                    const deleteUrl = `{{ route('employee.delete', ':id') }}`
                        .replace(':id', dataId);

                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You will not able to recover this data!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, Delete it!',
                        cancelButtonText: 'Cancel',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Aksi penghapusan dengan redirect ke route Laravel
                            window.location.href = deleteUrl;
                        }
                    });
                });
            });
        });
    </script>
    <script>
        $('#example1').DataTable();
        $('#example1_wrapper').css('font-family', 'Nunito, sans-serif');
    </script>
@endpush
