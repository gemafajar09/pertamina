<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['pangkalan'] = DB::table('pangkalans')->count();
        $data['agen'] = DB::table('user_apps')->where('level','AGEN')->count();
        
        return view('home.index',$data);
    }

    
}
