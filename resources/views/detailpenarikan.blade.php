@extends('layout.template')
@section('title')
@section('content')

<div class="container" style="margin-top:20px">
		<center><font size="6">DETAIL PENARIKAN</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
    <thead>
        <tr>
            <th class="bg-green">ID PENARIKAN</th>
            <th class="bg-green">ID NASABAH</th>
            <th class="bg-green">NAMA NASABAH</th>
            <th class="bg-green">NAMA PETUGAS</th>
            <th class="bg-green">JENIS PENARIKAN</th>
            <th class="bg-green">TOTAL PENARIKAN</th>
            <th class="bg-green">TGL INPUT</th>
            <th class="bg-green">TGL PENARIKAN</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>{{ $penarikan->id_penarikan }}</td>
            <td>{{ $penarikan->id_nasabah }}</td>
            <td>{{ $penarikan->nama_nasabah }}</td>
            <td>{{ $penarikan->nama_petugas }}</td>
            <td>{{ $penarikan->jenis_penarikan }}</td>
            <td>{{ $penarikan->total_penarikan }}</td>
            <td>{{ $penarikan->tgl_input }}</td>
            <td>{{ $penarikan->tgl_penarikan }}</td>
            <a href="/penarikan" class="btn btn-primary tbn-sm">Kembali</a>
    </tr>

</table>





@endsection