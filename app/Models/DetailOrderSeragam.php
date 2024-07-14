<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrderSeragam extends Model
{
    use HasFactory;
    protected $table = 't_pesan_seragam_detail';
    protected $primaryKey = 'id';

    protected $fillable = [
        'pesan_seragam_id',
        'no_pemesanan',
        'nama_siswa',
        'lokasi_sekolah',
        'nama_kelas'
    ];
}
