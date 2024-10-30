@extends('partials.header')
@section('content')
    <style>
        /* --------------- */
        /* Datatable Style */
        /* --------------- */

        /* Pagination */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background: none;
            color: #459fff !important;
            border-radius: 50%;
            border: 1px solid #ccc;
            transition: none !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background: #459fff;
            color: white !important;
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
            border-radius: 10px !important;
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
        tr,
        th,
        td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 8px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .bi {
            margin-right: 5px;
        }
        .card{
            font-family: "Nunito", sans-serif;
        }
        .card-title {
            padding: 10px 0 0 0;
            font-size: 20px;
        }
        .float-end {
            padding: 5px 5px 5px 0;
            font-size: 20px;
        }
        .button-container {
            display: block;
        }
        .filter {
            display: none;
        }
        .modal {
            font-family: "Nunito", sans-serif;
        }
        .title-table{
            font-size: 20px;
        }
        @media (max-width: 767px) {
            .custom-button {
                padding: 0.25rem 0.5rem;
                font-size: 0.875rem;
                line-height: 1.5;
                border-radius: 0.2rem;
            }

            tr,
            th,
            td {
                border: 1px solid #ddd;
                text-align: center;
                padding: 8px;
            }

            .card-title {
                font-size: 18px;
                padding: 0;
                margin-bottom: 0;
            }

            .table-responsive {
                font-size: 11px;
            }

            .button-container {
                display: none;
            }

            .filter {
                display: block;
            }
            .title-table{
                font-size: 16px;
            }
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Menu</h6>
                      </li>
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#addmarine_data"><i class="bi bi-file-earmark-plus mr-3"></i>Create</a></li>
                    </ul>
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Marine</h5>
                        </div>
                        <div class="col button-container">
                            <h5 class="mt-0">
                                <div class="float-end">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmarine_data">Create</a>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-12 col-md-12 p-1 title-table"><b>SBU Marine & Offshore Migas</b></div>
                        <div class="col-12 col-md-12 p-1 title-table"><b>List Project</b></div>

                        <div class="col-12 col-md-6 mt-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1"></div>
                                <div class="col-md-6 col-8 p-1"></div>
                            </div>

                            <div class="row d-flex align-items-center mt-3">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Tahun :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <select name="yearSelect" class="form-select" id="yearSelect" required>
                                        <option value="">Tahun</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Nama :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <select name="nameSelect" class="form-select" id="nameSelect" required>
                                        <option value="">Name</option>
                                        <option value="Zulkifli">Zulkifli</option>
                                        <option value="Struick">Struick</option>
                                        <option value="Ivan">Ivan</option>
                                        <option value="Koh Afuk">Koh Afuk</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">BOPO :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <input type="text" value="6%" readonly class="form-control h-5 border-0 text-end"/>
                                </div>
                            </div>

                            <div class="row d-flex align-items-center mt-1">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Berjalan :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <input type="text" value="234.567.890" readonly class="form-control h-5 border-0 text-end"/>
                                </div>
                            </div>

                            <div class="row d-flex align-items-center mt-1">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Invoice :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <input type="text" value="1.234.567.890" readonly class="form-control h-5 border-0 text-end"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive  mt-2 overflow-x: auto;">
                        <table id="example1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">SPI</th>
                                    <th colspan="1" scope="colgroup" class="text-center align-middle">CRM</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">SAP</th>
                                    <th colspan="1" scope="colgroup" class="text-center align-middle">SIKOM</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Nama Klien</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Detail Pekerjaan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Nama Project</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Sisa Waktu Pekerjaan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Progress</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Status</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Laporan Code Number</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No. Laporan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No. Invoice</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Waktu Penyelesaian Report</th>
                                    <th colspan="4" scope="colgroup" class="text-center align-middle">Project</th>
                                    <th colspan="4" scope="colgroup" class="text-center align-middle">Pendapatan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">-</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">-</th>
                                </tr>
                                <tr>
                                    {{-- SPI --}}
                                    <th scope="colgroup">No.</th>
                                    <th scope="colgroup">Tgl</th>
                                    {{-- CRM --}}
                                    <th scope="colgroup">Order No.</th>
                                    {{-- SAP --}}
                                    <th scope="colgroup">Nomor SO</th>
                                    <th scope="colgroup">No WBS</th>
                                    {{-- SIKOM --}}
                                    <th scope="colgroup">ID No.</th>
                                    {{-- PROJECT --}}
                                    <th scope="colgroup">Rencana Biaya</th>
                                    <th scope="colgroup">Nilai Kontrak</th>
                                    <th scope="colgroup">OR</th>
                                    <th scope="colgroup">Laba</th>
                                    {{-- PENDAPATAN --}}
                                    <th scope="colgroup">Nilai</th>
                                    <th scope="colgroup">invoice</th>
                                    <th scope="colgroup">Prakal</th>
                                    <th scope="colgroup">Berjalan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>008</td>
                                    <td>1/4/2024</td>
                                    <td>ORD240503402</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>PT. XYZ Sejahtera</td>
                                    <td>FinaL 1</td>
                                    <td>Pull 1</td>
                                    <td>-100</td>
                                    <td>60</td>
                                    <td>Berjalan</td>
                                    <td>AKM/000/MTQ-KK2/P2/2024</td>
                                    <td>123321</td>
                                    <td>0001-AKM/KK2/P2/2024</td>
                                    <td>INPUT</td>
                                    <td>33.444.555</td>
                                    <td>444.444.444</td>
                                    <td>6%</td>
                                    <td>47%</td>
                                    <td>335.333.333</td>
                                    <td>666.666.666</td>
                                    <td>0</td>
                                    <td>777.777.777</td>
                                    <td>-</td>
                                    <td>Belum Launching</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- MODAL Tambah Data Marine --}}
            <div class="modal fade" id="addmarine_data" tabindex="-1" aria-labelledby="addmarine_data" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addmarine_data">Create Marine Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">

                                    {{-- No bagian SPI--}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no-spi" class="form-label">No.</label>
                                        <input type="number" name="no-spi" class="form-control" id="no-spi" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Tanggal --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="tgl" class="form-label">Tanggal</label>
                                        <input type="date" name="tgl" class="form-control" id="tgl" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Order No. --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="orderno" class="form-label">Order No.</label>
                                        <input type="text" name="orderno" class="form-control" id="orderno" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Nomor SO --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no_so" class="form-label">Nomor SO</label>
                                        <input type="text" name="no_so" class="form-control" id="no_so" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- No WBS --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no_wbs" class="form-label">No WBS</label>
                                        <input type="text" name="no_wbs" class="form-control" id="no_wbs" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- ID No. -> Selected --}}
                                    {{-- <div class="col-12 col-md-6 mb-3">
                                        <label for="no-spi" class="form-label">No. SPI</label>
                                        <select name="no-spi" class="form-select" id="no-spi" required>
                                            <option value="" disabled>Select ID No.</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div> --}}

                                    {{-- ID No. -> Input Number --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="id_no" class="form-label">ID No.</label>
                                        <input type="number" name="id_no" class="form-control" id="id_no" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Nama Klien --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nama-klien" class="form-label">Nama Klien</label>
                                        <input type="text" name="nama-klien" class="form-control" id="nama-klien" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>
                                    
                                    {{-- Detail Pekerjaan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="dtl_pekerjaan" class="form-label">Detail Pekerjaan</label>
                                        <input type="text" name="dtl_pekerjaan" class="form-control" id="dtl_pekerjaan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Nama Project --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nama_pekerjaan" class="form-label">Nama Project</label>
                                        <input type="text" name="nama_pekerjaan" class="form-control" id="nama_pekerjaan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Sisa Waktu Pengerjaan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="sisa_waktu" class="form-label">Sisa Waktu Pekerjaan</label>
                                        <input type="text" name="sisa_waktu" class="form-control" id="sisa_waktu" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Progress --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="progress" class="form-label">Progress</label>
                                        <input type="text" name="progress" class="form-control" id="progress" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Status --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="text" name="status" class="form-control" id="status" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Laporan Code Number --}} 
                                    <div class="col-12 col-md-12 mb-3">
                                        <label for="laporan_code" class="form-label">Laporan Code Number</label>
                                        <input type="text" name="laporan_code" class="form-control" id="laporan_code" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- No. Laporan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no_laporan" class="form-label">No. Laporan</label>
                                        <input type="text" name="no_laporan" class="form-control" id="no_laporan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- No.Invoice --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no_invoice" class="form-label">No. Invoice</label>
                                        <input type="text" name="no_invoice" class="form-control" id="no_invoice" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Waktu Penyelesaian --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="waktu_penyelesaian" class="form-label">Waktu Penyelesaian Report</label>
                                        <input type="text" name="waktu_penyelesaian" class="form-control" id="waktu_penyelesaian" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <label for="" class="form-label text-center"><b>Project</b><hr></label>
                                    </div>

                                    {{-- Rencana Biaya --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="rencana_biaya" class="form-label">Rencana Biaya</label>
                                        <input type="text" name="rencana_biaya" class="form-control" id="rencana_biaya" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Nilai Kontrak --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nilai_kontrak" class="form-label">Nilai Kontrak</label>
                                        <input type="text" name="nilai_kontrak" class="form-control" id="nilai_kontrak" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- OR --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="or" class="form-label">OR</label>
                                        <input type="text" name="or" class="form-control" id="or" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Laba --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="laba" class="form-label">Laba</label>
                                        <input type="text" name="laba" class="form-control" id="laba" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <label for="" class="form-label text-center"><b>Pendapatan</b><hr></label>
                                    </div>

                                    {{-- Nilai --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nilai" class="form-label">Nilai</label>
                                        <input type="text" name="nilai" class="form-control" id="nilai" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Invoice --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="invoice" class="form-label">Invoice</label>
                                        <input type="text" name="invoice" class="form-control" id="invoice" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>
                                    
                                    {{-- Prakal --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="prakal" class="form-label">Prakal</label>
                                        <input type="text" name="prakal" class="form-control" id="prakal" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Berjalan --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="berjalan" class="form-label">Berjalan</label>
                                        <input type="text" name="berjalan" class="form-control" id="berjalan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- - --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="formtambahan" class="form-label">Form Tambahan 1</label>
                                        <input type="text" name="formtambahan" class="form-control" id="formtambahan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- - --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="formtambahan" class="form-label">Form Tambahan 2</label>
                                        <input type="text" name="formtambahan" class="form-control" id="formtambahan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('#example1').DataTable();
        $('#example1_wrapper').css('font-family', 'Nunito, sans-serif');
    </script>
@endpush
