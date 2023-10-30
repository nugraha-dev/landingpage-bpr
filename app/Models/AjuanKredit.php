<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AjuanKredit extends Model
{
    use HasFactory;

    public $table = "ajuan_kredit";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'nomor',
        'pekerjaan',
        'domisili',
        'jenis_jaminan',
        'dokumen_jaminan',
        'lokasi_jaminan',
        'jumlah_pinjaman',
        'penghasilan',
    ];
}
