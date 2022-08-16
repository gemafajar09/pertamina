<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KabupatenController extends Controller
{
    public function index()
    {
        $data['provinsi'] = DB::table('provinsis')->get();
        $data['kabupaten'] = DB::table('kabupatens')
        ->join('provinsis','provinsis.id','kabupatens.id_provinsi')
        ->select('kabupatens.*','provinsis.provinsi','provinsis.id as id_provinsi')
        ->get();
        return view('kabupaten.index',$data);
    }

    public function create(Request $request, $id = null){
        $data['id_provinsi'] = $request->provinsi;
        $data['kabupaten'] = $request->kabupaten;
        if($id == null){
            $simpan = DB::table('kabupatens')->insert($data);
        }else{
            $simpan = DB::table('kabupatens')->where('id', $id)->update($data);
        }

        return response()->json($simpan);
        
    }

    public function hapus($id){
        $hapus = DB::table('kabupaten')->where('id', $id)->delete();
        return response()->json($hapus);
    }

}
