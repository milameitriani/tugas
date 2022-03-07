<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimpananModel;

class SimpananController extends Controller
{
    public function __construct()
    {
        $this->SimpananModel = new SimpananModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'simpanan' => $this->SimpananModel->allData(),
        ];
        return view('simpanan', $data);
    }

    public function detail($id_simpanan)
    {
        if (!$this->SimpananModel->detailData($id_simpanan)) {
            abort(404);
        }
        $data = [
            'simpanan' => $this->SimpananModel->detailData(($id_simpanan)),
        ];
        return view('detailsimpanan', $data);
    }

    public function add()
    {
        return view('addsimpanan');
    }

    public function insert()
    {
        Request()->validate([
            'id_simpanan' => 'required|unique:simpanan,id_simpanan|min:1|max:11',
            'tgl_input_angsuran' => 'required',
            'nama_nasabah' => 'required',
            'nama_petugas' => 'required',
            'total_simpanan' => 'required',
        ],[
            'id_simpanan.required' => 'wajib di isi',
            'id_simpanan.unique' => 'id_simpanan sudah ada',
            'id_simpanan.min' => 'Min 1 Karakter',
            'id_simpanan.max' => 'Max 11 Karakter',
            'tgl_input_angsuran.required' => 'wajib di isi',
            'nama_nasabah.required' => 'wajib di isi',
            'nama_petugas.required' => 'wajib di isi',
            'total_simpanan.required' => 'wajib di isi',
        ]);
        $data =[
            'id_simpanan' => Request()->id_pinjaman,
            'tgl_input_angsuran' => Request()->tgl_input_angsuran,
            'nama_nasabah' => Request()->nama_nasabah,
            'nama_petugas' => Request()->nama_petugas,
            'total_simpanan' => Request()->total_simpanan,
        ];

        $this->SimpananModel->addData($data);
        return redirect()->route('simpanan')->with('pesan','Data Berhasil Di Tambahkan');
    }

    public function edit($id_simpanan)
    {
        if (!$this->SimpananModel->detailData($id_simpanan)) {
            abort(404);
        }
        $data = [
            'simpanan' => $this->SimpananModel->detailData(($id_simpanan)),
        ];
        return view('editsimpanan', $data);
    }

    public function update($id_simpanan)
    {
        Request()->validate([
            'id_simpanan' => 'required|min:1|max:11',
            'tgl_input_angsuran' => 'required',
            'nama_nasabah' => 'required',
            'nama_petugas' => 'required',
            'total_simpanan' => 'required',
        ],[
            'id_simpanan.required' => 'wajib di isi',
            'id_simpanan.unique' => 'id_simpanan sudah ada',
            'id_simpanan.min' => 'Min 1 Karakter',
            'id_simpanan.max' => 'Max 11 Karakter',
            'tgl_input_angsuran.required' => 'wajib di isi',
            'nama_nasabah.required' => 'wajib di isi',
            'nama_petugas.required' => 'wajib di isi',
            'total_simpanan.required' => 'wajib di isi',
        ]);
        $data =[
            'id_simpanan' => Request()->id_simpanan,
            'tgl_input_angsuran' => Request()->tgl_input_angsuran,
            'nama_nasabah' => Request()->nama_nasabah,
            'nama_petugas' => Request()->nama_petugas,
            'total_simpanan' => Request()->total_simpanan,
        ];

        $this->SimpananModel->editData($id_simpanan, $data);
        return redirect()->route('simpanan')->with('pesan','Data Berhasil Di Update');
    }
    public function delete($id_simpanan)
    {
        $this->SimpananModel->deleteData($id_simpanan);
        return redirect()->route('simpanan')->with('pesan','Data Berhasil Di Hapus');
    }
}
