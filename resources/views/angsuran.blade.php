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
		<center><font size="6">DATA ANGSURAN</font></center>
		<hr>
		<a href="/angsuran/add"class="btn btn-primary btn-sm">TAMBAH</a> <br>
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
                <th class="bg-green">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($angsuran as $data)
            <tr>
                <td>{{ $data->id_angsuran }}</td>
                <td>{{ $data->tgl_angsuran }}</td>
                <td>{{ $data->angsuran}}</td>
                <td>{{ $data->besar_pinjaman }}</td>
                <td>{{ $data->sudah_dibayar }}</td>
                <td>{{ $data->angsuran_pokok }}</td>
                <td>{{ $data->angsuran_bunga }}</td>
                <td>{{ $data->jumlah_angsuran }}</td>
                <td>{{ $data->id_nasabah}}</td>
                <td>
                    <a href="/angsuran/detail/{{ $data->id_angsuran }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/angsuran/edit/{{ $data->id_angsuran }}" class="btn btn-sm btn-warning">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#delete{{ $data->id_angsuran }}">
                    Delete
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($angsuran as $data)
<div class="modal modal-danger fade" id="delete{{ $data->id_angsuran }}">
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
                <a href="/angsuran/delete/{{$data->id_angsuran}}" class="btn btn-outline">Yes</a>
            </div>
        </div>
        @endforeach

@endsection