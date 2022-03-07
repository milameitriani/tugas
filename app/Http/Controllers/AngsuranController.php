<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AngsuranModel;

class AngsuranController extends Controller
{
    public function __construct()
    {
        $this->AngsuranModel = new AngsuranModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'angsuran' => $this->AngsuranModel->allData(),
        ];
        return view('angsuran', $data);
    }

    public function detail($id_angsuran)
    {
        if (!$this->AngsuranModel->detailData($id_angsuran)) {
            abort(404);
        }
        $data = [
            'angsuran' => $this->AngsuranModel->detailData(($id_angsuran)),
        ];
        return view('detailangsuran', $data);
    }

    public function add()
    {
        return view('addangsuran');
    }

    public function insert()
    {
        Request()->validate([
            'id_angsuran' => 'required|unique:angsuran,id_angsuran|min:1|max:11',
            'tgl_angsuran' => 'required',
            'angsuran' => 'required',
            'besar_pinjaman' => 'required',
            'sudah_dibayar' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'jumlah_angsuran' => 'required',
            'id_nasabah' => 'required',
        ],[
            'id_angsuran.required' => 'wajib di isi',
            'id_angsuran.unique' => 'id_angsuran sudah ada',
            'id_angsuran.min' => 'Min 1 Karakter',
            'id_angsuran.max' => 'Max 11 Karakter',
            'tgl_angsuran.required' => 'wajib di isi',
            'angsuran.required' => 'wajib di isi',
            'besar_pinjaman.required' => 'wajib di isi',
            'sudah_dibayar.required' => 'wajib di isi',
            'angsuran_pokok.required' => 'wajib di isi',
            'angsuran_bunga.required' => 'wajib di isi',
            'jumlah_angsuran.required' => 'wajib di isi',
            'id_nasabah.required' => 'wajib di isi',
        ]);
        $data =[
            'id_angsuran' => Request()->id_pinjaman,
            'tgl_angsuran' => Request()->tgl_angsuran,
            'angsuran' => Request()->angsuran,
            'besar_pinjaman' => Request()->besar_pinjaman,
            'sudah_dibayar' => Request()->sudah_dibayar,
            'angsuran_pokok' => Request()->angsuran_pokok,
            'angsuran_bunga' => Request()->angsuran_bunga,
            'jumlah_angsuran' => Request()->jumlah_angsuran,
            'id_nasabah' => Request()->id_nasabah,
        ];

        $this->AngsuranModel->addData($data);
        return redirect()->route('angsuran')->with('pesan','Data Berhasil Di Tambahkan');
    }
    public function edit($id_angsuran)
    {
        if (!$this->AngsuranModel->detailData($id_angsuran)) {
            abort(404);
        }
        $data = [
            'angsuran' => $this->AngsuranModel->detailData(($id_angsuran)),
        ];
        return view('editangsuran', $data);
    }

    public function update($id_angsuran)
    {
        Request()->validate([
            'id_angsuran' => 'required|min:1|max:11',
            'tgl_angsuran' => 'required',
            'angsuran' => 'required',
            'besar_pinjaman' => 'required',
            'sudah_dibayar' => 'required',
            'angsuran_pokok' => 'required',
            'angsuran_bunga' => 'required',
            'jumlah_angsuran' => 'required',
            'id_nasabah' => 'required',
        ],[
            'id_angsuran.required' => 'wajib di isi',
            'id_angsuran.unique' => 'id_angsuran sudah ada',
            'id_angsuran.min' => 'Min 1 Karakter',
            'id_angsuran.max' => 'Max 11 Karakter',
            'tgl_angsuran.required' => 'wajib di isi',
            'angsuran.required' => 'wajib di isi',
            'besar_pinjaman.required' => 'wajib di isi',
            'sudah_dibayar.required' => 'wajib di isi',
            'angsuran_pokok.required' => 'wajib di isi',
            'angsuran_bunga.required' => 'wajib di isi',
            'jumlah_angsuran.required' => 'wajib di isi',
            'id_nasabah.required' => 'wajib di isi',
        ]);
        $data =[
            'id_angsuran' => Request()->id_angsuran,
            'tgl_angsuran' => Request()->tgl_angsuran,
            'angsuran' => Request()->angsuran,
            'besar_pinjaman' => Request()->besar_pinjaman,
            'sudah_dibayar' => Request()->sudah_dibayar,
            'angsuran_pokok' => Request()->angsuran_pokok,
            'angsuran_bunga' => Request()->angsuran_bunga,
            'jumlah_angsuran' => Request()->jumlah_angsuran,
            'id_nasabah' => Request()->id_nasabah,
        ];

        $this->AngsuranModel->editData($id_angsuran, $data);
        return redirect()->route('angsuran')->with('pesan','Data Berhasil Di Update');
    }
    public function delete($id_angsuran)
    {
        $this->AngsuranModel->deleteData($id_angsuran);
        return redirect()->route('angsuran')->with('pesan','Data Berhasil Di Hapus');
    }
}
