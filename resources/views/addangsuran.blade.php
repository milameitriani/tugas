@extends('layout.template')
@section('title')

@section('content')

<form action="/angsuran/insert" method="POST" enctype="multiparty/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA ANGSURAN</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID ANGSURAN</label>
                    <input name="id_angsuran" class="form-control" value="{{ old('id_angsuran') }}">
                    <div class="text-danger">
                        @error('id_angsuran')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>TGL ANGSURAN</label>
                    <input type="date" name="tgl_angsuran" class="form-control" required>
                    <div class="text-danger">
                        @error('tgl_angsuran')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ANGSURAN KE</label>
                    <input name="angsuran" class="form-control" value="{{ old('angsuran') }}">
                    <div class="text-danger">
                        @error('angsuran')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>BESAR PINJAMAN</label>
                    <input name="besar_pinjaman" class="form-control" value="{{ old('besar_pinjaman') }}">
                    <div class="text-danger">
                        @error('besar_pinjaman')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>SUDAH DIBAYAR</label>
                    <input name="sudah_dibayar" class="form-control" value="{{ old('sudah_dibayar') }}">
                    <div class="text-danger">
                        @error('sudah_dibayar')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ANGSURAN POKOK</label>
                    <input name="angsuran_pokok" class="form-control" value="{{ old('angsuran_pokok') }}">
                    <div class="text-danger">
                        @error('angsuran_pokok')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ANGSURAN BUNGA</label>
                    <input name="angsuran_bunga" class="form-control" value="{{ old('angsuran_bunga') }}">
                    <div class="text-danger">
                        @error('angsuran_bunga')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>JUMLAH ANGSURAN</label>
                    <input name="jumlah_angsuran" class="form-control" value="{{ old('jumlah_angsuran') }}">
                    <div class="text-danger">
                        @error('jumlah_angsuran')
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
        </div>
            <div class="form-group">
                <button class="btn btn-primary btn-sm">SIMPAN</button> 
            </div>

        </div>
    </div>

</form>


@endsection