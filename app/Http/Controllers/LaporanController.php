<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Exports\Datapangkalan;
use App\Imports\Dataimport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function formatexcel(){
        return Excel::download(new Datapangkalan(Auth::user()->id_provinsi,Auth::user()->id_kabupaten,Auth::user()->nama,Auth::user()->sold_to), 'laporan.xlsx');
    }

    public function uploadexcel(Request $r)
    {
        Excel::import(new Dataimport(), $r->file('file'), \Maatwebsite\Excel\Excel::XLSX);

        return back();
    }

    public function index($agen = null,$dari = null,$sampai=null)
    {
        $bulan = explode('-',$dari);
        $tahun = explode('-',$sampai);
        if(Auth::user()->level == 'AGEN'){
            if($dari != null && $sampai != null){
                $data['laporan'] = DB::table('laporans')
                                ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                                ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                                ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                                ->where('laporans.sold_to',Auth::user()->sold_to)
                                ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                                ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                                ->get();
            }else{
                $data['laporan'] = DB::table('laporans')
                                    ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                                    ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                                    ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                                    ->where('laporans.sold_to',Auth::user()->sold_to)
                                    ->get();

            }
        }elseif(Auth::user()->level == 'ADMIN APROVAL'){
            
            $data['agens'] = DB::table('user_apps')->where('level','AGEN')->where('id_provinsi',Auth::user()->id_provinsi)->where('id_kabupaten',Auth::user()->id_kabupaten)->get();
            if($agen != 0 && $dari != null && $sampai != null){
                $data['laporan'] = DB::table('laporans')
                                ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                                ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                                ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                                ->where('user_apps.id_provinsi',Auth::user()->id_provinsi)
                                ->where('user_apps.id_kabupaten',Auth::user()->id_kabupaten)
                                ->where('laporans.sold_to',$agen)
                                ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                                ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                                ->get();
            }elseif($dari != null && $sampai != null){
                
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->where('user_apps.id_provinsi',Auth::user()->id_provinsi)
                               ->where('user_apps.id_kabupaten',Auth::user()->id_kabupaten)
                               ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                               ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                               ->get();
            }elseif($agen != 0){
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->where('user_apps.id_provinsi',Auth::user()->id_provinsi)
                               ->where('user_apps.id_kabupaten',Auth::user()->id_kabupaten)
                               ->where('laporans.sold_to',$agen)
                               ->get();
            }else{
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->where('user_apps.id_provinsi',Auth::user()->id_provinsi)
                               ->where('user_apps.id_kabupaten',Auth::user()->id_kabupaten)
                               ->get();
            }
        }else{
            $data['agens'] = DB::table('user_apps')->where('level','AGEN')->where('id_provinsi',Auth::user()->id_provinsi)->where('id_kabupaten',Auth::user()->id_kabupaten)->get();
            if($agen != 0 && $dari != null && $sampai != null){
                $data['laporan'] = DB::table('laporans')
                                ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                                ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                                ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                                ->where('user_apps.id_provinsi',Auth::user()->id_provinsi)
                                ->where('user_apps.id_kabupaten',Auth::user()->id_kabupaten)
                                ->where('laporans.sold_to',$agen)
                                ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                                ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                                ->get();
            }elseif($dari != null && $sampai != null){
                
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->where(DB::raw("bulan between month('$bulan[1]') and month('$tahun[1]')"))
                               ->where(DB::raw("tahun between year('$bulan[0]') and year('$tahun[0]')"))
                               ->get();
            }elseif($agen != 0){
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->where('laporans.sold_to',$agen)
                               ->get();
            }else{
                $data['laporan'] = DB::table('laporans')
                               ->join('user_apps', 'user_apps.sold_to','laporans.sold_to')
                               ->join('pangkalans', 'pangkalans.id_registrasi','laporans.id_registrasi')
                               ->select('laporans.*','user_apps.nama','pangkalans.nama_pangkalan')
                               ->get();
            }
        }
        return view('laporan.index',$data);
    }
}
