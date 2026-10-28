<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nomor_surat' => '100',  'tanggal' => '2026-10-13', 'pengirim' => 'Teknik',               'perihal' => 'Rapat'],
            ['nomor_surat' => '1001', 'tanggal' => '2027-11-10', 'pengirim' => 'Teknik Informatika',   'perihal' => 'Rapat Makan'],
            ['nomor_surat' => '1201', 'tanggal' => '2020-09-10', 'pengirim' => 'Teknik Informatika A', 'perihal' => 'Rapat Makan-makan'],
        ];

        foreach ($data as $surat) {
            DB::table('incoming_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}