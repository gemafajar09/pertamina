<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprovalController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')
                            ->join('provinsis','provinsis.id','pangkalans.provinsi')
                            ->join('kabupatens','kabupatens.id','pangkalans.kabupaten')
                            ->join('kecamatans','kecamatans.id','pangkalans.kecamatan')
                            ->join('kelurahans','kelurahans.id','pangkalans.kelurahan')
                            ->select('pangkalans.*','provinsis.provinsi as nama_prov','kabupatens.kabupaten as nama_kab','kecamatans.kecamatan as nama_kec','kelurahans.kelurahan as nama_kel')
                            ->get();
        return view('aproval.index',$data);
    }

    public function updates(Request $request){
        
        $data['status'] = $request->status;
        $data['keterangan'] = $request->keterangan;
        $up = DB::table('pangkalans')->where('id', $request->id)->update($data);

        if($up == TRUE){
            return back()->with('success', 'Berhasil');
        }else{
            return back()->with('error','Gagal');
        }
    }

    public function cek($id){
        $data = DB::table('pangkalans')
                            ->join('provinsis','provinsis.id','pangkalans.provinsi')
                            ->join('kabupatens','kabupatens.id','pangkalans.kabupaten')
                            ->join('kecamatans','kecamatans.id','pangkalans.kecamatan')
                            ->join('kelurahans','kelurahans.id','pangkalans.kelurahan')
                            ->select('pangkalans.*','provinsis.provinsi as nama_prov','kabupatens.kabupaten as nama_kab','kecamatans.kecamatan as nama_kec','kelurahans.kelurahan as nama_kel')
                            ->where('pangkalans.id',$id)
                            ->first();
        return response()->json($data);
    }
}
