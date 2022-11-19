<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PawController extends Controller
{
    public function mahasiswa()
    {
        $dataMahasiwa = DB::table("tbl_mahasiswa")->get();
       var_dump($dataMahasiwa);
        return view('mahasiswa',[
            'title' => "Halaman Mahasiswa",
            'page'  => "dataMhs",
            'dms'   => $dataMahasiwa
        ]);
    }
    public function inputMahasiswa()
    {
        return view('input-mahasiswa',[
            'title' => "Halaman Mahasiswa",
            'page'  => "inputMhs"
        ]);
    }
    public function about()
    {
        return view('about',[
            'title' => "Halaman Mahasiswa",
            'page'  => "about"
        ]);
    }  
    public function insertMahasiswa(Request $request)
    {
        $mhs = MahasiswaModel::create([
            'nrp'    => $request->nrp,
            'nama'   => $request->nama,
            'email'  => $request->email,
            'alamat' => $request->alamat
        ]);

         return redirect()->route('/');
    }

}
