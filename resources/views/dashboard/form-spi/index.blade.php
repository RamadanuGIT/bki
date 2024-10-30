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
        .row-border{
            border: 1px solid #d4d4d4;
            margin: 0;
            padding: 0;
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
        }
    </style>
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Form SPI (Surat Penunjukkan Inspector)</h5>
                </div>
                <div class="card-body">
                    <form class="row g-3" id="" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 col-6">
                            <label for="no_surat" class="form-label">No.Surat</label>
                            <input type="number" class="form-control" id="no_surat" name="no_surat" placeholder="001" value="" required>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="tgl" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" value="" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="kepada_name" class="form-label">Kepada</label>
                            <input type="text" class="form-control" id="kepada_name" name="kepada_name" placeholder="Mamat Sudrajat" value=""  required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="nama_anggota" class="form-label">Anggota Team</label>
                            <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Ivan / Igun / Jajang" value="" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="nama-perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama-perusahaan" name="nama-perusahaan" placeholder="PT. XYZ INDUSTRIES" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jln. Xyz Blok A No.1" required>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="no_tlpn" class="form-label">No. Telpon</label>
                            <input type="number" class="form-control" id="no_tlpn" name="no_tlpn" placeholder="0777 123456" required>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="fax" class="form-label">Fax</label>
                            <input type="number" class="form-control" id="fax" name="fax" placeholder="0777 123456" required>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="personal_kontak" class="form-label">Personal Kontak</label>
                            <input type="text" class="form-control" id="personal_kontak" name="personal_kontak" placeholder="Sudrajat" required>
                        </div>
                        <div class="col-md-6 col-6">
                            <label for="proyek_name" class="form-label">Nama Proyek</label>
                            <input type="text" class="form-control" id="proyek_name" name="proyek_name" placeholder="HHP - 000" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="spk" class="form-label">SPK/Kontrak/Surat No</label>
                            <input type="text" class="form-control" id="spk" name="spk" placeholder="11-xxxxxxx" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Batam" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="spesifikasi_lingkup" class="form-label">Spesifikasi/ Detail Lingkup Pekerjaan</label>
                            <input type="text" class="form-control" id="spesifikasi_lingkup" name="spesifikasi_lingkup" placeholder="KEEL XXXXXXX" required>
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="catatan" class="form-label">Catatan</label>
                            <textarea type="text" class="form-control" id="catatan" name="catatan" required></textarea>
                        </div>

                        {{-- Button Form --}}
                        <div class="text-center">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                            <button type="submit" class="btn btn-primary" id="submit-button">Submit<i class="bi bi-send" style="margin-left: 3px;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mx-auto">
            <div class="card">
                <div class="card-body nameincard">
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>M. RYAN ANDHIKA, Amd</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>N1</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>NDT</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>KADAR PATTONRA</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>N2</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>MIGAS</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>IRVAN ISKANDAR, ST</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>N3</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>NAKER</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>ZULFADLI</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>N5</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>MARINE</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>SULTAN ABBAS DANGKENG (KOORDINATOR) ANGGOTA TEAM LAODE BANGSAWAN</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>N5</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>LAB</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-6 mx-auto">
                            <span class="span-1"><b>MARISANDI,AGUS SALEH & ASYARI</b></span>
                        </div>
                        <div class="col-md-2 col-lg-2 col-3 mx-auto">
                            <span class="span-1"><b>X-RAY</b></span>
                        </div>
                        <div class="col-3 mx-auto">
                            <span class="span-1"><b>RADIOGRAPHY</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body card-2">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-5 mx-auto">
                            <span class="span-1"><b>LAB</b></span>
                        </div>
                        <div class="col-md-8 col-lg-8 col mx-auto">
                            <span class="span-1"><b>LAODE BANGSAWAN / AHMAD YAINI</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-md-4 col-lg-4 col-5 mx-auto">
                            <span class="span-1"><b>RADIOGRAPHY</b></span>
                        </div>
                        <div class="col-md-8 col-lg-8 col mx-auto">
                            <span class="span-1"><b>AGUS SALEH / AHMAD ASYARI/MARISANDI</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-md-4 col-lg-4 col-5 mx-auto">
                            <span class="span-1"><b>NDT</b></span>
                        </div>
                        <div class="col-md-8 col-lg-8 col mx-auto">
                            <span class="span-1"><b>HENDRA/ARY/JULAIDI/LIDYA</b></span>
                        </div>
                    </div>
                    <div class="row"><hr>
                        <div class="col-md-4 col-lg-4 col-5 mx-auto">
                            <span class="span-1"><b>MIGAS </b></span>
                        </div>
                        <div class="col-md-8 col-lg-8 col mx-auto">
                            <span class="span-1"><b>BERMAN/TEGUH</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span class="span-title"><b>UT THICKNESS</b></span>
                    <ul>
                        <li>Koordinasikan dengan Surveyor / Galang</li>
                        <li>Draft thickness segera disampaikan ke surveyor & galangan / owner</li>
                        <li>Cover laporan agar dilengkapi foto kapal</li>
                        <li>Laporan segera dibuat</li>
                        <span class="span-name">ANGGA/HENDRY/ARY/JULIDI</span>
                    </ul>
                    <span class="span-title"><b>UT FLAW/MPI/PENETRANT/MEGGER</b></span>
                    <ul>
                        <li>Koordinasikan dengan Surveyor / Galangan / Owner</li>
                        <li>Laksanakan sesuai prosedur NDT BKI / Megger test BKI</li>
                        <li>Laporan segera dibuat</li>
                    </ul>
                    <br>
                    <span class="span-title"><b>TANK KALIBRASI/SOUNDING </b></span>
                    <ul>
                        <li>Verifikasi gambar general arrangement lines plan & posisi sounding</li>
                        <li>Verifikasi sample pada saat pengisian</li>
                        <li>Laporan segera dibuat</li>
                        <span class="span-name">AHDIYAR/IKBAR/ISMAIL/FAHRUL/MULIADI</span>
                        <li>Laksanakan Draft Survey</li>
                        <li>Koordinasikan dgn surveyor/galangan/owner</li>
                        <li>Laporan segera dibuat</li>
                    </ul>
                    <span class="span-title"><b>MECHANICAL TESTING</b></span>
                    <ul>
                        <li>Laksanakan sesuai rule BKI Vol V</li>
                        <li>Koordinasikan dengan Surveyor ( Witness )</li>
                        <li>Penanganan test pises agar sesuai prosedur</li>
                        <li>Laporan segera dibuat</li>
                    </ul>
                    <span class="span-title"><b>LIFTING GEAR / N3</b></span>
                    <ul>
                        <li>Laksanakan sesuai prosedur & spesifikasi yang diminta</li>
                        <li>Sertifikat / laporan segera dibuat</li>
                        <li>Laksanakan pemeriksaan visual & NDT PIECE BY PIECE</li>
                        <li>Laporan segera dibuat</li>
                        <span class="span-name">HELPI TORONG/PAJAR/SUDIRMAN/YASMIN/LUCKY/SURYA/AFRIAN</span>
                    </ul>
                    <span class="span-title"><b>BOLLARD TEST</b></span>
                    <ul>
                        <li>Koordinasikan dengan Surveyor & Galangan </li>
                        <li>Pastikan panjang tali dan kedalaman perairan sesuai prosedur</li>
                        <li>Laksanakan secara bertahap sampai dengan FULL MCR</li>
                        <li>Laporan segera dibuat</li>
                        <span class="span-name">AHDIYAR/IKBAR/FAHRUL</span>
                    </ul>

                    <span class="span-title"><b>INCLEANING TEST</b></span>
                    <ul>
                        <span class="span-name">IKBAR/ISMAIL/AHDIYAR/MULIADI</span>
                    </ul>

                    <span class="span-title"><b>FUEL OIL COMPT</b></span>
                    <ul>
                        <span class="span-name">ARI/FAHRUL/ISMAIL</span>
                    </ul>

                    <span class="span-title"><b>NON.STAB.SOUND.BOLLARD.DRAWING</b></span>
                    <ul>
                        <span class="span-name">AHDIYAR/MULIADI/IKBAR</span>
                    </ul>

                    <span class="span-title"><b>RE DRAWING</b></span>
                    <ul>
                        <span class="span-name">AHDIYAR/IKBAR/FAHRUL</span>
                    </ul>

                    <span class="span-title"><b>DISPLACEMENT TABLE</b></span>
                    <ul>
                        <span class="span-name">MULIADI/IKBAR/FAHRUL</span>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @push('js')
@endpush --}}
