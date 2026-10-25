<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'idpelanggan',
        'idkostum',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'total_biaya',
        'status'
    ];

    public function kostum(): BelongsTo
    {
        return $this->belongsTo(kostum::class,'idkostum');
    }

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(pelanggan::class,'idpelanggan');
    }
}
