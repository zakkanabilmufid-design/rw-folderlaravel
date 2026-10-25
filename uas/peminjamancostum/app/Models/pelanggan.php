<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'alamat_pelanggan',
        'notlp_pelanggan',
        'email_pelanggan',
    ];
}
