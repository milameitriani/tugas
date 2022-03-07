@extends('layout.template')
@section('title')
@section('content')

<div class="container" style="margin-top:20px">
		<center><font size="6">DETAIL ANGSURAN</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th class="bg-green">ID ANGSURAN</th>
                <th class="bg-green">TGL ANGSURAN</th>
                <th class="bg-green">ANGSURAN KE</th>
                <th class="bg-green">BESAR PINJAMAN</th>
                <th class="bg-green">SUDAH DIBAYAR</th>
                <th class="bg-green">ANGSURAN POKOK</th>
                <th class="bg-green">ANGSURAN BUNGA</th>
                <th class="bg-green">JUMLAH ANGSURAN</th>
                <th class="bg-green">ID NASABAH</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>{{ $angsuran->id_angsuran }}</td>
                <td>{{ $angsuran->tgl_angsuran }}</td>
                <td>{{ $angsuran->angsuran }}</td>
                <td>{{ $angsuran->besar_pinjaman }}</td>
                <td>{{ $angsuran->sudah_dibayar }}</td>
                <td>{{ $angsuran->angsuran_pokok }}</td>
                <td>{{ $angsuran->angsuran_bunga }}</td>
                <td>{{ $angsuran->jumlah_angsuran }}</td>
                <td>{{ $angsuran->id_nasabah }}</td>
                
            <a href="/angsuran" class="btn btn-primary tbn-sm">Kembali</a>
    </tr>

</table>





@endsection