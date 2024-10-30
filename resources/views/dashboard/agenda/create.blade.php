@extends('partials.header')
@section('content')
<style>
    .card{
        font-family: "Poppins", sans-serif;
    }
    .card-body{
        font-size: 17px;
        margin-top: 10px;
    }
    .card-title{
        padding: 10px 0 0 0;
        font-size: 20px;
    }
    @media (max-width: 767px) {
        .card-body{
            font-size: 16px;
            margin-top: 10px;
        }
        .card-title{
            font-size: 18px;
        }
    }
</style>
<div class="row">
    <div class="mb-3">
        <a href="{{route('invoice')}}" class="btn btn-primary col-12 mx-auto"> <i class="fas fa-arrow-left" style="margin-right: 3px;"> </i>Back</a>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">Create Invoice</h5>
        </div>
        <div class="card-body">
            <form action="{{route('invoice.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="">NO Surat / Performance Invoice</label>
                    <input type="text" class="form-control" name="no_invoice" value="{{old('no_invoice')}}">
                    @error('no_invoice')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" name="date" value="{{old('date')}}">
                    @error('date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="company_name" value="{{old('company_name')}}">
                    @error('company_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Nama Pekerjaan</label>
                    <input type="text" class="form-control" name="job_name" value="{{old('job_name')}}">
                    @error('job_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Nilai Pekerjaan</label>
                    <input type="text" class="form-control" name="value" value="{{old('value')}}">
                    @error('value')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Penerbitan</label>
                    <input type="text" class="form-control" name="penerbitan" value="{{old('penerbitan')}}">
                    @error('penerbitan')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">NO. SPI</label>
                    <input type="text" class="form-control" name="spi" value="{{old('spi')}}">
                    @error('spi')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="">Pelunasan</label>
                    <input type="text" class="form-control" name="pelunasan" value="{{old('pelunasan')}}">
                    @error('pelunasan')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Save<i class="bi bi-send" style="margin-left: 5px;"></i></button>
                </div>
            </form>
        </div>
    </div>
    
</div>
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
@endpush
