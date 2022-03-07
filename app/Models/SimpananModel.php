<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SimpananModel extends Model
{
    public function allData()
    {
        return DB::table('simpanan')->get();
    }

    public function detailData($id_simpanan)
    {
        return DB::table('simpanan')->where('id_simpanan', $id_simpanan)->first();
    }

    public function addData($data)
    {
        DB::table('simpanan')->insert($data);
    }

    public function editData($id_simpanan, $data)
    {
        DB::table('simpanan')
            ->where('id_simpanan', $id_simpanan)
            ->update($data);
    }
    public function deleteData ($id_simpanan)
    {
        DB::table ('simpanan')
            ->where('id_simpanan', $id_simpanan)
            ->delete();
    }
    
}
        
        