<?php

namespace App\Exports;

use App\Models\perpustakaan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PerpustakaanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return perpustakaan::join('buku','rak_buku.id_buku','buku.id')
        ->join('jenis_buku','rak_buku.id_jenis_buku','jenis_buku.id')
        ->select('rak_buku.id','buku.judul','buku.tahun_terbit','jenis_buku.jenis')
        ->get();
    }
}
