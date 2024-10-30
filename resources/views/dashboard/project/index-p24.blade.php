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
        .custom-th{
            background-color: #d8d8d8;
            color: #000000;
        }
        th{
            border: 2px solid #adadad;
        }
        .filter {
            display: none;
        }
        .modal {
            font-family: "Nunito", sans-serif;
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
                      <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#adddataproject"><i class="bi bi-file-earmark-plus mr-3"></i>Create</a></li>
                    </ul>
                </div>
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">Project</h5>
                        </div>
                        <div class="col button-container">
                            <h5 class="mt-0">
                                <div class="float-end">
                                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adddataproject">Create</a>
                                </div>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-2">
                        <div class="col-12 col-md-12 p-1 title-table" ><b>BKI KOMERSIL CABANG MADYA BATAM</b></div>

                        <div class="col-12 col-md-6 mt-4">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6 col-8 p-1">
                                    <select name="projectSelect" class="form-select" id="projectSelect" required>
                                        <option value="">List Project</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive  mt-2 overflow-x: auto;">
                        <table id="example1" class="display" style="width:100%">
                            <thead class="custom-th">
                                <tr>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">No</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Agenda SPI</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Pemohon / Perusahaan</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Project</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Spesifikasi/Detail Lingkup Pekerjaan</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Nama Proyek</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Tanggal</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">No.PO</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Nilai Kontrak</th>
                                    <th colspan="9" scope="colgroup" class="text-center align-middle">KONTRAK/PO</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Manager Proyek</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Anggota Team</th>
                                    <th colspan="1" scope="colgroup" class="text-center align-middle">CRM</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">SAP</th>
                                    <th colspan="1" scope="colgroup" class="text-center align-middle">SIKOM</th>
                                    <th colspan="3" scope="colgroup" class="text-center align-middle">Anggaran</th>
                                    <th colspan="3" scope="colgroup" class="text-center align-middle">Progress Realisasi Pekerjaan</th>
                                    <th colspan="13" scope="colgroup" class="text-center align-middle">Penerbitan Laporan</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Prakalkulasi</th>
                                    <th colspan="6" scope="colgroup" class="text-center align-middle">Status Project</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Estimasi/Realisasi Pendapatan</th>
                                    <th colspan="9" scope="colgroup" class="text-center align-middle">Invoice</th>
                                    <th colspan="10" scope="colgroup" class="text-center align-middle">Delivery Otority</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Form ISO</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">CRM</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">SAP</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">SAP</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">SIKOM</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle">Bulan</th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                    <th rowspan="3" scope="colgroup" class="text-center align-middle"></th>
                                </tr>
                                <tr>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No.SPI</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tanggal</th>
                                    {{-- Project --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">DIVISI</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">STATUS</th>
                                    {{-- Kontrak PO --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Durasi Kontrak</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Sisa Waktu</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Lampiran</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Kode File</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Keterangan/Alamat</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Lokasi Pekerjaan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Personal Kontak</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No Telepon</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Fax</th>
                                    {{-- CRM --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Order No.</th>
                                    {{-- SAP --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Nomor SO</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No WBS</th>
                                    {{-- SIKOM --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">ID No.</th>
                                    {{-- Anggaran --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">OR</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Rencana Biaya</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Keterangan</th>
                                    {{-- Progress Realisasi Pekerjaan --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Progress</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Schedule Invoice</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Keterangan</th>
                                    {{-- Penerbitan Laporan --}}
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Produksi</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Kompetensi</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Pasar</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tahun</th>
                                    <th colspan="4" scope="colgroup" class="text-center align-middle">Code</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No. Laporan</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Tanggal</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Waktu Penyelesaian Report (Hari)</th>
                                    {{-- Prakalkulasi --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Status</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tanggal</th>
                                    {{-- Status Project --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Akan Berjalan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Berjalan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Prakal</th>
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Invoice</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Status</th>
                                    {{-- Estimasi Pendapatan --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">2024</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">2025</th>
                                    {{-- Invoice --}}
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">No. Invoice</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Nilai</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">PPN</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Total</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tgl. Penerbitan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tgl. TTD</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tgl. Pengiriman</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Tgl. Pelunasan</th>
                                    <th rowspan="2" scope="colgroup" class="text-center align-middle">Status</th>
                                    {{-- Delivery Otority --}}
                                    <th colspan="2" scope="colgroup" class="text-center align-middle">Status Dokumen</th>
                                    <th colspan="8" scope="colgroup" class="text-center align-middle">Status Pengiriman</th>
                                </tr>
                                <tr>
                                    <th scope="colgroup" class="text-center align-middle">Portofolio</th>
                                    <th scope="colgroup" class="text-center align-middle">List</th>
                                    <th scope="colgroup" class="text-center align-middle">Produksi</th>
                                    <th scope="colgroup" class="text-center align-middle">Kompetensi</th>
                                    <th scope="colgroup" class="text-center align-middle">Pasar</th>
                                    <th scope="colgroup" class="text-center align-middle">Number</th>
                                    <th scope="colgroup" class="text-center align-middle">Pengambilan No</th>
                                    <th scope="colgroup" class="text-center align-middle">Penyerahan</th>
                                    <th scope="colgroup" class="text-center align-middle">Progress</th>
                                    <th scope="colgroup" class="text-center align-middle">Terbit</th>
                                    <th scope="colgroup" class="text-center align-middle">Laporan</th>
                                    <th scope="colgroup" class="text-center align-middle">Invoice</th>
                                    <th scope="colgroup" class="text-center align-middle">Tgl Pengiriman</th>
                                    <th scope="colgroup" class="text-center align-middle">Tgl Terima</th>
                                    <th scope="colgroup" class="text-center align-middle">Tanda Terima</th>
                                    <th scope="colgroup" class="text-center align-middle"></th>
                                    <th scope="colgroup" class="text-center align-middle"></th>
                                    <th scope="colgroup" class="text-center align-middle"></th>
                                    <th scope="colgroup" class="text-center align-middle"></th>
                                    <th scope="colgroup" class="text-center align-middle">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>99</td>
                                    <td>26/6/2023</td>
                                    <td>PT XYZ Bahagia</td>
                                    <td>ZULFADLI (MARINE)</td>
                                    <td>CARRY OVER 2024</td>
                                    <td>STABILITY BOOKLET, PERHITUNGAN LONGITUDINAL STRENGTH</td>
                                    <td>HULL 001</td>
                                    <td>PO2023/01-0106</td>
                                    <td>20-Jan-23</td>
                                    <td>9,000,000</td>
                                    <td>30</td>
                                    <td>Finish</td>
                                    <td>L01</td>
                                    <td>LL-001</td>
                                    <td>Kawasan Industri</td>
                                    <td>Batam</td>
                                    <td>Hariana</td>
                                    <td>0777 8987</td>
                                    <td>0777 8987</td>
                                    <td>ZulKullo</td>
                                    <td>Orang a, Orang b, Orang c</td>
                                    <td>ORD-001-abc</td>
                                    <td>1000001</td>
                                    <td>00087-BMC-AA</td>
                                    <td>23908</td>
                                    <td>0</td>
                                    <td>66.666.666</td>
                                    <td>Invoice</td>
                                    <td>100%</td>
                                    <td>Ongoing</td>
                                    <td>Ongoing</td>
                                    <td>Marine</td>
                                    <td>(M) Intact and</td>
                                    <td>Survey</td>
                                    <td>BKI</td>
                                    <td>2024</td>
                                    <td>M004</td>
                                    <td>K02</td>
                                    <td>P8</td>
                                    <td>BMC/0001/M00-K4/P8/2024</td>
                                    <td>0320-BMC/fff-k/P8/0987</td>
                                    <td>25/5/2024</td>
                                    <td>20/5/2024</td>
                                    <td>Input</td>
                                    <td>OK</td>
                                    <td>01 January, 2024</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>Invoice</td>
                                    <td>9,000,000</td>
                                    <td>-</td>
                                    <td>0876-BMC/K07/P8/2024</td>
                                    <td>15,000,000</td>
                                    <td>0</td>
                                    <td>15,045,000</td>
                                    <td>4/17/2024</td>
                                    <td>18-Apr-2024</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Pembayaran</td>
                                    <td>-</td>
                                    <td>Siap Kirim</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>Ready</td>
                                    <td>Done</td>
                                    <td>PT XYZ Sejahtera</td>
                                    <td>Zulfadli</td>
                                    <td>109</td>
                                    <td>20-Jan-2024</td>
                                    <td>Finish</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>CARRY OVER 2024</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- MODAL Tambah Data  --}}
    <div class="modal fade" id="adddataproject" tabindex="-1" aria-labelledby="adddataproject" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adddataproject">Create Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center mt-3 p-0">
                                <label for="" class="form-label text-center"><b>Agenda SPI</b><hr></label>
                            </div>
                            {{--  --}}
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

                            {{--  --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tgl" class="form-label">Tanggal</label>
                                <input type="date" name="tgl" class="form-control" id="tgl" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}}
                            <div class="col-12 col-md-12 mb-3">
                                <label for="pemohon" class="form-label">Pemohon / Perusahaan</label>
                                <input type="text" name="pemohon" class="form-control" id="pemohon" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3 p-0">
                                <label for="" class="form-label text-center"><b>Project</b><hr></label>
                            </div>

                            {{--  --}}
                            <div class="col-12 col-md-6 mb-3">
                                <label for="divisi" class="form-label">Divisi</label>
                                <input type="text" name="divisi" class="form-control" id="divisi" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="detail_lingkup" class="form-label">Spesifikasi / Detail Lingkup Pekerjaan</label>
                                <input type="text" name="detail_lingkup" class="form-control" id="detail_lingkup" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nama_proyek" class="form-label">Nama Proyek</label>
                                <input type="text" name="nama_proyek" class="form-control" id="nama_proyek" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="no-po" class="form-label">No. PO</label>
                                <input type="text" name="no-po" class="form-control" id="no-po" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nilai_kontrak" class="form-label">Nilai Kontrak</label>
                                <input type="text" name="nilai_kontrak" class="form-control" id="nilai_kontrak" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Kontrak / PO</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="durasi_kontrak" class="form-label">Durasi Kontrak</label>
                                <input type="text" name="durasi_kontrak" class="form-control" id="durasi_kontrak" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="sisa_waktu" class="form-label">Sisa Waktu</label>
                                <input type="text" name="sisa_waktu" class="form-control" id="sisa_waktu" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="lampiran" class="form-label">Lampiran</label>
                                <input type="text" name="lampiran" class="form-control" id="lampiran" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="kode_file" class="form-label">Kode File</label>
                                <input type="text" name="kode_file" class="form-control" id="kode_file" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="keterangan_alamat" class="form-label">Keterangan / Alamat</label>
                                <input type="text" name="keterangan_alamat" class="form-control" id="keterangan_alamat" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="lokasi_pekerjaan" class="form-label">Lokasi Pekerjaan</label>
                                <input type="text" name="lokasi_pekerjaan" class="form-control" id="lokasi_pekerjaan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="personal_kontak" class="form-label">Personal Kontak</label>
                                <input type="text" name="personal_kontak" class="form-control" id="personal_kontak" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="no_telepon" class="form-label">No. Telepon</label>
                                <input type="number" name="no_telepon" class="form-control" id="no_telepon" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="fax" class="form-label">Fax</label>
                                <input type="number" name="fax" class="form-control" id="fax" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="manager_proyek" class="form-label">Manager Proyek</label>
                                <input type="text" name="manager_proyek" class="form-control" id="manager_proyek" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="anggota" class="form-label">Anggota Team</label>
                                <input type="text" name="anggota" class="form-control" id="anggota" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>CRM , SAP & SIKOM</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="order_no" class="form-label">Order No.</label>
                                <input type="text" name="order_no" class="form-control" id="order_no" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nomor_so" class="form-label">Nomor SO</label>
                                <input type="text" name="nomor_so" class="form-control" id="nomor_so" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="no_wbs" class="form-label">No WBS</label>
                                <input type="text" name="no_wbs" class="form-control" id="no_wbs" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="id_no" class="form-label">ID No.</label>
                                <input type="text" name="id_no" class="form-control" id="id_no" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Anggaran</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="or" class="form-label">OR</label>
                                <input type="text" name="or" class="form-control" id="or" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="rencana_biaya" class="form-label">Rencana Biaya</label>
                                <input type="text" name="rencana_biaya" class="form-control" id="rencana_biaya" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Progress Realisasi Pekerjan</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="progress" class="form-label">Progress</label>
                                <input type="text" name="progress" class="form-control" id="progress" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="schedule" class="form-label">Schedule Invoice</label>
                                <input type="text" name="schedule" class="form-control" id="schedule" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Penerbitan Laporan</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="portfolio" class="form-label">Portofolio</label>
                                <input type="text" name="portfolio" class="form-control" id="portfolio" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="list" class="form-label">List</label>
                                <input type="text" name="list" class="form-control" id="list" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="kompetensi" class="form-label">Kompetensi</label>
                                <input type="text" name="kompetensi" class="form-control" id="kompetensi" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="pasar" class="form-label">Pasar</label>
                                <input type="text" name="pasar" class="form-control" id="pasar" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="text" name="tahun" class="form-control" id="tahun" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="produksi" class="form-label">Code - Produksi</label>
                                <input type="text" name="produksi" class="form-control" id="produksi" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="kompetensi" class="form-label">Code - Kompetensi</label>
                                <input type="text" name="kompetensi" class="form-control" id="kompetensi" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="pasar" class="form-label">Code - Pasar</label>
                                <input type="text" name="pasar" class="form-control" id="pasar" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="number" class="form-label">Code - Number</label>
                                <input type="text" name="number" class="form-control" id="number" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="no_laporan" class="form-label">No. Laporan</label>
                                <input type="text" name="no_laporan" class="form-control" id="no_laporan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="pengambilan_no" class="form-label">Pengambilan No</label>
                                <input type="date" name="pengambilan_no" class="form-control" id="pengambilan_no" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="penyerahan" class="form-label">Penyerahan</label>
                                <input type="date" name="penyerahan" class="form-control" id="penyerahan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="waktu_penyelesaian" class="form-label">Waktu Penyelesian Report (Hari)</label>
                                <input type="text" name="waktu_penyelesaian" class="form-control" id="waktu_penyelesaian" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Prakalkulasi</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" id="tanggal" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Status Project</b><hr></label>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="akanberjalan" class="form-label">Akan Berjalan</label>
                                <input type="text" name="akanberjalan" class="form-control" id="akanberjalan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="berjalan" class="form-label">Berjalan</label>
                                <input type="text" name="berjalan" class="form-control" id="berjalan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="prakal" class="form-label">Prakal</label>
                                <input type="text" name="prakal" class="form-control" id="prakal" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="progress" class="form-label">Progress</label>
                                <input type="text" name="progress" class="form-control" id="progress" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="terbit" class="form-label">Terbit</label>
                                <input type="text" name="terbit" class="form-control" id="terbit" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Estimasi/Realisasi Pendapatan</b><hr></label>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="2024" class="form-label">2024</label>
                                <input type="text" name="2024" class="form-control" id="2024" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="2025" class="form-label">2025</label>
                                <input type="text" name="2025" class="form-control" id="2025" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Invoice</b><hr></label>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="no_invoice" class="form-label">No. Invoice</label>
                                <input type="text" name="no_invoice" class="form-control" id="no_invoice" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <input type="text" name="nilai" class="form-control" id="nilai" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="ppn" class="form-label">PPN</label>
                                <input type="text" name="ppn" class="form-control" id="ppn" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="total" class="form-label">Total</label>
                                <input type="text" name="total" class="form-control" id="total" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglpenerbitan" class="form-label">Tgl. Penerbitan</label>
                                <input type="date" name="tglpenerbitan" class="form-control" id="tglpenerbitan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglttd" class="form-label">Tgl. TTD</label>
                                <input type="date" name="tglttd" class="form-control" id="tglttd" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglpengirim" class="form-label">Tgl. Pengiriman</label>
                                <input type="date" name="tglpengirim" class="form-control" id="tglpengirim" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglpelunasan" class="form-label">Tgl. Pelunasan</label>
                                <input type="date" name="tglpelunasan" class="form-control" id="tglpelunasan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            <div class="col-12 d-flex justify-content-center mt-3">
                                <label for="" class="form-label text-center"><b>Delivery Otority</b><hr></label>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="laporan" class="form-label">Laporan</label>
                                <input type="text" name="laporan" class="form-control" id="laporan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="invoice" class="form-label">Invoice</label>
                                <input type="text" name="invoice" class="form-control" id="invoice" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglpengiriman" class="form-label">Tgl Pengiriman</label>
                                <input type="date" name="tglpengiriman" class="form-control" id="tglpengiriman" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tglterima" class="form-label">Tgl Terima</label>
                                <input type="date" name="tglterima" class="form-control" id="tglterima" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="tandaterima" class="form-label">Tanda Terima</label>
                                <input type="text" name="tandaterima" class="form-control" id="tandaterima" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="formiso" class="form-label">Form ISO</label>
                                <input type="text" name="formiso" class="form-control" id="formiso" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="text" name="-" class="form-control" id="-" placeholder="PT XYZ xxxxx" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="text" name="-" class="form-control" id="-" placeholder="Zulxxxx" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" placeholder="109" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="date" name="-" class="form-control" id="-" placeholder="25/5/2024" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="text" name="-" class="form-control" id="-" placeholder="Finish" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="crm" class="form-label">CRM</label>
                                <input type="number" name="crm" class="form-control" id="crm" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="SAP" class="form-label">SAP</label>
                                <input type="number" name="SAP" class="form-control" id="SAP" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="SAP" class="form-label">SAP</label>
                                <input type="number" name="SAP" class="form-control" id="SAP" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="sikom" class="form-label">SIKOM</label>
                                <input type="number" name="sikom" class="form-control" id="sikom" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
                            
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="bulan" class="form-label">Bulan</label>
                                <input type="number" name="bulan" class="form-control" id="bulan" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>
 
                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="text" name="-" class="form-control" id="-" placeholder="CARRY COVER 2024" required>
                                <div class="invalid-feedback">The field cannot be empty !</div>
                            </div>

                            {{--  --}} 
                            <div class="col-12 col-md-12 mb-3">
                                <label for="-" class="form-label">-</label>
                                <input type="number" name="-" class="form-control" id="-" placeholder="0" required>
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
@endsection
@push('js')
    <script>
        $('#example1').DataTable();
        $('#example1_wrapper').css('font-family', 'Nunito, sans-serif');
    </script>
@endpush
