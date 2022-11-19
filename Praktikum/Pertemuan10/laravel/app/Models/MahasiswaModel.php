<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
   use HasFactory;

   protected $table = 'tbl_mahasiswa';
   protected $primaryKey = 'nrp';
   protected $fillable = ['nrp', 'nama', 'email', 'alamat'];
}
