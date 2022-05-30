<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profile";
    protected $fillable = ["username", "level", "email", "password", "status"];

    // auto
    public function profile()
    {
        return $this->belongsTo('App\Models\Identitas', 'id_profile');
    }


    public $timestamps = false;
}
