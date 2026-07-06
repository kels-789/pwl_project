<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table='table_matakuliah';
    protected $fillable=[
        'jurusan_id',
        'Kode_MK',
        'Nama_MK',
        'SKS',
        'dosen_id'
    ];

    public function kelas() {
        return $this->hasMany(Kelas::class, 'id', 'kode_mata_kuliah');
    }
}
