<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrsIsi extends Model
{
    protected $table='table_krs_isi';
    protected $fillable=[
        'kode_mahasiswa',
        'tahun_ajaran',
        'semester',
        'status',
        'total_sks'
    ];
}
