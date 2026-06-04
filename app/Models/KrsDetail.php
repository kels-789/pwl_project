<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KrsDetail extends Model
{
    protected $table='table_krs_detail';
    protected $fillable=[
        'kode_krs',
        'kode_kelas',
        'status'
    ];
}
