<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    function index()
    {
        $mhs = DB::table("tbl_mhs")->get();
    
        return view("tabel_mahasiswa",["mahasiswa" => $mhs,"title" => "Tabel Mahasiswa"]);
    }



}
