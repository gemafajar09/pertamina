<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Imports\UserImport;

class UserappController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function createFile(Request $r)
    {
        Excel::import(new UserImport(), $r->file('upload'), \Maatwebsite\Excel\Excel::XLSX);

        return back();
    }

    public function export()
    {
        return Excel::download(new UserExport(), 'userapps.xlsx');
    }
}
