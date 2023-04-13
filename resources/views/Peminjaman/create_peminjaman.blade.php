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
                <h3 class="card-title">Tabel Peminjaman</h3>

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
                {!! (isset($peminjaman))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Kode Film</label>
                    <input class="form-control @error('kode_film') is-invalid @enderror" value="{{isset($peminjaman)? $peminjaman->kode_film : old('kode_film') }}" name="kode_film" type="text" />
                    @error('kode_film')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Kode Pelanggan</label>
                    <input class="form-control @error('kode_pelanggan') is-invalid @enderror" value="{{isset($peminjaman)? $peminjaman->kode_pelanggan : old('kode_pelanggan') }}" name="kode_pelanggan" type="text" />
                    @error('kode_pelanggan')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jenis Peminjaman</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Harian" {{isset($peminjaman) && $peminjaman->jenis_peminjaman == "Harian" ? "checked" : ""}}>Harian</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Mingguan" {{isset($peminjaman) && $peminjaman->jenis_peminjaman == "Mingguan" ? "checked" : ""}}>Mingguan</label><br>
                    <label><input type="radio" name="jenis_peminjaman" value="Bulanan" {{isset($peminjaman) && $peminjaman->jenis_peminjaman == "Bulanan" ? "checked" : ""}}>Bulanan</label><br>
                    @error('jenis_peminjaman')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Peminjaman</label>
                    <input class="form-control @error('tanggal_pinjam') is-invalid @enderror" value="{{isset($peminjaman)? $peminjaman->tanggal_pinjam : old('tanggal_pinjam') }}" name="tanggal_pinjam" type="text" />
                    @error('tanggal_pinjam')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Pengembalian</label>
                    <input class="form-control @error('tanggal_pengembalian') is-invalid @enderror" value="{{isset($peminjaman)? $peminjaman->tanggal_pengembalian: old('tanggal_pengembalian') }}" name="tanggal_pengembalian" type="text" />
                    @error('tanggal_pengembalian')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Biaya Sewa</label>
                    <input class="form-control @error('biaya_sewa') is-invalid @enderror" value="{{isset($peminjaman)? $peminjaman->biaya_sewa: old('biaya_sewa') }}" name="biaya_sewa" type="text" />
                    @error('biaya_sewa')
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
                        @foreach($peminjaman as $no => $h)
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
