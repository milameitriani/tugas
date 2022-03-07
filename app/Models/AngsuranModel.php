<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AngsuranModel extends Model
{
    public function allData()
    {
        return DB::table('angsuran')->get();
    }
    
    public function detailData($id_angsuran)
    {
        return DB::table('angsuran')->where('id_angsuran', $id_angsuran)->first();
    }
    public function addData($data)
    {
        DB::table('angsuran')->insert($data);
    }
    public function editData($id_angsuran, $data)
    {
        DB::table('angsuran')
            ->where('id_angsuran', $id_angsuran)
            ->update($data);
    }
    public function deleteData ($id_angsuran)
    {
        DB::table ('angsuran')
            ->where('id_angsuran', $id_angsuran)
            ->delete();
    }
    
}