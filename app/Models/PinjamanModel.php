<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PinjamanModel extends Model
{
    public function allData()
    {
        return DB::table('pinjaman')->get();
    }

    public function detailData($id_pinjaman)
    {
        return DB::table('pinjaman')->where('id_pinjaman', $id_pinjaman)->first();
    }
    
    public function addData($data)
    {
        DB::table('pinjaman')->insert($data);
    }

    public function editData($id_pinjaman, $data)
    {
        DB::table('pinjaman')
            ->where('id_pinjaman', $id_pinjaman)
            ->update($data);
    }
    public function deleteData ($id_pinjaman)
    {
        DB::table ('pinjaman')
            ->where('id_pinjaman', $id_pinjaman)
            ->delete();
    }
    
}
        
        