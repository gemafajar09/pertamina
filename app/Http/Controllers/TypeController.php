<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index()
    {
        $data['type'] = DB::table('types')->get();
        return view('type.index',$data);
    }

    public function create(Request $request, $id = null){
        $data['type'] = $request->type;
        if($id == null){
            $simpan = DB::table('types')->insert($data);
        }else{
            $simpan = DB::table('types')->where('id', $id)->update($data);
        }

        return response()->json($simpan);
        
    }

    public function hapus($id){
        $hapus = DB::table('types')->where('id', $id)->delete();
        return response()->json($hapus);
    }

}
