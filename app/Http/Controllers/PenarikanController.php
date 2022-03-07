<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenarikanModel;

class PenarikanController extends Controller
{
    public function __construct()
    {
        $this->PenarikanModel = new PenarikanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'penarikan' => $this->PenarikanModel->allData(),
        ];
        return view('penarikan', $data);
    }

    public function detail($id_penarikan)
    {
        if (!$this->PenarikanModel->detailData($id_penarikan)) {
            abort(404);
        }
        $data = [
            'penarikan' => $this->PenarikanModel->detailData(($id_penarikan)),
        ];
        return view('detailpenarikan', $data);
    }

    public function add()
    {
        return view('addpenarikan');
    }

    public function insert()
    {
        Request()->validate([
            'id_penarikan' => 'required|unique:penarikan,id_penarikan|min:1|max:11',
            'id_nasabah' => 'required',
            'nama_nasabah' => 'required',
            'nama_petugas' => 'required',
            'jenis_penarikan' => 'required',
            'total_penarikan' => 'required',
            'tgl_input' => 'required',
            'tgl_penarikan' => 'required',
        ],[
            'id_penarikan.required' => 'wajib di isi',
            'id_penarikan.unique' => 'id_penarikan sudah ada',
            'id_penarikan.min' => 'Min 1 Karakter',
            'id_penarikan.max' => 'Max 11 Karakter',
            'id_nasabah.required' => 'wajib di isi',
            'nama_nasabah.required' => 'wajib di isi',
            'nama_petugas.required' => 'wajib di isi',
            'jenis_penarikan.required' => 'wajib di isi',
            'total_penarikan.required' => 'wajib di isi',
            'tgl_input.required' => 'wajib di isi',
            'tgl_penarikan.required' => 'wajib di isi',
        ]);
        $data =[
            'id_penarikan' => Request()->id_penarikan,
            'id_nasabah' => Request()->id_nasabah,
            'nama_nasabah' => Request()->nama_nasabah,
            'nama_petugas' => Request()->nama_petugas,
            'jenis_penarikan' => Request()->jenis_penarikan,
            'total_penarikan' => Request()->total_penarikan,
            'tgl_input' => Request()->tgl_input,
            'tgl_penarikan' => Request()->tgl_penarikan,
        ];

        $this->PenarikanModel->addData($data);
        return redirect()->route('penarikan')->with('pesan','Data Berhasil Di Tambahkan');
    }
    public function edit($id_penarikan)
    {
        if (!$this->PenarikanModel->detailData($id_penarikan)) {
            abort(404);
        }
        $data = [
            'penarikan' => $this->PenarikanModel->detailData(($id_penarikan)),
        ];
        return view('editpenarikan', $data);
    }

    public function update($id_penarikan)
    {
        Request()->validate([
            'id_penarikan' => 'required|max:11',
            'id_nasabah' => 'required',
            'nama_nasabah' => 'required',
            'nama_petugas' => 'required',
            'jenis_penarikan' => 'required',
            'total_penarikan' => 'required',
            'tgl_input' => 'required',
            'tgl_penarikan' => 'required',
        ],[
            'id_penarikan.required' => 'wajib di isi',
            'id_penarikan.unique' => 'id_penarikan sudah ada',
            'id_penarikan.min' => 'Min 1 Karakter',
            'id_penarikan.max' => 'Max 11 Karakter',
            'id_nasabah.required' => 'wajib di isi',
            'nama_nasabah.required' => 'wajib di isi',
            'nama_petugas.required' => 'wajib di isi',
            'jenis_penarikan.required' => 'wajib di isi',
            'total_penarikan.required' => 'wajib di isi',
            'tgl_input.required' => 'wajib di isi',
            'tgl_penarikan.required' => 'wajib di isi',
        ]);
        $data =[
            'id_penarikan' => Request()->id_penarikan,
            'id_nasabah' => Request()->id_nasabah,
            'nama_nasabah' => Request()->nama_nasabah,
            'nama_petugas' => Request()->nama_petugas,
            'jenis_penarikan' => Request()->jenis_penarikan,
            'total_penarikan' => Request()->total_penarikan,
            'tgl_input' => Request()->tgl_input,
            'tgl_penarikan' => Request()->tgl_penarikan,
        ];

        $this->PenarikanModel->editData($id_penarikan, $data);
        return redirect()->route('penarikan')->with('pesan','Data Berhasil Di Update');
    }
    public function delete($id_penarikan)
    {
        $this->PenarikanModel->deleteData($id_penarikan);
        return redirect()->route('penarikan')->with('pesan','Data Berhasil Di Hapus');
    }
}
