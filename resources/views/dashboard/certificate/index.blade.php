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
        .card{
            font-family: "Nunito", sans-serif;
        }
        .bi {
            margin-right: 5px;
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
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#addcertificatedata"><i class="bi bi-file-earmark-plus mr-3"></i>Create</a></li>
                    </ul>
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">No. Certificate</h5>
                        </div>
                        <div class="col button-container">
                            <h5 class="mt-0">
                                <div class="float-end">
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcertificatedata">Create</a>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-12 col-md-12 p-1 title-table" ><b>BKI KOMERSIL CABANG MADYA BATAM</b></div>
                        <div class="col-12 col-md-12 p-1 title-table" ><b>LIST PROJECT 2024</b></div>

                        <div class="col-12 col-md-6 mt-4">
                            {{-- <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1"></div>
                                <div class="col-md-6 col-8 p-1"></div>
                            </div> --}}

                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">SPI :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <select name="SPISelect" class="form-select" id="SPISelect" required>
                                        <option value="">SPI</option>
                                        <option value="111">111</option>
                                        <option value="222">222</option>
                                        <option value="333">333</option>
                                        <option value="444">444</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Code Number :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <select name="CodeSelect" class="form-select" id="CodeSelect" required>
                                        <option value="">Code Number</option>
                                        <option value="BMC/0846/M080-K06/P8/2024">BMC/0846/M080-K06/P8/2024</option>
                                        <option value="BMC/0721/M080-K06/P8/2024">BMC/0721/M080-K06/P8/2024</option>
                                        <option value="BMC/0001/M080-K06/P8/2024">BMC/0001/M080-K06/P8/2024</option>
                                        <option value="BMC/0099/M080-K06/P8/2024">BMC/0099/M080-K06/P8/2024</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mt-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label"><b>OK</b></span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <input type="text" value="" readonly class="form-control h-5 border-0 text-end" hidden/>
                                </div>
                            </div>

                            <div class="row d-flex align-items-center mt-1">
                                <div class="col-md-4 col-8 p-1">
                                    <span class="form-label"><b>if "OK" Copy Code Number With "Paste Special-Value Only" To Coloumn Number you want take.</b></span>
                                </div>
                                <div class="col-md-6 col-4 p-1">
                                    <input type="text" value="" readonly class="form-control h-5 border-0 text-end" hidden/>
                                </div>
                            </div>

                            {{-- <div class="row d-flex align-items-center mt-1">
                                <div class="col-md-4 col-4 p-1">
                                    <span class="form-label">Invoice :</span>
                                </div>
                                <div class="col-md-6 col-8 p-1">
                                    <input type="text" value="1.234.567.890" readonly class="form-control h-5 border-0 text-end"/>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive  mt-2 overflow-x: auto;">
                        <table id="example1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Auto No. Report</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Code Number</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">No. Certificate</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">No. SPI</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Nama Perusahaan</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">No. Invoice</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Nilai Prakalkulasi</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Inspector</th>
                                    <th colspan="3" scope="colgroup">Status Pekerjaan</th>
                                    <th colspan="2" scope="colgroup">Status Laporan</th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Kecepatan Pembuatan Certificate <small>(Hari)</small></th>
                                    <th colspan="1" rowspan="2"scope="colgroup"class="text-center align-middle">Keterangan</th>
                                </tr>
                                <tr>
                                    <th scope="colgroup">Project</th>
                                    <th scope="colgroup">Tgl Mulai</th>
                                    <th scope="colgroup">Durasi</th>
                                    <th scope="colgroup">Tgl Pengambilan No</th>
                                    <th scope="colgroup">Tgl TTD Certificate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0763</td>
                                    <td>BMC/0844/E003-K03/P5/2024</td>
                                    <td>0763-02-BMC/0844/E003-K03/P5/2024</td>
                                    <td>0844</td>
                                    <td>PT. IDROS SERVICE </td>
                                    <td>00979-BMC/K3/P5/0724</td>
                                    <td>10750000</td>
                                    <td>IRVAN ISKANDAR</td>
                                    <td>PROJECT 2024</td>
                                    <td>23-Apr-24</td>
                                    <td>Finish</td>
                                    <td>25-Jun-24</td>
                                    <td>06-Aug-24</td>
                                    <td>42</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- MODAL Tambah Data Certificate --}}
            <div class="modal fade" id="addcertificatedata" tabindex="-1" aria-labelledby="addcertificatedata" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addcertificatedata">Create Certificate</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    {{-- No Report --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no-report" class="form-label">Auto No. Report</label>
                                        <input type="number" name="no-report" class="form-control" id="no-report" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Code Number --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="code-numb" class="form-label">Code Number</label>
                                        <input type="text" name="code-numb" class="form-control" id="code-numb" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- No Certificate --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no-certificate" class="form-label">No Certificate</label>
                                        <input type="text" name="no-certificate" class="form-control" id="no-certificate" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- No SPI -> Selected --}}
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no-spi" class="form-label">No. SPI</label>
                                        <select name="no-spi" class="form-select" id="no-spi" required>
                                            <option value="" disabled>Select No SPI</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>
                                    {{-- No SPI -> Input Number --}} 
                                    {{-- <div class="col-12 col-md-6 mb-3">
                                        <label for="no-spi" class="form-label">No. SPI</label>
                                        <input type="number" name="no-spi" class="form-control" id="no-spi" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div> --}}

                                    {{-- Nama Perusahaan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nama-perusahaan" class="form-label">Nama Perusahaan</label>
                                        <input type="text" name="nama-perusahaan" class="form-control" id="nama-perusahaan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>
                                    
                                    {{-- No. Invoice --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="no-invoice" class="form-label">No. Invoice</label>
                                        <input type="text" name="no-invoice" class="form-control" id="no-invoice" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Nilai Prakalkulasi --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="n-prakalkulasi" class="form-label">Nilai Prakalkulasi</label>
                                        <input type="number" name="n-prakalkulasi" class="form-control" id="n-prakalkulasi" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Inspector --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="inspector" class="form-label">Inspector</label>
                                        <input type="text" name="inspector" class="form-control" id="inspector" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <label for="" class="form-label text-center"><b>Satus Pekerjaan</b><hr></label>
                                    </div>

                                    {{-- Project --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="project" class="form-label">Project</label>
                                        <input type="text" name="project" class="form-control" id="project" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Tanggal Mulai --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
                                        <input type="date" name="tgl_mulai" class="form-control" id="tgl_mulai" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Durasi --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="durasi" class="form-label">Durasi</label>
                                        <input type="text" name="durasi" class="form-control" id="durasi" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-center mt-3">
                                        <label for="" class="form-label text-center"><b>Status Laporan</b><hr></label>
                                    </div>

                                    {{-- Tanggal Pengambilan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="tgl_pengambilan" class="form-label">Tgl Pengambilan</label>
                                        <input type="date" name="tgl_pengambilan" class="form-control" id="tgl_pengambilan" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Tanggal TTD Certificate --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="tgl_ttd" class="form-label">Tgl TTD Certificate</label>
                                        <input type="date" name="tgl_ttd" class="form-control" id="tgl_ttd" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Kecepatan Pembuatan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="kec_pembuatancertif" class="form-label">Kecepatan Pembuatan Certificate <small>(hari)</small></label>
                                        <input type="text" name="kec_pembuatancertif" class="form-control" id="kec_pembuatancertif" required>
                                        <div class="invalid-feedback">The field cannot be empty !</div>
                                    </div>

                                    {{-- Keterangan --}} 
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="keterangan" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
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
