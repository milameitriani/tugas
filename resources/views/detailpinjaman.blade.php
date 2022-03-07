@extends('layout.template')
@section('title')
@section('content')

<div class="container" style="margin-top:20px">
		<center><font size="6">DETAIL PINJAMAN</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
    <thead>
        <tr>
            <th class="bg-green">ID PINJAMAN</th>
            <th class="bg-green">TGL PINJAMAN</th>
            <th class="bg-green">BESAR PINJAMAN</th>
            <th class="bg-green">LAMA PINJAMAN</th>
            <th class="bg-green">BUNGA</th>
            <th class="bg-green">ANGSURAN POKOK</th>
            <th class="bg-green">ANGSURAN BUNGA</th>
            <th class="bg-green">ID NASABAH</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>{{$pinjaman->id_pinjaman}}</td>
            <td>{{$pinjaman->tgl_pinjaman}}</td>
            <td>{{$pinjaman->besar_pinjaman}}</td>
            <td>{{$pinjaman->lama_pinjaman}}</td>
            <td>{{$pinjaman->bunga}}</td>
            <td>{{$pinjaman->angsuran_pokok}}</td>
            <td>{{$pinjaman->angsuran_bunga}}</td>
            <td>{{$pinjaman->id_nasabah}}</td>
            <a href="/pinjaman" class="btn btn-primary tbn-sm">KEMBALI</a>
    </tr>

</table>





@endsection