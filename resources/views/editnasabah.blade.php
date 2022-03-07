@extends('layout.template')
@section('title')

@section('content')

<form action="/nasabah/update/{{ $nasabah->id_nasabah }}" method="POST" enctype="multiparty/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA NASABAH</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID NASABAH</label>
                    <input name="id_nasabah" class="form-control" value="{{ $nasabah->id_nasabah }}">
                    <div class="text-danger">
                        @error('id_nasabah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>NAMA</label>
                    <input name="Nama" class="form-control" value="{{ $nasabah->Nama }}">
                    <div class="text-danger">
                        @error('Nama')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>NO KTP</label>
                    <input name="no_ktp" class="form-control" value="{{ $nasabah->no_ktp }}">
                    <div class="text-danger">
                        @error('no_ktp')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ALAMAT</label>
                    <input name="alamat" class="form-control" value="{{ $nasabah->alamat }}">
                    <div class="text-danger">
                        @error('alamat')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>TELP</label>
                    <input name="telp" class="form-control" value="{{ $nasabah->telp }}">
                    <div class="text-danger">
                        @error('telp')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>TGL DAFTAR</label>
                    <input type="date" name="tgl_daftar" class="form-control" value="{{ $nasabah->tgl_daftar }}">
                    <div class="text-danger">
                        @error('tgl_daftar')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>SIMPANAN POKOK</label>
                    <input name="simpanan_pokok" class="form-control" value="{{ $nasabah->simpanan_pokok }}">
                    <div class="text-danger">
                        @error('simpanan_pokok')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>SIMPANAN WAJIB</label>
                    <input name="simpanan_wajib" class="form-control" value="{{ $nasabah->simpanan_wajib }}">
                    <div class="text-danger">
                        @error('simpanan_wajib')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-sm">SIMPAN</button>
            </div>

        </div>
    </div>

</form>


@endsection