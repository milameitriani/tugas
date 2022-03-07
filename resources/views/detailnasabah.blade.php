@extends('layout.template')
@section('title')
@section('content')

<div class="container" style="margin-top:20px">
		<center><font size="6">DETAIL NASABAH</font></center>
		<hr>
    <div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th class="bg-green">ID NASABAH</th>
                <th class="bg-green">NAMA</th>
                <th class="bg-green">NO KTP</th>
                <th class="bg-green">ALAMAT</th>
                <th class="bg-green">TELP</th>
                <th class="bg-green">TGL DAFTAR</th>
                <th class="bg-green">SIMPANAN POKOK</th>
                <th class="bg-green">SIMPANAN WAJIB</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>{{ $nasabah->id_nasabah }}</td>
                <td>{{ $nasabah->Nama }}</td>
                <td>{{ $nasabah->no_ktp }}</td>
                <td>{{ $nasabah->alamat }}</td>
                <td>{{ $nasabah->telp }}</td>
                <td>{{ $nasabah->tgl_daftar }}</td>
                <td>{{ $nasabah->simpanan_pokok }}</td>
                <td>{{ $nasabah->simpanan_wajib }}</td>
            <a href="/nasabah" class="btn btn-primary tbn-sm">KEMBALI</a>
    </tr>

</table>





@endsection