<?php

namespace App\Imports;

use App\Models\Laporan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class Dataimport implements ToModel, WithStartRow
{

    // pengambilan data dari kolom ke 2 file excel
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new Laporan([
            'sold_to' => $row[0],
            'id_registrasi' => $row[2],
            'bulan' => $row[4],
            'tahun' => $row[5],
            'bg_55' => $row[6],
            'bg_12' => $row[7],
            'e_50' => $row[8],
            'bg_can' => $row[9],
        ]);
    }
}
