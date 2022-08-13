<?php

namespace App\Imports;

use App\Models\Userapp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UserImport implements ToModel, WithStartRow
{

    // pengambilan data dari kolom ke 2 file excel
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new Userapp([
            'nama' => $row[0],
            'alamat' => $row[1],
            'no_hp' => $row[2],
            'jenis_kelamin' => $row[3],
            'email' => $row[4],
            'password' => $row[5],
        ]);
    }
}
