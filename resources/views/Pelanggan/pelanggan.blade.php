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
<<<<<<< HEAD
                <h3 class="card-title"><b>Tabel Pelanggan</b></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-10">
                        <form action="{{url ('/Pelanggan')}}">
                       <div class="input-group mb-3">
                         <input type="text" class="form-control" placeholder="Cari disini.." name="search">
                            <div class="input-group-append">
                             <button class="btn btn-danger" type="submit">Cari</button>
                            </div>
                        </div>
                    </div>
                   </div>
                </form>

            <div class="card-body">

                <a href="{{url('Pelanggan/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Pelanggan</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat Pelanggan</th>
                      <th>Nomor HP</th>
                      <th>Riwayat Peminjaman</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($Pelanggan->count() > 0)
                      @foreach($Pelanggan as $i => $pl)
                        <tr>
                          <td>{{++$i}}</td>
                          <td>{{$pl->kode_pelanggan}}</td>
                          <td>{{$pl->nama_pelanggan}}</td>
                          <td>{{$pl->jenis_kelamin}}</td>
                          <td>{{$pl->alamat_pelanggan}}</td>
                          <td>{{$pl->hp}}</td>
                          <td>{{$pl->riwayat_peminjaman}}</td>
                          <td>
                            <!-- Bikin tombol edit dan delete -->
                            <a href="{{ url('/Pelanggan/'. $pl->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                            <form method="POST" action="{{ url('/Pelanggan/'.$pl->id) }}" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $pl->nama_pelanggan }}?')" class="btn btn-sm btn-danger">hapus</button>
                            </form>
                          </td>
                        </tr>
                      @endforeach
                    @else
                      <tr><td colspan="9" class="text-center">Data tidak ada</td></tr>
                    @endif
                  </tbody>
                </table>
            </div>

            {{ $Pelanggan->links() }}

       </div>

              </div>
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
                        @foreach($Pelanggan as $no => $l)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$l->nama}}</td>
                                <td>{{$l->umur}}</td>
                                <td>{{$l->jenis_kelamin}}</td>
                                <td>{{$l->hobi}}</td>
                                <td>{{$l->kategori}}</td>
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
