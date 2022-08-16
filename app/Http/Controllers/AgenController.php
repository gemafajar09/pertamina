<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AgenController extends Controller
{
    public function index()
    {
        $data['agen'] = DB::table('user_apps')
        ->where('level','AGEN')
        ->join('provinsis','provinsis.id','user_apps.id_provinsi')
        ->join('kabupatens','kabupatens.id','user_apps.id_kabupaten')
        ->select('user_apps.*','provinsis.provinsi','kabupatens.kabupaten')
        ->get();
        return view('agen.index',$data);
    }

    public function add()
    {
        $data['provinsi'] = DB::table('provinsis')->get();
        $data['kabupaten'] = DB::table('kabupatens')->get();
        return view('agen.tambah',$data);
    }

    public function simpan(Request $request,$id = null){
        $data['nama'] = $request->nama_nspo;
        $data['id_provinsi'] = $request->provinsi;
        $data['id_kabupaten'] = $request->kabupaten;
        $data['mor'] = $request->mor;
        $data['sold_to'] = $request->sold_to;
        $data['email'] = $request->email;
        $data['alamat'] = $request->alamat;

        if($id == null){
            $cek = Validator::make($request->all(), [
                'sold_to' => 'required',
                'mor' => 'required',
                'nama_nspo' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'email' => 'required',
                'password' => 'required|min:8',
                ]
            );
            if ($cek->fails()) {
                return back()->withErrors($cek)->withInput();
            }
            
            $data['level'] = 'AGEN';
            $data['password'] = Hash::make($request->password);
            
            $simpan = DB::table('user_apps')->insert($data);
            
        }else{

            $cek = Validator::make($request->all(), [
                'sold_to' => 'required',
                'mor' => 'required',
                'nama_nspo' => 'required',
                'provinsi' => 'required',
                'kabupaten' => 'required',
                'email' => 'required'
                ]
            );
            if ($cek->fails()) {
                return back()->withErrors($cek)->withInput();
            }
            
            $simpan = DB::table('user_apps')->where('id',$id)->update($data);
        }

        if($simpan == TRUE){
            return redirect('agen')->with('success', 'Berhasil');
        }else{
            return back();
        }
    }

    public function edit($id){
        $data['provinsi'] = DB::table('provinsis')->get();
        $data['kabupaten'] = DB::table('kabupatens')->get();
        $data['agen'] = DB::table('user_apps')->where('id', $id)->first();
        
        return view('agen.edit', $data);
    }

    public function hapus($id)
    {
        $hapus = DB::table('user_apps')->where('id', $id)->delete();
        
        return response()->json($hapus);
    }
}
