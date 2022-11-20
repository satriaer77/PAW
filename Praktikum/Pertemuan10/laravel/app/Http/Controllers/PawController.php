<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class PawController extends Controller
{
    public function mahasiswa()
    {
        $dataMahasiwa = MahasiswaModel::get();
      
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
    public function editMahasiswa(Request $request)
    {
        $dataMahasiwa = DB::table("tbl_mahasiswa")->where("nrp",$request->nrp)->first();
        return view('edit-mahasiswa',[
            'title' => "Halaman Edit Mahasiswa",
            'page'  => "inputMhs",
            'dms'   => $dataMahasiwa
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

         return redirect("/");
    }

    public function updateMahasiswa(Request $request)
    {
        MahasiswaModel::where("nrp",$request->nrpf)->update([
            'nama'   => $request->nama,
            'email'  => $request->email,
            'alamat' => $request->alamat
        ]);

         return redirect("/");
    }

    public function deleteMahasiswa(Request $request)
    {
        $mhs = MahasiswaModel::destroy($request->nrp);

         return redirect("/");
    }

}
