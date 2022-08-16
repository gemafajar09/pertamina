<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelurahanController extends Controller
{
    public function index()
    {
        $data['kecamatan'] = DB::table('kecamatans')->get();
        $data['kelurahan'] = DB::table('kelurahans')
        ->join('kecamatans','kecamatans.id','kelurahans.id_kecamatan')
        ->select('kelurahans.*','kecamatans.kecamatan','kecamatans.id as id_kecamatan')
        ->get();
        return view('kelurahan.index',$data);
    }

    public function create(Request $request, $id = null){
        $data['id_kecamatan'] = $request->kecamatan;
        $data['kelurahan'] = $request->kelurahan;
        if($id == null){
            $simpan = DB::table('kelurahans')->insert($data);
        }else{
            $simpan = DB::table('kelurahans')->where('id', $id)->update($data);
        }

        return response()->json($simpan);
        
    }

    public function hapus($id){
        $hapus = DB::table('kelurahans')->where('id', $id)->delete();
        return response()->json($hapus);
    }

}
