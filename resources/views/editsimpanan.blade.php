@extends('layout.template')
@section('title')

@section('content')

<form action="/simpanan/update/{{ $simpanan->id_simpanan }}" method="POST" enctype="multiparty/form-data">
    @csrf
    <div class="container" style="margin-top:20px">
		<center><font size="6">DATA SIMPANAN</font></center>
		<hr>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>ID SIMPANAN</label>
                    <input name="id_simpanan" class="form-control" value="{{  $simpanan->id_simpanan }}">
                    <div class="text-danger">
                        @error('id_simpanan')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            
            
                <div class="form-group">
                    <label>TGL ANGSURAN</label>
                    <input type="date" name="tgl_input_angsuran" class="form-control" value="{{  $simpanan->tgl_input_angsuran }}">
                    <div class="text-danger">
                        @error('tgl_input_angsuran')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            

            
                <div class="form-group">
                    <label>NAMA NASABAH</label>
                    <input name="nama_nasabah" class="form-control" value="{{ $simpanan->nama_nasabah }}">
                    <div class="text-danger">
                        @error('nama_nasabah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            

            
                <div class="form-group">
                    <label>NAMA PETUGAS</label>
                    <input name="nama_petugas" class="form-control" value="{{ $simpanan->nama_petugas }}">
                    <div class="text-danger">
                        @error('nama_petugas')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            

            
                <div class="form-group">
                    <label>TOTAL SIMPANAN</label>
                    <input name="total_simpanan" class="form-control" value="{{ $simpanan->total_simpanan }}">
                    <div class="text-danger">
                        @error('total_simpanan')
                        {{ $message }}
                        @enderror
                    </div>
                </div>


            <div class="form-group">
                <button class="btn btn-primary btn-sm">SIMPAN</button>
            </div>
            
        
            </div>
        </div>
    </div>

</form>


@endsection