<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    public function index()
    {
        $data['kabupaten'] = DB::table('kabupatens')->get();
        $data['kecamatan'] = DB::table('kecamatans')
        ->join('kabupatens','kabupatens.id','kecamatans.id_kabupaten')
        ->select('kecamatans.*','kabupatens.kabupaten','kabupatens.id as id_kabupaten')
        ->get();
        return view('kecamatan.index',$data);
    }

    public function create(Request $request, $id = null){
        $data['id_kabupaten'] = $request->kabupaten;
        $data['kecamatan'] = $request->kecamatan;
        if($id == null){
            $simpan = DB::table('kecamatans')->insert($data);
        }else{
            $simpan = DB::table('kecamatans')->where('id', $id)->update($data);
        }

        return response()->json($simpan);
        
    }

    public function hapus($id){
        $hapus = DB::table('kecamatans')->where('id', $id)->delete();
        return response()->json($hapus);
    }

}
