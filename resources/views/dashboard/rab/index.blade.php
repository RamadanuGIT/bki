@extends('partials.header')
@section('content')
    <style>
        .form-label{
            font-family: "Poppins", sans-serif;
        }
        .form-control,
        .btn{
            font-family: "Nunito", sans-serif;
        }
        .model-title{
            font-family: "Nunito", sans-serif;
        }
        .card{
            font-family: "Nunito", sans-serif;
        }
        .modal-footer {
            text-align: center;
        }
        h6{
            font-family: "Poppins", sans-serif;
        }
        .card-title{
            padding: 10px 0 0 0;
            font-size: 20px;
        }
        .card-body{
            font-size: 17px;
            margin-top: 10px;
        }
        .span-title{
            color: #af0000;
        }
        .span-name{
            font-weight: 700;
        }

        .form-group {
            display: flex;
            align-items: center; /* Vertically center the label and input */
            margin-bottom: 2px;
        }

        .form-label {
            margin-right: 10px; /* Space between label and input */
        }

        .form-percent {
            width: 70px; /* Atur lebar input sesuai kebutuhan */
            height: 30px;
            margin-bottom: 10px;
        }
        .tambahdata {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .tambahdata:hover {
            background-color: #0056b3;
            color: #a0a0a0;
        }
        .section-header{
            font-weight: bold;
        }
        .submit-form{
            margin-top: 100px;
        }
        hr{
            border: none;
        }
        
        @media (max-width: 767px) {
            .card-body{
                font-size: 16px;
            }
            .card-title{
                font-size: 16px;
            }
            .nameincard{
                font-size: 11px;
            }
            .card-2{
                font-size: 11px;
            }
            tr, th, td {
                font-size: 12px;
                padding: 4px;
            }
            th:nth-child(2), td:nth-child(2) {
                width: 40%;
            }
            th:nth-child(1), td:nth-child(1),
            th:nth-child(3), td:nth-child(3),
            th:nth-child(4), td:nth-child(4) {
                width: 20%; 
            }
        }
    </style>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Form RAB (Rencana Anggaran dan Biaya)</h5>
                </div>
                <div class="card-body">
                    <form class="row g-3" id="" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 col-12">
                            <label for="sbucabang" class="form-label">SBU / Cabang</label>
                            <input type="text" class="form-control" id="sbucabang" name="sbucabang" placeholder="Cabang Madya Komersil xxxxx" value=""  ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="namaklien" class="form-label">Nama Klien</label>
                            <input type="text" class="form-control" id="namaklien" name="namaklien" placeholder="PT XYZ" value="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="namaproyek" class="form-label">Nama Proyek</label>
                            <input type="text" class="form-control" id="namaproyek" name="namaproyek" placeholder="Hull xxxx" value="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="nomorproyek" class="form-label">Nomor Proyek</label>
                            <input type="number" class="form-control" id="nomorproyek" name="nomorproyek" placeholder="44xxx" value="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="nomororder" class="form-label">Nomor Order</label>
                            <input type="number" class="form-control" id="nomororder" name="nomororder" placeholder="00001" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="periodepelaksanaan" class="form-label">Periode Pelaksanaan</label>
                            <input type="date" class="form-control" id="periodepelaksanaan" name="periodepelaksanaan" placeholder="04-Jan-24" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="sampaidengan" class="form-label">s.d</label>
                            <input type="date" class="form-control" id="sampaidengan" name="sampaidengan" placeholder="04-Mar-2024" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                        </div>
                        <hr>
                        <div class="col-md-6 col-12">
                            <label for="pendapatan" class="form-label">Pendapatan (Excluding PPN)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="pendapatan" name="pendapatan" aria-label="pendapatan" aria-describedby="basic-addon1" placeholder="20,000,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="ppn" class="form-label">PPN 11%</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="ppn" name="ppn" aria-label="ppn" aria-describedby="basic-addon1" placeholder="2,200,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="pph" class="form-label">PPH 23 2%</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="pph" name="pph" aria-label="pph" aria-describedby="basic-addon1" placeholder="400,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="pendapatan2" class="form-label">Pendapatan (Excluding Tanpa PPN & PPH 23) </label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="pendapatan2" name="pendapatan2" aria-label="pendapatan2" aria-describedby="basic-addon1" placeholder="19,600,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-5">
                            <label for="title" class="form-label text-center" style="font-family: 'Nunito', sans-serif;"><b>BEBAN JASA (Biaya Langsung)</b><hr></label>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="pds" class="form-label">Perjalanan Dinas(PDS)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="pds" name="pds" aria-label="pds" aria-describedby="basic-addon1" placeholder="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="material" class="form-label">Material / Perlengkapan Kerja</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="material" name="material" aria-label="material" aria-describedby="basic-addon1" placeholder="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="personel" class="form-label">Personel (Tenaga Proyek)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="personel" name="personel" aria-label="personel" aria-describedby="basic-addon1" placeholder="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="mob&demob" class="form-label">Mob & Demob</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="mob&demob" name="mob&demob" aria-label="mob&demob" aria-describedby="basic-addon1" placeholder="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="input" class="form-label">Kerjasama Pihak ke 3</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input" name="input" aria-label="input" aria-describedby="basic-addon1" placeholder="" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="input1" class="form-label">Pelaporan / Reporting</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input1" name="input1" aria-label="input1" aria-describedby="basic-addon1" placeholder="700,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="input2" class="form-label">Persiapan Proyek</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input2" name="input2" aria-label="input2" aria-describedby="basic-addon1" placeholder="10,000,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            {{-- <label for="input3" class="form-label">Total Biaya Langsung <small>Max 53,8%</small></label> --}}
                            <div class="form-group">
                                <label for="input3" class="form-label">Total Biaya Langsung <small>Max 53,8%</small></label>
                                <input type="text" class="form-control form-percent" id="input3" name="input3" placeholder="52%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input4" name="input4" aria-label="input4" aria-describedby="basic-addon1" placeholder="10,700,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>

                        <div class="col-md-6 col-6">
                            <label for="input5" class="form-label">Laba Operasi</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input5" name="input5" aria-label="input5" aria-describedby="basic-addon1" placeholder="9,300,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="input6" class="form-label">Gross Margin (%)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">%</span>
                                <input type="text" class="form-control" id="input6" name="input6" aria-label="input6" aria-describedby="basic-addon1" placeholder="46.5%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>

                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="input7" class="form-label">Beban Adum Unit Produksi + OH Kantor Pusat <small>Min 30%</small></label>
                                <input type="text" class="form-control form-percent" id="input7" name="input7" placeholder="25%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input8" name="input8" aria-label="input8" aria-describedby="basic-addon1" placeholder="5,000,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="form-group">
                                <label for="input9" class="form-label">Pencadangan<small>Min 4%</small></label>
                                <input type="text" class="form-control form-percent" id="input9" name="input9" placeholder="4.0%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input10" name="input10" aria-label="input10" aria-describedby="basic-addon1" placeholder="800,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="input11" class="form-label">Total Beban</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input11" name="input11" aria-label="input11" aria-describedby="basic-addon1" placeholder="16,500,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="input12" class="form-label">Laba Sebelum Pajak</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input12" name="input12" aria-label="input12" aria-describedby="basic-addon1" placeholder="3,500,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="input13" class="form-label">Profit Margin (%)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">%</span>
                                <input type="text" class="form-control" id="input13" name="input13" aria-label="input13" aria-describedby="basic-addon1" placeholder="17.5%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="input14" class="form-label">PPh Badan (28%)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input14" name="input14" aria-label="input14" aria-describedby="basic-addon1" placeholder="980,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="input15" class="form-label">Laba Setelah Pajak</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input15" name="input15" aria-label="input15" aria-describedby="basic-addon1" placeholder="2,520,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="input16" class="form-label">Profit Margin (%)</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">%</span>
                                <input type="text" class="form-control" id="input16" name="input16" aria-label="input16" aria-describedby="basic-addon1" placeholder="12.60%" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <label for="input17" class="form-label">Investments</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control" id="input17" name="input17" aria-label="input17" aria-describedby="basic-addon1" placeholder="2,520,000" ><!--required--><!--Aktifkan required jika di butuhkan atau dapat di atur pada backend-->
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive  mt-2" style="overflow-x: auto; width: 100%;">
                            <table style="width: 100%; table-layout: auto;">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>LINGKUP KERJA</th>
                                        <th>DURASI (BULAN)</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">I</td>
                                        <td style="background-color: #c5c5c5;">INISIASI PROYEK</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Persiapan perolehan proyek</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pembuatan penawaran harga</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">II</td>
                                        <td style="background-color: #c5c5c5;">Perencanaan Proyek</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Rencana kerja / rencana inspeksi</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Persiapan SDM</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pemetaan lokasi proyek</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Persiapan manager proyek</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Persiapan peralatan kerja</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Persiapan fasilitas kerja</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">III</td>
                                        <td style="background-color: #c5c5c5;">PELAKSANAAN PROYEK</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Pengiriman dan penguasaan inspektor / Supir</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder=" Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Operasional</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Pelaporan hasil</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Input DO dan pembayaran</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">IV</td>
                                        <td style="background-color: #c5c5c5;">PEMANTAUAN DAN PENGENDALIAN PROYEK</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Pemantauan pekerjaan dengan invoice</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">V</td>
                                        <td style="background-color: #c5c5c5;">PENUTUPAN PROYEK</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Evaluasi hasil pelaksanaan proyek</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Serah terima hasil pekerjaan</td>
                                        <td><input type="number" placeholder="Durasi" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" placeholder="Keterangan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        {{-- <button class="btn" id="addButton">Tambah Input</button> --}}
                        {{-- <div id="inputContainer">
                            <label for="sbucabang" class="form-label">SBU / Cabang</label>
                            <input type="text" class="form-control" id="sbucabang" name="sbucabang" placeholder="Cabang Madya Komersil xxxxx" value=""  >
                        </div> --}}

                        
                        <div class="table-responsive" style="overflow-x: auto; width: 100%;">
                            <table id="teamTable" style="width: 100%; table-layout: auto;">
                                <tr class="header">
                                    <th colspan="8">TEAM PELAKSANA</th>
                                </tr>
                                <tr>
                                    <th class="timpelaksana">NO.</th>
                                    <th class="timpelaksana">Jumlah</th>
                                    <th class="timpelaksana">Posisi</th>
                                    <th class="timpelaksana">Nama</th>
                                    <th class="timpelaksana">Dari</th>
                                    <th class="timpelaksana">Durasi</th>
                                    <th class="timpelaksana">Lokasi</th>
                                    <th class="timpelaksana">Ket</th>
                                </tr>
                                <tr>
                                    <td><input type="number" placeholder="No." style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="number" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Posisi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Nama" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Dari" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Durasi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Lokasi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Ket" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" class="tambahdata" id="addRow" style="text-align: center;">Tambah Data Anggota</a>

                        <div class="table-responsive mt-3" style="overflow-x: auto; width: 100%;">
                            <table id="teamTable1" style="width: 100%; table-layout: auto;">
                                <tr class="header">
                                    <th colspan="6">AGGARAN BIAYA</th>
                                </tr>
                                <tr>
                                    <th class="timpelaksana">No.</th>
                                    <th class="timpelaksana">Uraian</th>
                                    <th class="timpelaksana">Hari</th>
                                    <th class="timpelaksana">Orang</th>
                                    <th class="timpelaksana">Estimasi Harga Satuan</th>
                                    <th class="timpelaksana">Jumlah</th>
                                </tr>
                                <tr>
                                    <td><input type="number" placeholder="No." style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Uraian" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Hari" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Orang" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Estimasi Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    <td><input type="text" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                </tr>
                            </table>
                        </div>
                        <a href="#" class="tambahdata" id="addRow1" style="text-align: center;">Tambah Data Anggaran Biaya</a>

                        <div class="table-responsive " style="overflow-x: auto; width: 100%; margin-top: 100px;">
                            <table style="width: 100%; table-layout: auto;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Uraian</th>
                                        <th>Ban / Litre / Can</th>
                                        <th>Unit</th>
                                        <th>Bulan</th>
                                        <th>Estimasi Harga Satuan</th>
                                        <th>Rp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">II</td>
                                        <td style="background-color: #c5c5c5;">Biaya material / perlengkapan kerja</td>
                                        <td colspan="5" style="background-color: #c5c5c5;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Spare Part Ban</td>
                                        <td><input type="number" name="volume1" placeholder="Volume" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit1" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="hargaSatuan1" placeholder="Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Spare Part Oil</td>
                                        <td><input type="number" name="volume1" placeholder="Volume" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit1" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="hargaSatuan1" placeholder="Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Spare Part Per</td>
                                        <td><input type="number" name="volume1" placeholder="Volume" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit1" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="hargaSatuan1" placeholder="Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Spare Part Filter Oil</td>
                                        <td><input type="number" name="volume1" placeholder="Volume" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit1" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="hargaSatuan1" placeholder="Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">III</td>
                                        <td style="background-color: #c5c5c5;">Beban personel / tenaga kerja langsung</td>
                                        <td style="background-color: #c5c5c5;">Hari / Jam</td>
                                        <td style="background-color: #c5c5c5;">Orang</td>
                                        <td style="background-color: #c5c5c5;">Bulan</td>
                                        <td style="background-color: #c5c5c5;">Rp</td>
                                        <td ><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><b>Beban Gaji & PPh</b></td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Manager Proyek</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Team Leader (Inspektor)</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Asst. Inspektor</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Helper</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pembuatan Gambar</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Adm Keuangan</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><b>Asuransi, biaya kesehatan & uang makan</b></td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>BPJS Ketenagakerjaan</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>BPJS Kesehatan</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Asuransi Jiwa</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><b>Insentif & THR</b></td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Manager Proyek</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Team Leader (Inspektor)</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"> </td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Asst. Inspektor</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Helper</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pembuatan Gambar</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Adm Keuangan</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><b>Biaya Lembur</b></td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Manager Proyek</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Team Leader (Inspektor)</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Asst. Inspektor</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Helper</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pembuatan Gambar</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Adm Keuangan</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><b>Tunjangan Jabatan</b></td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Project Manager</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Team Leader (Inspektor)</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Asst. Inspektor</td>
                                        <td><input type="number" name="hari" placeholder="Hari / Jam" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="orang" placeholder="Orang" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">IV</td>
                                        <td style="background-color: #c5c5c5;">Biaya mob demob</td>
                                        <td style="background-color: #c5c5c5;">Hari</td>
                                        <td style="background-color: #c5c5c5;">Unit</td>
                                        <td style="background-color: #c5c5c5;">Bulan</td>
                                        <td style="background-color: #c5c5c5;">Rp</td>
                                        <td ><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Transportasi (BBM, e-Toll, Grab/Go Car)</td>
                                        <td><input type="number" name="hari" placeholder="Hari" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sewa Mobil Operasional</td>
                                        <td><input type="number" name="hari" placeholder="Hari" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">V</td>
                                        <td style="background-color: #c5c5c5;">Biaya pihak ketiga</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;">Unit</td>
                                        <td style="background-color: #c5c5c5;">Bulan</td>
                                        <td style="background-color: #c5c5c5;">Rp</td>
                                        <td ><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Production Test</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>MPS</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">VI</td>
                                        <td style="background-color: #c5c5c5;">Biaya reporting / pelaporan</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;">Unit</td>
                                        <td style="background-color: #c5c5c5;">Bulan</td>
                                        <td style="background-color: #c5c5c5;">Rp</td>
                                        <td ><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Laporan Inspeksi / Digitalisasi</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Jilid</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Catridge</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="bulan1" placeholder="Bulan" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td style="background-color: #c5c5c5;">VII</td>
                                        <td style="background-color: #c5c5c5;">Biaya persiapan proyek</td>
                                        <td style="background-color: #c5c5c5;"></td>
                                        <td style="background-color: #c5c5c5;">Unit</td>
                                        <td style="background-color: #c5c5c5;">Ls</td>
                                        <td style="background-color: #c5c5c5;">Rp</td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Biaya Pemasaran</td>
                                        <td></td>
                                        <td><input type="number" name="unit" placeholder="Unit" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="number" name="ls" placeholder="Ls" min="0" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="rp" placeholder="Rp" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                    <tr class="section-header">
                                        <td colspan="6" style="text-align: center; background-color: #c5c5c5;">TOTAL BIAYA LANGSUNG</td>
                                        <td><input type="text" name="jumlah1" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Button Form --}}
                        <div class="text-center submit-form">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary" id="submit-button">Submit<i class="bi bi-send" style="margin-left: 3px;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    document.getElementById('addButton').addEventListener('click', function() {
        // Buat elemen baru untuk input
        const newInputGroup = document.createElement('div');
        newInputGroup.className = 'form-group';
        
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.className = 'form-control';
        newInput.placeholder = 'Masukkan data';
        newInput.required = true;

        // Tambahkan input ke dalam grup
        newInputGroup.appendChild(newInput);
        
        // Tambahkan grup input ke dalam container
        document.getElementById('inputContainer').appendChild(newInputGroup);
        
    });
</script>
<script>
    document.getElementById('addRow').addEventListener('click', function() {
        event.preventDefault();
        var table = document.getElementById('teamTable');
        var newRow = table.insertRow(-1);
        
        newRow.innerHTML = `
            <td><input type="number" placeholder="No." style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="number" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Posisi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Nama" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Dari" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Durasi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Lokasi" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Ket" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
        `;
    });
</script>
<script>
    document.getElementById('addRow1').addEventListener('click', function() {
        event.preventDefault();
        var table = document.getElementById('teamTable1');
        var newRow = table.insertRow(-1);
        
        newRow.innerHTML = `
            <td><input type="number" placeholder="No." style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Uraian" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Hari" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Orang" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Estimasi Harga Satuan" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
            <td><input type="text" placeholder="Jumlah" style=" padding: 10px; border: 1px solid #ccc; border-radius: 4px;"></td>
        `;
    });
</script>
<script>
    $('#example1').DataTable();
    $('#example1_wrapper').css('font-family', 'Nunito, sans-serif');
</script>
@endpush
