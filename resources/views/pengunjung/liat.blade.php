@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3> Data Buku</h3>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode Buku</th>
                    <th>Nama</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Foto</th>
                </tr>
                @foreach($buku as $b)
                <tr>
                    <td>{{$b->kode_buku}}</td>
                    <td>{{$b->nama}}</td>
                    <td>{{$b->pengarang}}</td>
                    <td>{{$b->thn_terbit}}</td>
                    <td><img src="{{asset('images/'.$b->foto)}}" width="100px"></td>
                   
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection