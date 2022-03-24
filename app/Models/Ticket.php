<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = "data_tiket";
    protected $fillable = ["kd_tiket", "jenis", "harga", "stok", "keterangan"];

    // auto
    public $timestamps = true;
    protected $primaryKey = 'kd_tiket';
}
