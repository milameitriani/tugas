@extends('layout.template')
@section('title')

@section('content')

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> success!</h4>
    {{ session('pesan') }}.
</div>
@endif
<div class="container" style="margin-top:20px">
		<center><font size="6">DATA PINJAMAN</font></center>
		<hr>
		<a href="/pinjaman/add"class="btn btn-primary btn-sm">TAMBAH</a> <br>
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
            <th class="bg-green">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pinjaman as $data)
        <tr>
            <td>{{ $data->id_pinjaman }}</td>
            <td>{{ $data->tgl_pinjaman }}</td>
            <td>{{ $data->besar_pinjaman }}</td>
            <td>{{ $data->lama_pinjaman }}</td>
            <td>{{ $data->bunga }}</td>
            <td>{{ $data->angsuran_pokok }}</td>
            <td>{{ $data->angsuran_bunga }}</td>
            <td>{{ $data->id_nasabah}}</td>
            <td>
                <a href="/pinjaman/detail/{{ $data->id_pinjaman }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/pinjaman/edit/{{ $data->id_pinjaman }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#delete{{ $data->id_pinjaman }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($pinjaman as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_pinjaman }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini...?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                <a href="/pinjaman/delete/{{$data->id_pinjaman}}" class="btn btn-outline">Yes</a>
            </div>
        </div>
        @endforeach


        @endsection