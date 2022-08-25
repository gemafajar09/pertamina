<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8',
            ],[
                'email.required' => 'Pastikan Email Telah Benar Dan Tidak Kosong',
                'password.required' => 'Pastikan Password Telah Benar Dan Tidak Kosong',
            ]
        );
        if ($login->fails()) {
            return back()->withErrors($login)->withInput();
        }

        if (Auth::guard('user')->attempt(['email' => $request->email,'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect('home');
        }

        return back()->withErrors([
            'email' => ['Pastikan Email Telah Benar'],
            'password' => ['pastikan Password Telah Benar'],
        ])->withInput();
    }

    public function user(){
        $data['user'] = DB::table('user_apps')->join('provinsis','provinsis.id','user_apps.id_provinsi')->join('kabupatens','kabupatens.id','user_apps.id_kabupaten')->get();
        return view('user.index',$data);
    }

    public function addUser(){
        $data['provinsi'] = DB::table('provinsis')->get();
        $data['kabupaten'] = DB::table('kabupatens')->get();
        return view('user.tambah',$data);
    }

    public function simpanUser(Request $request){
        $cek = Validator::make($request->all(), [
            'nama' => 'required',
            'telpon' => 'required|min:11',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            ]
        );
        if ($cek->fails()) {
            return back()->withErrors($cek)->withInput();
        }

        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['telpon'] = $request->telpon;
        $data['id_provinsi'] = $request->provinsi;
        $data['id_kabupaten'] = $request->kabupaten;
        $data['level'] = $request->level;

        $pass = Hash::make($request->password);
        $data['password'] = $pass;

        $simpan = DB::table('user_apps')->insert($data);

        if($simpan){
            return redirect('user')->with('success', 'Berhasil Menyimpan Data');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function profile(){
        $data['user'] = DB::table('user_apps')
                        ->join('provinsis','provinsis.id','user_apps.id_provinsi')
                        ->join('kabupatens','kabupatens.id','user_apps.id_kabupaten')
                        ->where('user_apps.id',Auth::user()->id)
                        ->first();
        return view('user.profile',$data);
    }

    public function gantipassword(Request $r, $id){
        if($r->password == $r->password1){
            $pass = Hash::make($r->password);
            $up = DB::table('user_apps')->where('id',$id)->update(['password' => $pass]);
            if($up){
                return back()->with('success','Berhasil');
            }else{
                return back()->with('error','Periksa Kembali');
            }
        }else{
            return back()->with('error','Periksa Kembali');
        }
    }
    public function upuser(Request $r, $id){
        
        $data['nama'] = $r->nama;
        $data['email'] = $r->email;
        $data['telpon'] = $r->telpon;
        $data['sold_to'] = $r->sold_to;
        $data['alamat'] = $r->alamat;
        $up = DB::table('user_apps')->where('id',$id)->update($data);
        if($up){
            return back()->with('success','Berhasil');
        }else{
            return back()->with('error','Periksa Kembali');
        }
    }
}
