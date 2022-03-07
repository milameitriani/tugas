@extends('layout.template')
@section('title')

@section('content')

<form action="/penarikan/insert" method="POST" enctype="multiparty/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA PENARIKAN</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID PENARIKAN</label>
                    <input name="id_penarikan" class="form-control" value="{{ old('id_penarikan') }}">
                    <div class="text-danger">
                        @error('id_penarikan')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID NASABAH</label>
                    <input name="id_nasabah" class="form-control" value="{{ old('id_nasabah') }}">
                    <div class="text-danger">
                        @error('id_nasabah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>NAMA NASABAH</label>
                    <input name="nama_nasabah" class="form-control" value="{{ old('nama_nasabah') }}">
                    <div class="text-danger">
                        @error('nama_nasabah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>NAMA PETUGAS</label>
                    <input name="nama_petugas" class="form-control" value="{{ old('nama_petugas') }}">
                    <div class="text-danger">
                        @error('nama_petugas')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>JENIS PENARIKAN</label>
                    <input name="jenis_penarikan" class="form-control" value="{{ old('jenis_penarikan') }}">
                    <div class="text-danger">
                        @error('jenis_penarikan')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>TOTAL PENARIKAN</label>
                    <input name="total_penarikan" class="form-control" value="{{ old('total_penarikan') }}">
                    <div class="text-danger">
                        @error('total_penarikan')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>TGL INPUT</label>
                    <input type="date" name="tgl_input" class="form-control" required>
                    <div class="text-danger">
                        @error('tgl_input')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>TGL PENARIKAN</label>
                    <input type="date" name="tgl_penarikan" class="form-control" required>
                    <div class="text-danger">
                        @error('tgl_penarikan')
                        {{ $message }}
                        @enderror
                    </div>
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