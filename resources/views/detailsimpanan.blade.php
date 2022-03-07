@extends('layout.template')
@section('title')
@section('content')

<div class="container" style="margin-top:20px">
		<center><font size="6">DETAIL SIMPANAN</font></center>
		<hr>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
        <thead>
            <tr>
                <th class="bg-green">ID SIMPANAN</th>
                <th class="bg-green">TGL ANGSURAN</th>
                <th class="bg-green">NAMA NASABAH</th>
                <th class="bg-green">NAMA PETUGAS</th>
                <th class="bg-green">TOTAL SIMPANAN</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td>{{$simpanan->id_simpanan}}</td>
                <td>{{$simpanan->tgl_input_angsuran}}</td>
                <td>{{$simpanan->nama_nasabah}}</td>
                <td>{{$simpanan->nama_petugas}}</td>
                <td>{{$simpanan->total_simpanan}}</td>
            <a href="/simpanan" class="btn btn-primary tbn-sm">KEMBALI</a>
    </tr>

</table>





@endsection