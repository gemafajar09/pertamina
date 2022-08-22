<?php

namespace App\Exports;

use App\Models\Pangkalan;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class Datapangkalan implements FromView
{
    protected $provinsi, $kabupaten,$agen,$sold_to;

    public function __construct($provinsi = null, $kabupaten = null,$agen = null,$sold_to = null)
    {
        $this->provinsi = $provinsi;
        $this->kabupaten = $kabupaten;
        $this->agen = $agen;
        $this->sold_to = $sold_to;
    }
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        $data['data'] = Pangkalan::where('provinsi',$this->provinsi)->where('kabupaten',$this->kabupaten)->get();
        $data['agen'] = $this->agen;
        $data['sold_to'] = $this->sold_to;
        return view('laporan.formattemplate', $data);
    }
}
