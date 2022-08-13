<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprovalController extends Controller
{
    public function index()
    {
        return view('aproval.index');
    }
}
