<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BukuController extends Controller
{
    public function index()
  {
     $buku = DB::table('employees')->get();
    return response()->json($buku);
  }

   public function index1()
  {
     $buku = DB::table('migrations')->get();
    return response()->json($buku);
  }
}
