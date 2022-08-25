<?php

namespace App\Exports;

use App\Models\Laporan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;

class Dataexportagen implements FromView
{
    protected $agen, $dari,$sampai;

    public function __construct($agen = null, $dari = null, $sampai = null)
    {
        $this->agen = $agen;
        $this->dari = $dari;
        $this->sampai = $sampai;
    }

    public function view(): View
    {
        $bulan = explode('-',$this->dari);
        $tahun = explode('-',$this->sampai);
        $data['data'] = DB::table('laporans')
                                ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                                ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                                ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                                ->where('laporans.sold_to',$this->agen)
                                ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                                ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                                ->get();
        return view('laporan.export', $data);
    }
}
