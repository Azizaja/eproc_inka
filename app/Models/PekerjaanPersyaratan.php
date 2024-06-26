<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanPersyaratan extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan_persyaratan';

    protected $guarded = ['id'];

    const TIPE_PILIHAN_BENAR_SALAH = 1;

    const TIPE_NILAI = 2;
}
