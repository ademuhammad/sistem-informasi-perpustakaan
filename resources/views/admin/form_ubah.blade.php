@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('buku.index')}}" class="btn btn-primary"> Kembali</a>
            <form action="{{ route('buku.store') }}" enctype="multipart/form-data" method="post">
                @csrf 
                <ul class="list-group">
                    <input type="text" name="id" value="{{$buku->id}}">
                    Kode Buku <input type="text" name="kode_buku" required value="{{$buku->kode_buku}}">
                    Nama Buku<input type="text" name="nama" required value="{{$buku->nama}}">
                    Pengarang <input type="text" name="pengarang" required value="{{$buku->pengarang}}">
                    Nomor Lemari <input type="text" name="thn_terbit" required value="{{$buku->thn_terbit}}">
                    Foto 
                <input type="file" name="foto" class="form-control" required placeholder="image">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection