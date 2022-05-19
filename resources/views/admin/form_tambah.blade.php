@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Siswa</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('buku.index')}}" class="btn btn-primary"> Kembali</a>
            <form action="{{ route('buku.store')}}" method="post" enctype="multipart/form-data">
                @csrf 
                <ul class="list-group">
                    Kode Buku <input type="text" name="kode_buku" required>
                    Nama Buku<input type="text" name="nama" required>
                    Pengarang <input type="text" name="pengarang" required>
                    Tahun Terbit <input type="text" name="thn_terbit" required>
                    Foto 
                <input type="file" name="foto" required class="form-control" placeholder="image">
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection