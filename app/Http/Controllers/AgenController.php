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
        return view('agen.index');
    }

    public function add()
    {
        $data['provinsi'] = DB::table('provinsis')->get();
        $data['kabupaten'] = DB::table('kabupatens')->get();
        return view('agen.tambah',$data);
    }

    public function simpan(Request $request){
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

        $data['nama'] = $request->nama_nspo;
        $data['id_provinsi'] = $request->provinsi;
        $data['id_kabupaten'] = $request->kabupaten;
        $data['mor'] = $request->mor;
        $data['sold_to'] = $request->sold_to;
        $data['email'] = $request->email;
        $data['alamat'] = $request->alamat;
        $data['level'] = 'AGEN';
        $data['password'] = Hash::make($request->password);

        $simpan = DB::table('user_apps')->insert($data);

        if($simpan){
            return redirect('agen')->with('success', 'Berhasil');
        }
    }

    public function update()
    { 
        // cek data buku
        $cek = DB::table('buku')->where('id_buku',$id)->first();

        // update stok
        $stok = $cek->stok;
        $stokmasuk = $stok + $r->jumlah;
        DB::table('buku')->where('id_buku',$id)->update(['stok' => $stokmasuk]);

        // simpan tabel history
        $simpan = DB::table('history')->insert(['id_buky' => $id, 'jumlah' => $r->jumlah, 'tanggal'=> $tgl]);
        return back();
    }
}
