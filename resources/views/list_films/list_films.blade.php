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
                <h3 class="card-title"><b>Tabel List Film & Series</b></h3>

<<<<<<< HEAD
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
=======
                <p>Cari Film :</p>
<form action="/list_films/search" method="GET">
	<input type="text" name="search" placeholder="Cari film .." value="{{ old('search') }}">
	<input type="submit" value="CARI">
</form>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
>>>>>>> 982c6d8c04ac45eef0eada2214dc69e84642b0b2
            </div>
        </div>
        </div>

                <div class="row justify-content-center mb-3">
                    <div class="col-md-10">
                        <form action="{{url ('/list_films')}}" method="GET">
                       <div class="input-group mb-3">
                         <input type="text" class="form-control" placeholder="keyword" name="search">
                            <div class="input-group-append">
                             <button class="btn btn-danger" type="submit"> Cari</button>
                            </div>
                        </div>
                    </div>
                   </div>
                </form>

            <div class="card-body">

                <a href="{{url('list_films/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Film</th>
                      <th>Nama Film</th>
                      <th>Kategori Film</th>
                      <th>Jumlah</th>
                      <th>Harga Sewa</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($list_films->count() > 0)
                      @foreach($list_films as $i => $l)
                        <tr>
                          <td>{{++$i}}</td>
                          <td>{{$l->kode_film}}</td>
                          <td>{{$l->nama_film}}</td>
                          <td>{{$l->kategori_film}}</td>
                          <td>{{$l->jumlah}}</td>
                          <td>{{$l->harga_sewa}}</td>
                          <td>
                            <!-- Bikin tombol edit dan delete -->
                            <a href="{{ url('/list_films/'. $l->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                            <form method="POST" action="{{ url('/list_films/'.$l->id) }}" >
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-sm btn-danger">hapus</button>
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

                   {{ $list_films->links() }}

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
                        @foreach($list_films as $no => $l)
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
