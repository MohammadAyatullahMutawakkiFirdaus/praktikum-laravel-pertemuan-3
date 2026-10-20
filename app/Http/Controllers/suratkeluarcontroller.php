<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suratkeluarcontroller extends Controller
{
    public function index()
    {
        $suratkeluar = [
            [
                'id' => 1,
                'nomor_surat' => 'SK-001',
                'tanggal' => '15-10-2026',
                'tujuan' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            [
                'id' => 2,
                'nomor_surat' => 'SK-002',
                'tanggal' => '16-10-2026',
                'tujuan' => 'Teknik Informatika',
                'perihal' => 'Pemberitahuan Kegiatan'
            ],
            [
                'id' => 3,
                'nomor_surat' => 'SK-003',
                'tanggal' => '17-10-2026',
                'tujuan' => 'BEM Fakultas Teknik',
                'perihal' => 'Surat Permohonan'
            ]
        ];

        return view('surat-keluar.index', compact('suratkeluar'));
    }

    public function show($id)
    {
        $suratkeluarshow = [
            1 => [
                'id' => 1,
                'nomor_surat' => 'SK-001',
                'tanggal' => '15-10-2026',
                'tujuan' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat'
            ],
            2 => [
                'id' => 2,
                'nomor_surat' => 'SK-002',
                'tanggal' => '16-10-2026',
                'tujuan' => 'Teknik Informatika',
                'perihal' => 'Pemberitahuan Kegiatan'
            ],
            3 => [
                'id' => 3,
                'nomor_surat' => 'SK-003',
                'tanggal' => '17-10-2026',
                'tujuan' => 'BEM Fakultas Teknik',
                'perihal' => 'Surat Permohonan'
            ]
        ];

        $surat = $suratkeluarshow[$id] ?? null;

        return view('surat-keluar.show', compact('surat'));
    }
}