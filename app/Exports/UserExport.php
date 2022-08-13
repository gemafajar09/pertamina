<?php

namespace App\Exports;

use App\Models\Userapp;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Userapp::all();
    }
}
