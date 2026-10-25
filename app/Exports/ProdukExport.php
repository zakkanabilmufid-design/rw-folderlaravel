<?php

namespace App\Exports;
use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProdukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Produk::all();
    }
    public function heading(): array
    {
        return [
            'Nama Produk',
            'Kategori',
            'Harga',
            'Stok',
            'Created At',
            'Updated At',
        ];
    }
}
