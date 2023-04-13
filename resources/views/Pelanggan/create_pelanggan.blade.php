@extends('layouts.templates')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tabel Pelanggan</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ $url_form}}">
                @csrf
                {!! (isset($Pelanggan))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Kode Pelanggan</label>
                    <input class="form-control @error('kode_pelanggan') is-invalid @enderror" value="{{isset($Pelanggan)? $Pelanggan->kode_pelanggan : old('kode_pelanggan') }}" name="kode_pelanggan" type="text" />
                    @error('kode_pelanggan')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input class="form-control @error('nama_pelanggan') is-invalid @enderror" value="{{isset($Pelanggan)? $Pelanggan->nama_pelanggan : old('nama_pelanggan') }}" name="nama_pelanggan" type="text" />
                    @error('nama_pelanggan')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" {{isset($Pelanggan) && $Pelanggan->jenis_kelamin == "Laki-laki" ? "checked" : ""}}>Laki-laki</label><br>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" {{isset($Pelanggan) && $Pelanggan->jenis_kelamin == "Perempuan" ? "checked" : ""}}>Perempuan</label><br>
                     @error('jenis_kelamin')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Alamat Pelanggan</label>
                    <input class="form-control @error('alamat_pelanggan') is-invalid @enderror" value="{{isset($Pelanggan)? $Pelanggan->alamat_pelanggan : old('alamat_pelanggan') }}" name="alamat_pelanggan" type="text" />
                    @error('hobi')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nomor HP Pelanggan</label>
                    <input class="form-control @error('hp') is-invalid @enderror" value="{{isset($Pelanggan)? $Pelanggan->hp: old('hp') }}" name="hp" type="text" />
                    @error('hp')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Riwayat Peminjaman</label>
                    <input class="form-control @error('riwayat_peminjaman') is-invalid @enderror" value="{{isset($Pelanggan)? $Pelanggan->riwayat_peminjaman: old('riwayat_peminjaman') }}" name="riwayat_peminjaman" type="text" />
                    @error('riwayat_peminjaman')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
              <!-- /.card-body -->
            {{-- <div class="card-body">
            <div class="card-footer"> --}}
                {{-- <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>kode_pelanggan</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Hobi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Pelanggan as $no => $h)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$h->kode_pelanggan}}</td>
                                <td>{{$h->umur}}</td>
                                <td>{{$h->jenis_kelamin}}</td>
                                <td>{{$h->hobi}}</td>
                                <td>{{$h->kategori}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}
            </div>

        </div>

    </section>
    <!-- /.content -->
</div>
@endsection

@push('custom_js')
    <script>
    </script>
@endpush
