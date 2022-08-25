<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinsiController extends Controller
{
    public function index()
    {
        $data['provinsi'] = DB::table('provinsis')->get();
        return view('provinsi.index',$data);
    }

    public function create(Request $request, $id = null){
        $data['provinsi'] = $request->provinsi;
        if($id == null){
            $simpan = DB::table('provinsis')->insert($data);
        }else{
            $simpan = DB::table('provinsis')->where('id', $id)->update($data);
        }

        return response()->json($simpan);
        
    }

    public function hapus($id){
        $hapus = DB::table('provinsis')->where('id', $id)->delete();
        return response()->json($hapus);
    }

}
