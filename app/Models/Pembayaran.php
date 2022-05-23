<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayaran";
    protected $fillable = ["kd_order","total_bayar","type", "tanggal"];

    public $timestamps = true;
    protected $primaryKey = 'id_pembayaran';
}
