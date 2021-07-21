<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class InfoController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/positif');
        // $response = Http::get('https://api.kawalcorona.com/meninggal');
        $data = $response->json();
        // dd($datas["data"][0]);
        // foreach ($datas as $data => $d) {
        //     dd($data);
        // }
        return view('infocorona', compact('data'));

    }
}
