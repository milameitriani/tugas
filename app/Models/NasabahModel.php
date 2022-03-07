<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NasabahModel extends Model
{
    public function allData()
    {
        return DB::table('nasabah')->get();
    }

    public function detailData($id_nasabah)
    {
        return DB::table('nasabah')->where('id_nasabah', $id_nasabah)->first();
    }
    public function addData($data)
    {
        DB::table('nasabah')->insert($data);
    }
    public function editData($id_nasabah, $data)
    {
        DB::table('nasabah')
            ->where('id_nasabah', $id_nasabah)
            ->update($data);
    }
    public function deleteData ($id_nasabah)
    {
        DB::table ('nasabah')
            ->where('id_nasabah', $id_nasabah)
            ->delete();
    }
}
        
        