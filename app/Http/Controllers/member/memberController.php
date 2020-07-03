<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class memberController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }
}
