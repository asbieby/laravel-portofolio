<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BukuController extends Controller
{
    public function index()
  {
     $buku = DB::table('buku')->get();
    return response()->json($buku);
  }
}
