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
		<center><font size="6">DATA NASABAH</font></center>
		<hr>
		<a href="/nasabah/add"class="btn btn-primary btn-sm">TAMBAH</a> <br>
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
                <th class="bg-green">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nasabah as $data)
            <tr>
                <td>{{ $data->id_nasabah }}</td>
                <td>{{ $data->Nama }}</td>
                <td>{{ $data->no_ktp }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->telp }}</td>
                <td>{{ $data->tgl_daftar }}</td>
                <td>{{ $data->simpanan_pokok}}</td>
                <td>{{ $data->simpanan_wajib}}</td>
                <td>
                    <a href="/nasabah/detail/{{ $data->id_nasabah }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/nasabah/edit/{{ $data->id_nasabah }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#delete{{ $data->id_nasabah }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($nasabah as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_nasabah}}">
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
                <a href="/nasabah/delete/{{$data->id_nasabah}}" class="btn btn-outline">Yes</a>
            </div>
        </div>
        @endforeach

@endsection