<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $table = "identitas";
    protected $fillable = ["nama_lengkap", "alamat", "telepon", "tempat_lahir", "tgl_lahir"];

    // auto
    public $timestamps = true;
    protected $primaryKey = 'id_profile';

    public function identitas()
    {
        return $this->hasMany('App\Models\Profile','id_profile');
    }
}
