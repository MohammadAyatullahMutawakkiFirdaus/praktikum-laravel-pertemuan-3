<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suratmasukcontroller extends Controller
{
    public function index()
    
    {
        {
        // Langsung mengembalikan teks string
       // return 'surat masuk controller id: ' . $id;
       $suratmasuk = [
        [
            'id' => 1,
            'nomor_surat' => '100',
            'tanggal' => '13-10-2026',
            'pengirim' => 'Teknik',
            'perihal' => 'Rapat'
        ],
        [         
            'id' => 10,
            'nomor_surat' => '1001',
            'tanggal' => '10-11-2027',
            'pengirim' => 'Teknik Informatika',
            'perihal' => 'Rapat Makan'
        ],
        [
            'id' => 20,
            'nomor_surat' => '1201',
            'tanggal' => '10-09-2020',
            'pengirim' => 'Teknik Informatika A',
            'perihal' => 'Rapat Makan-makan'
        ]
       ];
       return view('surat-masuk.index', compact('suratmasuk'));
    }
    }

public function show($id)
    {
        $suratmasukshow = [
        1 => [
            'id' => 1,
            'nomor_surat' => '100',
            'tanggal' => '13-10-2026',
            'pengirim' => 'Teknik',
            'perihal' => 'Rapat'
            ],
        2 =>[         
            'id' => 2,
            'nomor_surat' => '1001',
            'tanggal' => '10-11-2027',
            'pengirim' => 'Teknik Informatika',
            'perihal' => 'Rapat Makan'
            ],
        3 =>[
            'id' => 3,
            'nomor_surat' => '1201',
            'tanggal' => '10-09-2020',
            'pengirim' => 'Teknik Informatika A',
            'perihal' => 'Rapat Makan-makan'
        ]
       ];
       $surat = $suratmasukshow[$id] ?? null;
       return view('surat-masuk.show', compact('surat'));
    
    }
}

//return 'halaman surat dari controller';


//mencari projek sistem informasi yang di pandu oleh laravel kemudian,
//dipelajari . cari di pustaka coding atau di lainnya.