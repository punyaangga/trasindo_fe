<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class jenisSampahController extends Controller
{

    public function index(){
        $token = '7|Te5FwHsRM23ly7J7NDPSa64c9QkjffB2QOKq2t9b';
        $res = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token ,
        ])->get('http://127.0.0.1:8000/api/jenisSampah');

        $data['jeniSampah'] = $res->json()['data'];
        return view('admin.jenisSampah.index', $data);

    }
    public function create(){
        return view('admin.jenisSampah.create');
    }
    public function edit(){
        return view('admin.jenisSampah.edit');
    }
}
