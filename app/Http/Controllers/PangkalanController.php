<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PangkalanController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')
        ->join('kecamatans','kecamatans.id','pangkalans.kecamatan')
        ->join('kelurahans','kelurahans.id','pangkalans.kelurahan')
        ->select('pangkalans.*','kecamatans.kecamatan','kelurahans.kelurahan')
        ->get();
        return view('pangkalan.index', $data);
    }

    public function add(Request $r)
    {
        $data['provinsi'] = DB::table('provinsis')->where('id', Auth::user()->id_provinsi)->first();
        $data['kabupaten'] = DB::table('kabupatens')->where('id', Auth::user()->id_kabupaten)->first();
        $data['kecamatan'] = DB::table('kecamatans')->where('id_kabupaten', $data['kabupaten']->id)->get();
        return view('pangkalan.tambah', $data);
    }

    public function edit($id)
    {
        $cek = DB::table('pangkalans')->where('id', $id)->first();
        $data['provinsi'] = DB::table('provinsis')->where('id', $cek->provinsi)->first();
        $data['kabupaten'] = DB::table('kabupatens')->where('id', $cek->kabupaten)->first();
        $data['kecamatan'] = DB::table('kecamatans')->where('id_kabupaten', $cek->kabupaten)->get();
        $data['kelurahan'] = DB::table('kelurahans')->where('id_kecamatan', $cek->kecamatan)->get();
        $data['pangkalan'] = $cek;
        return view('pangkalan.edit', $data);
    }

    public function simpan(Request $request)
    {
        $cek = Validator::make($request->all(), [
            "id_register" => "required",
            "telpon_kantor" => "required",
            "no_ktp" => "required",
            "idProvinsi" => "required",
            "kecamatan" => "required",
            "kode_pos" => "required",
            "nama_pangkalan" => "required",
            "nama_pemilik" => "required",
            "no_hp" => "required",
            "idKabupaten" => "required",
            "kelurahan" => "required",
            "alamat" => "required"

        ]);
        // dd($cek->errors());
        if ($cek->fails()) {
            return back()->withErrors($cek)->withInput();
        }
        $data['id_registrasi'] = $request->id_register;
        $data['nama_pangkalan'] = $request->nama_pangkalan;
        $data['telpon_kantor'] = $request->telpon_kantor;
        $data['nama_pemilik'] = $request->nama_pemilik;
        $data['nik'] = $request->no_ktp;
        $data['no_hp'] = $request->no_hp;
        $data['provinsi'] = $request->idProvinsi;
        $data['kabupaten'] = $request->idKabupaten;
        $data['kecamatan'] = $request->kecamatan;
        $data['kelurahan'] = $request->kelurahan;
        $data['kode_pos'] = $request->kode_pos;
        $data['alamat'] = $request->alamat;
        $data['status'] = 'TIDAK AKTIF';

        $simpan = DB::table('pangkalans')->insert($data);
        // dd($simpan);

        if ($simpan) {
            return redirect('pangkalan')->with('success', 'Berhasil');
        } else {
            return back()->with('error', 'Gagal');
        }
    }

    public function update(Request $request)
    {
        $cek = Validator::make($request->all(), [
            "id" => "required",
            "id_register" => "required",
            "telpon_kantor" => "required",
            "no_ktp" => "required",
            "idProvinsi" => "required",
            "kecamatan" => "required",
            "kode_pos" => "required",
            "nama_pangkalan" => "required",
            "nama_pemilik" => "required",
            "no_hp" => "required",
            "idKabupaten" => "required",
            "kelurahan" => "required",
            "status" => "required",
            "alamat" => "required"

        ]);
        // dd($cek->errors());
        if ($cek->fails()) {
            return back()->withErrors($cek)->withInput();
        }

        $data['id_registrasi'] = $request->id_register;
        $data['nama_pangkalan'] = $request->nama_pangkalan;
        $data['telpon_kantor'] = $request->telpon_kantor;
        $data['nama_pemilik'] = $request->nama_pemilik;
        $data['nik'] = $request->no_ktp;
        $data['no_hp'] = $request->no_hp;
        $data['provinsi'] = $request->idProvinsi;
        $data['kabupaten'] = $request->idKabupaten;
        $data['kecamatan'] = $request->kecamatan;
        $data['kelurahan'] = $request->kelurahan;
        $data['kode_pos'] = $request->kode_pos;
        $data['alamat'] = $request->alamat;

        $update = DB::table('pangkalans')->where('id', $request->id)
            ->update($data);

        if ($update) {
            return redirect('pangkalan')->with('success', 'Berhasil');
        } else {
            return back()->with('error', 'Gagal');
        }
    }

    public function hapus($id){
        $hapus = DB::table('pangkalans')->where('id', $id)->delete();
        return response()-json($hapus);
    }

    public function getKelurahan($id)
    {
        $data['kelurahan'] = DB::table('kelurahans')->where('id', $id)->get();

        return view('pangkalan.kelurahan', $data);
    }
}
