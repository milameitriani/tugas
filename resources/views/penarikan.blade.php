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
		<center><font size="6">DATA PENARIKAN</font></center>
		<hr>
		<a href="/penarikan/add"class="btn btn-primary btn-sm">TAMBAH</a> <br>
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
            <th class="bg-green">ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penarikan as $data)
        <tr>
            <td>{{ $data->id_penarikan }}</td>
            <td>{{ $data->id_nasabah }}</td>
            <td>{{ $data->nama_nasabah }}</td>
            <td>{{ $data->nama_petugas }}</td>
            <td>{{ $data->jenis_penarikan }}</td>
            <td>{{ $data->total_penarikan }}</td>
            <td>{{ $data->tgl_input }}</td>
            <td>{{ $data->tgl_penarikan}}</td>
            <td>
                <a href="/penarikan/detail/{{ $data->id_penarikan }}" class="btn btn-sm btn-success">Detail</a>
                <a href="/penarikan/edit/{{ $data->id_penarikan }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#delete{{ $data->id_penarikan }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($penarikan as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_penarikan }}">
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
                <a href="/penarikan/delete/{{$data->id_penarikan}}" class="btn btn-outline">Yes</a>
            </div>
        </div>
        @endforeach


@endsection