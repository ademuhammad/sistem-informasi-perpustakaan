@extends('layouts.nav')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50 mt-4">
        <div class="card-header bg-dark text-white">
            <h3>Profil Buku</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('buku.index')}}" class="btn btn-primary mr-2"> Kembali</a>
        

            <div class="row ml-3">
            <h4 class="col-5"> Kode Buku :{{$buku->kode_buku}}</h4>

            </div>
            <div class="row ml-2">
            <h4 class="col-6"> Nama Buku : {{$buku->nama}}</h4>
            
            </div>
            <div class="row ml-2">
            <h4 class="col-6"> Pengarang : {{$buku->pengarang}}</h4>
            </div>
            <div class="row ml-2">
            <h4 class="col-6"> Nomor Lemari  : {{$buku->thn_terbit}} </h4>

            </div>
            <div class="row ml-2">
            <h4 class="col-5"> Cover Buku: </h4>
            <h4><img src="{{asset('images/'.$buku->foto)}}" width="200px"></td>
            </div>
        </div>
    </div>
</div>
@endsection