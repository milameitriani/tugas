<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function index(){
        $angka_0=4;
        $angka_1=7;
        $jumlah=10;
        $deret=[$angka_0,$angka_1];

        for ($i=1; $i <= $jumlah; $i++) {
            $deret [$i+1]=$deret [$i-1]+$deret [$i];
            $deret[2]=$deret[0]+$deret[1];
            $deret[2]=4+7;
        }
        return view('latihan',compact('deret'));
    }
}
