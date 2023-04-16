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
                <h3 class="card-title"><b>Tabel Pengembalian</b></h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>

            <div class="row justify-content-center mb-3">
                <div class="col-md-10">
                    <form action="{{url ('/Pengembalian')}}">
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

                <a href="{{ url('Pengembalian/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Film</th>
                      <th>Kode Pelanggan</th>
                      <th>Tanggal Pengembalian</th>
                      <th>Denda Keterlambatan</th>
                      <th>Kondisi</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($Pengembalian->count() > 0)
                      @foreach($Pengembalian as $i => $pg)
                        <tr>
                          <td>{{++$i}}</td>
                          <td>{{$pg->kode_film}}</td>
                          <td>{{$pg->kode_pelanggan}}</td>
                          <td>{{$pg->tanggal_pengembalian}}</td>
                          <td>{{$pg->denda_keterlambatan}}</td>
                          <td>{{$pg->kondisi}}</td>
                          <td>{{$pg->status}}</td>
                          <td>
                            <!-- Bikin tombol edit dan delete -->
                            <a href="{{ url('/Pengembalian/'. $pg->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>

                            <form method="POST" action="{{ url('/Pengembalian/'.$pg->id) }}" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $pg ->kode_pelanggan }}?')" class="btn btn-sm btn-danger">hapus</button>
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

                 {{ $Pengembalian->links() }}

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
                        @foreach($pengembalian as $no => $pg)
                            <tr class="">
                                <td>{{$no}}</td>
                                <td>{{$pg->nama}}</td>
                                <td>{{$pg->umur}}</td>
                                <td>{{$pg->jenis_kelamin}}</td>
                                <td>{{$pg->hobi}}</td>
                                <td>{{$pg->kategori}}</td>
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
