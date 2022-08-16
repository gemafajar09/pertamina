<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprovalController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')->join('provinsis','provinsis.id','pangkalans.provinsi')->join('kabupatens','kabupatens.id','pangkalans.kabupaten')->select('pangkalans.*','provinsis.provinsi','kabupatens.kabupaten')->get();
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
}
