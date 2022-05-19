@extends('layouts.main')

@section('content')

<h1>Halaman Index Buku</h1>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics bg-warning " style="font-family: 'Koulen', cursive;">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                  <p    class="mb-0 text-right">Buku</p>
                  <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">{{$buku->count()}}</h3>
                  </div>
                </div>
              </div>
              <p class="text-muted mt-3 mb-0">
                <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Buku Di Perpustakaan 
              </p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card card-statistics bg-warning" style="font-family: 'Koulen', cursive;">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Selamat Membaca</p>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i>
                    Buku Adalah Gudang Ilmu
                  </p>
                </div>
              </div>
            </div>
        
    </div>
</div>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-center"> Data Buku</h3>
        </div>
        <div class="card-body">
            @can('isAdmin')
            <a href="{{ route('buku.create') }}"> Tambah Data Buku</a>
            @endcan
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode Buku</th>
                    <th>Nama</th>
                    <th>Pengarang</th>
                    <th>Nomor Lemari</th>
                    <th>Foto</th>
                    @can('isAdmin')
                    <th>AKSI</th>
                    @endcan
                </tr>
                @foreach($buku as $b)
                <tr>
                    <td>{{$b->kode_buku}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->pengarang}}</td>
                    <td>{{$b->thn_terbit}}</td>
                    <td>
                        <center>

                            <img class="" src="{{asset('images/'.$b->foto)}}" width="100px"></td>
                        </center>

                   

                
                    <td>
                        <ul class="nav">
                            <a href="{{route ('buku.show', $b->id)}}" class="btn btn-success mr-2 mx-2"> Show</a>
                            @can('isAdmin')
                            <a href="{{route ('buku.edit', $b->id)}}" class="btn btn-primary mr-2 mx-2"> Edit</a>
                            <form action="{{route ('buku.destroy',$b->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning"> Delete</button>
                            </form>
                        </ul>
                    </td>

                    @endcan
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection