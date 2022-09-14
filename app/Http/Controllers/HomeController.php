<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')->count();
        $data['agen'] = DB::table('user_apps')->where('level', 'AGEN')->count();
        $data['data_pangkalan_aktif'] = DB::table('pangkalans')
            ->join('provinsis', 'provinsis.id', 'pangkalans.provinsi')
            ->join('kabupatens', 'kabupatens.id', 'pangkalans.kabupaten')
            ->select('pangkalans.*', 'provinsis.provinsi', 'kabupatens.kabupaten')
            ->where('status', 'AKTIF')
            ->get();
        return view('home.index', $data);
    }
}
