<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = "diskon";
    protected $fillable = ["kode_diskon","nama_diskon","foto_diskon", "keterangan_diskon", "nilai_diskon", "tgl_awal", "tgl_akhir", "status"];

    public $timestamps = true;
    protected $primaryKey = 'id_diskon';
}
