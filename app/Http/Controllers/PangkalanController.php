<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PangkalanController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')->get();
        return view('pangkalan.index',$data);
    }
    
    public function add(Request $r)
    {
        return view('pangkalan.tambah');
    }
}
