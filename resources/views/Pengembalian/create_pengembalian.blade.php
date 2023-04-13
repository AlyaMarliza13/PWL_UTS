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
                <h3 class="card-title">Tabel Pengembalian</h3>

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
                {!! (isset($pengembalian))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Kode Film</label>
                    <input class="form-control @error('kode_film') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->kode_film : old('kode_film') }}" name="kode_film" type="text" />
                    @error('kode_film')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Kode Pelanggan</label>
                    <input class="form-control @error('kode_pelanggan') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->kode_pelanggan : old('kode_pelanggan') }}" name="kode_pelanggan" type="text" />
                    @error('kode_pelanggan')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Peminjaman</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Harian" {{isset($pengembalian) && $pengembalian->jenis_peminjaman == "Harian" ? "checked" : ""}}>Harian</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Mingguan" {{isset($pengembalian) && $pengembalian->jenis_peminjaman == "Mingguan" ? "checked" : ""}}>Mingguan</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Bulanan" {{isset($pengembalian) && $pengembalian->jenis_peminjaman == "Bulanan" ? "checked" : ""}}>Bulanan</label><br>
                    @error('jenis_peminjaman')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembalian</label>
                    <input class="form-control @error('tanggal_pengembalian') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->tanggal_pengembalian: old('tanggal_pengembalian') }}" name="tanggal_pengembalian" type="text" />
                    @error('tanggal_pengembalian')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Denda Keterlambatan</label>
                    <input class="form-control @error('denda_keterlambatan') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->denda_keterlambatan: old('denda_keterlambatan') }}" name="denda_keterlambatan" type="text" />
                    @error('denda_keterlambatan')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Kondisi</label>
                    <input class="form-control @error('kondisi') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->kondisi: old('kondisi') }}" name="kondisi" type="text" />
                    @error('kondisi')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input class="form-control @error('status') is-invalid @enderror" value="{{isset($pengembalian)? $pengembalian->status: old('status') }}" name="status" type="text" />
                    @error('status')
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
                        @foreach($pengembalian as $no => $h)
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
