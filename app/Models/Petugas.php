<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = "profile";
    protected $fillable = ["password", "level", "email", "status_akun"];

    public $timestamps = false;
    // public $timestamps = [ "created_at", "updated_at" ];
}
