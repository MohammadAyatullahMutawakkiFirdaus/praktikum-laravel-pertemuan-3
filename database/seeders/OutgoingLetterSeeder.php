<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nomor_surat' => 'SK-001', 'tanggal' => '2026-10-15', 'tujuan' => 'Fakultas Teknik',     'perihal' => 'Undangan Rapat'],
            ['nomor_surat' => 'SK-002', 'tanggal' => '2026-10-16', 'tujuan' => 'Teknik Informatika',  'perihal' => 'Pemberitahuan Kegiatan'],
            ['nomor_surat' => 'SK-003', 'tanggal' => '2026-10-17', 'tujuan' => 'BEM Fakultas Teknik', 'perihal' => 'Surat Permohonan'],
        ];

        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
