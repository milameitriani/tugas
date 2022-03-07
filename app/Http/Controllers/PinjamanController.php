<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinjamanModel;

class PinjamanController extends Controller
{
    public function __construct()
    {
        $this->PinjamanModel = new PinjamanModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'pinjaman' => $this->PinjamanModel->allData(),
        ];
        return view('pinjaman', $data);
    }

    public function detail($id_pinjaman)
    {
        if (!$this->PinjamanModel->detailData($id_pinjaman)) {
            abort(404);
        }
        $data = [
            'pinjaman' => $this->PinjamanModel->detailData(($id_pinjaman)),
        ];
        return view('detailpinjaman', $data);
    }

    public function add()
    {
        return view('addpinjaman');
    }

    public function insert()
    {
        Request()->validate([
            'id_pinjaman' => 'required|unique:pinjaman,id_pinjaman|min:1|max:11',
            'tgl_pinjaman' => 'required',
            'besar_pinjaman' => 'required',
            'lama_pinjaman' => 'required',
            'bunga' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'id_nasabah' => 'required',
        ],[
            'id_pinjaman.required' => 'wajib di isi',
            'id_pinjaman.unique' => 'id_pinjaman sudah ada',
            'id_pinjaman.min' => 'Min 1 Karakter',
            'id_pinjaman.max' => 'Max 11 Karakter',
            'tgl_pinjaman.required' => 'wajib di isi',
            'besar_pinjaman.required' => 'wajib di isi',
            'lama_pinjaman.required' => 'wajib di isi',
            'bunga.required' => 'wajib di isi',
            'angsuran_pokok.required' => 'wajib di isi',
            'angsuran_bunga.required' => 'wajib di isi',
            'id_nasabah.required' => 'wajib di isi',
        ]);
        $data =[
            'id_pinjaman' => Request()->id_pinjaman,
            'tgl_pinjaman' => Request()->tgl_pinjaman,
            'besar_pinjaman' => Request()->besar_pinjaman,
            'lama_pinjaman' => Request()->lama_pinjaman,
            'bunga' => Request()->bunga,
            'angsuran_pokok' => Request()->angsuran_pokok,
            'angsuran_bunga' => Request()->angsuran_bunga,
            'id_nasabah' => Request()->id_nasabah,
        ];

        $this->PinjamanModel->addData($data);
        return redirect()->route('pinjaman')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_pinjaman)
    {
        if (!$this->PinjamanModel->detailData($id_pinjaman)) {
            abort(404);
        }
        $data = [
            'pinjaman' => $this->PinjamanModel->detailData(($id_pinjaman)),
        ];
        return view('editpinjaman', $data);
    }

    public function update($id_pinjaman)
    {
        Request()->validate([
            'id_pinjaman' => 'required|min:1|max:11',
            'tgl_pinjaman' => 'required',
            'besar_pinjaman' => 'required',
            'lama_pinjaman' => 'required',
            'bunga' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'id_nasabah' => 'required',
        ],[
            'id_pinjaman.required' => 'wajib di isi',
            'id_pinjaman.unique' => 'id_pinjaman sudah ada',
            'id_pinjaman.min' => 'Min 1 Karakter',
            'id_pinjaman.max' => 'Max 11 Karakter',
            'tgl_pinjaman.required' => 'wajib di isi',
            'besar_pinjaman.required' => 'wajib di isi',
            'lama_pinjaman.required' => 'wajib di isi',
            'bunga.required' => 'wajib di isi',
            'angsuran_pokok.required' => 'wajib di isi',
            'angsuran_bunga.required' => 'wajib di isi',
            'id_nasabah.required' => 'wajib di isi',
        ]);
        $data =[
            'id_pinjaman' => Request()->id_pinjaman,
            'tgl_pinjaman' => Request()->tgl_pinjaman,
            'besar_pinjaman' => Request()->besar_pinjaman,
            'lama_pinjaman' => Request()->lama_pinjaman,
            'bunga' => Request()->bunga,
            'angsuran_pokok' => Request()->angsuran_pokok,
            'angsuran_bunga' => Request()->angsuran_bunga,
            'id_nasabah' => Request()->id_nasabah,
        ];

        $this->PinjamanModel->editData($id_pinjaman, $data);
        return redirect()->route('pinjaman')->with('pesan','Data Berhasil Di Update');
    }

    public function delete($id_pinjaman)
    {
        $this->PinjamanModel->deleteData($id_pinjaman);
        return redirect()->route('pinjaman')->with('pesan','Data Berhasil Di Hapus');
    }

}
