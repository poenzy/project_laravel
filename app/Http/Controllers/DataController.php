<?php

namespace App\Http\Controllers;

use App\Models\DummyData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataController extends Controller
{
    public function index()
    {
        // Pastikan Anda mengambil data dari model di sini
        $data = DummyData::all();

        // Lalu, kirim data tersebut ke view.
        // Ganti 'index' dengan nama file view Anda jika berbeda.
        return view('index', [
            'dummyData' => $data,
        ]);
    }
}