<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = "pembayaran";
    protected $fillable = ["id_pembayaran","kd_order","total_bayar", "type"];

    public $timestamps = true;
}
