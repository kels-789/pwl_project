<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table='table_dosen';
    protected $fillable=[
        'kode_kelas',
        'kode_mata_kuliah',
        'kode_dosen',
        'hari',
        'jam',
        'ruang_kelas',
        'jumlah_max',
        'jumlah_mahasiswa',
        'semester'
    ];

    public function ListJam() {
        
    }

    public function mataKuliah() {
        return $this->belongsTo(MataKuliah::class, 'kode_mata_kuliah');
    }

    public function dosen () {
        return $this->belongsTo(Dosen::class, 'kode_dosen');
    }
}
