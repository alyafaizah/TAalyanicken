<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    use HasFactory;

    protected $table = "pemesanan";
    protected $fillable = ["kd_order","kd_tiket","id_profile", "tgl_kunjungan", "status"];

    public $timestamps = true;
    protected $primaryKey = 'id_pemesanan';

    // public function identitas(){
    //     return $this->belongsTo(Identitas::class);
    // }
}
