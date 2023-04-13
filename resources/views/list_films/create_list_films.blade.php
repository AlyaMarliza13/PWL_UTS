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
                <h3 class="card-title">Tabel List Film & Series</h3>

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
                {!! (isset($list_films))? method_field('PUT') : '' !!}

                <div class="form-group">
                    <label>Kode Film</label>
                    <input class="form-control @error('kode_film') is-invalid @enderror" value="{{isset($list_films)? $list_films->kode_film : old('kode_film') }}" name="kode_film" type="text" />
                    @error('kode_film')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Nama Film</label>
                    <input class="form-control @error('nama_film') is-invalid @enderror" value="{{isset($list_films)? $list_films->nama_film : old('nama_film') }}" name="nama_film" type="text" />
                    @error('nama_film')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori_film">Kategori Film</label>
                    <select id="kategori_film" name="kategori_film" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Aksi" {{isset($list_films) && $list_films->kategori_film == "Aksi" ? "selected" : ""}}>Aksi</option>
                        <option value="Anak-anak" {{isset($list_films) && $list_films->kategori_film == "Anak-anak" ? "selected" : ""}}>Anak-anak</option>
                        <option value="Drama" {{isset($list_films) && $list_films->kategori_film == "Drama" ? "selected" : ""}}>Drama</option>
                        <option value="Fiksi" {{isset($list_films) && $list_films->kategori_film == "Fiksi" ? "selected" : ""}}>Fiksi</option>
                        <option value="Komedi" {{isset($list_films) && $list_films->kategori_film == "Komedi" ? "selected" : ""}}>Komedi</option>
                        <option value="Keluarga" {{isset($list_films) && $list_films->kategori_film == "Keluarga" ? "selected" : ""}}>Keluarga</option>
                        <option value="Petualangan" {{isset($list_films) && $list_films->kategori_film == "Petualangan" ? "selected" : ""}}>Petualangan</option>
                        <option value="Sejarah" {{isset($list_films) && $list_films->kategori_film == "Sejarah" ? "selected" : ""}}>Sejarah</option>
                    </select>
                    @error('kategori_film')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input class="form-control @error('jumlah') is-invalid @enderror" value="{{isset($list_films)? $list_films->jumlah : old('jumlah') }}" name="jumlah" type="text" />
                    @error('jumlah')
                        <span class="error invalid-feedback">{{ $message}} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Harga Sewa</label>
                    <input class="form-control @error('harga_sewa') is-invalid @enderror" value="{{isset($list_films)? $list_films->harga_sewa: old('harga_sewa') }}" name="harga_sewa" type="text" />
                    @error('harga_sewa')
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
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Hobi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list_films as $no => $h)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$h->nama}}</td>
                                <td>{{$h->umur}}</td>
                                <td>{{$h->kategori_film}}</td>
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
