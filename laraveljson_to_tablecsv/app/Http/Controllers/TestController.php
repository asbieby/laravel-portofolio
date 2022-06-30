<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost/');
        $data = $response->json();
        // return view('index', compact('data'));
        return view('index',['data'=>$data]);
        // return $response->json();
    }

    public function getPostById($id)
    {
        $post = Http::get('http://localhost/'.$id);
        return $post->json();
    }
}
