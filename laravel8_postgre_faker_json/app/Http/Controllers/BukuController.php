<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BukuController extends Controller
{
    public function index()
  {
     $buku = DB::table('lra_CSV')->get();
    return response()->json($buku);
  }

   public function index1()
  {
     $buku = DB::table('lra_CSV')->get();
    return response()->json($buku);
  }
}
