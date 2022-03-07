@extends('layout.template')
@section('title')

@section('content')
<form action="/pinjaman/update/{{ $pinjaman->id_pinjaman }}" method="POST" enctype="multiparty/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA PINJAMAN</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID PINJAMAN</label>
                    <input name="id_pinjaman" class="form-control" value="{{ $pinjaman->id_pinjaman }}">
                    <div class="text-danger">
                        @error('id_pinjaman')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>TGL PINJAMAN</label>
                    <input type="date" name="tgl_pinjaman" class="form-control" value="{{ $pinjaman->tgl_pinjaman }}">
                    <div class="text-danger">
                        @error('tgl_pinjaman')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>BESAR PINJAMAN</label>
                    <input name="besar_pinjaman" class="form-control" value="{{ $pinjaman->besar_pinjaman }}">
                    <div class="text-danger">
                        @error('besar_pinjaman')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>LAMA PINJAMAN</label>
                    <input name="lama_pinjaman" class="form-control" value="{{ $pinjaman->lama_pinjaman }}">
                    <div class="text-danger">
                        @error('lama_pinjaman')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>BUNGA</label>
                    <input name="bunga" class="form-control" value="{{ $pinjaman->bunga }}">
                    <div class="text-danger">
                        @error('bunga')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ANGSURAN POKOK</label>
                    <input name="angsuran_pokok" class="form-control" value="{{ $pinjaman->angsuran_pokok }}">
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
                    <input name="angsuran_bunga" class="form-control" value="{{ $pinjaman->angsuran_bunga }}">
                    <div class="text-danger">
                        @error('angsuran_bunga')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID NASABAH</label>
                    <input name="id_nasabah" class="form-control" value="{{ $pinjaman->id_nasabah }}">
                    <div class="text-danger">
                        @error('id_nasabah')
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