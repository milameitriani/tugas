<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenarikanModel extends Model
{
    public function allData()
    {
        return DB::table('penarikan')->get();
    }

    public function detailData($id_penarikan)
    {
        return DB::table('penarikan')->where('id_penarikan', $id_penarikan)->first();
    }
    public function addData($data)
    {
        DB::table('penarikan')->insert($data);
    }
    public function editData($id_penarikan, $data)
    {
        DB::table('penarikan')
            ->where('id_penarikan', $id_penarikan)
            ->update($data);
    }
    public function deleteData ($id_penarikan)
    {
        DB::table ('penarikan')
            ->where('id_penarikan', $id_penarikan)
            ->delete();
    }
}
        
        