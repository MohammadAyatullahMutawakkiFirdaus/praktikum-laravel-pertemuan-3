<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suratmasukcontroller extends Controller
{
    public function index()
    {
        return view('surat-masuk');
    }

public function show($id)
    {
        // Langsung mengembalikan teks string
        return 'surat masuk controller id: ' . $id;
    }
}
        //return 'halaman surat dari controller';


//mencari projek sistem informasi yang di pandu oleh laravel kemudian,
//dipelajari . cari di pustaka coding atau di lainnya.