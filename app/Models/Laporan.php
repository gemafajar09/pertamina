<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporans';
    public $timestamps = false;
    protected $fillable = [
        'sold_to', 'id_registrasi','bulan','tahun','bg_55','bg_12','e_50','bg_can'
    ];
}
