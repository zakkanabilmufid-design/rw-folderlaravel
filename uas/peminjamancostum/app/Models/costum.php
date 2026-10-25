<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costum extends Model
{
    protected $fillable = [
        "nama_kostum",
        "kategori_kostum",
        "ukuran_kostum",
        "hargasewa_kostum",
        "stock_kostum",
        "status_kostum"

    ];
}
