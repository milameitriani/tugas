<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NasabahModel;

class NasabahController extends Controller
{
    public function __construct()
    {
        $this->NasabahModel = new NasabahModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'nasabah' => $this->NasabahModel->allData(),
        ];
        return view('nasabah', $data);
    }

    public function detail($id_nasabah)
    {
        if (!$this->NasabahModel->detailData($id_nasabah)) {
            abort(404);
        }
        $data = [
            'nasabah' => $this->NasabahModel->detailData(($id_nasabah)),
        ];
        return view('detailnasabah', $data);
    }

    public function add()
    {
        return view('addnasabah');
    }

    public function insert()
    {
        Request()->validate([
            'id_nasabah' => 'required|unique:nasabah,id_nasabah|min:1|max:11',
            'Nama' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'tgl_daftar' => 'required',
            'simpanan_pokok' => 'required',
            'simpanan_wajib' => 'required',
        ],[
            'id_nasabah.required' => 'wajib di isi',
            'id_nasabah.unique' => 'id_nasabah sudah ada',
            'id_nasabah.min' => 'Min 1 Karakter',
            'id_nasabah.max' => 'Max 11 Karakter',
            'Nama.required' => 'wajib di isi',
            'no_ktp.required' => 'wajib di isi',
            'alamat.required' => 'wajib di isi',
            'telp.required' => 'wajib di isi',
            'tgl_daftar.required' => 'wajib di isi',
            'simpanan_pokok.required' => 'wajib di isi',
            'simpanan_wajib.required' => 'wajib di isi',
        ]);
        $data =[
            'id_nasabah' => Request()->id_nasabah,
            'Nama' => Request()->Nama,
            'no_ktp' => Request()->no_ktp,
            'alamat' => Request()->alamat,
            'telp' => Request()->telp,
            'tgl_daftar' => Request()->tgl_daftar,
            'simpanan_pokok' => Request()->simpanan_pokok,
            'simpanan_wajib' => Request()->simpanan_wajib,
        ];

        $this->NasabahModel->addData($data);
        return redirect()->route('nasabah')->with('pesan','Data Berhasil Di Tambahkan');
    }
    public function edit($id_nasabah)
    {
        if (!$this->NasabahModel->detailData($id_nasabah)) {
            abort(404);
        }
        $data = [
            'nasabah' => $this->NasabahModel->detailData(($id_nasabah)),
        ];
        return view('editnasabah', $data);
    }

    public function update($id_nasabah)
    {
        Request()->validate([
            'id_nasabah' => 'required|min:1|max:11',
            'Nama' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'tgl_daftar' => 'required',
            'simpanan_pokok' => 'required',
            'simpanan_wajib' => 'required',
        ],[
            'id_nasabah.required' => 'wajib di isi',
            'id_nasabah.unique' => 'id_nasabah sudah ada',
            'id_nasabah.min' => 'Min 1 Karakter',
            'id_nasabah.max' => 'Max 11 Karakter',
            'Nama.required' => 'wajib di isi',
            'no_ktp.required' => 'wajib di isi',
            'alamat.required' => 'wajib di isi',
            'telp.required' => 'wajib di isi',
            'tgl_daftar.required' => 'wajib di isi',
            'simpanan_pokok.required' => 'wajib di isi',
            'simpanan_wajib.required' => 'wajib di isi',
        ]);
        $data =[
            'id_nasabah' => Request()->id_nasabah,
            'Nama' => Request()->Nama,
            'no_ktp' => Request()->no_ktp,
            'alamat' => Request()->alamat,
            'telp' => Request()->telp,
            'tgl_daftar' => Request()->tgl_daftar,
            'simpanan_pokok' => Request()->simpanan_pokok,
            'simpanan_wajib' => Request()->simpanan_wajib,
        ];

        $this->NasabahModel->editData($id_nasabah, $data);
        return redirect()->route('nasabah')->with('pesan','Data Berhasil Di Update');
    }
    public function delete($id_nasabah)
    {
        $this->NasabahModel->deleteData($id_nasabah);
        return redirect()->route('nasabah')->with('pesan','Data Berhasil Di Hapus');
    }
}
