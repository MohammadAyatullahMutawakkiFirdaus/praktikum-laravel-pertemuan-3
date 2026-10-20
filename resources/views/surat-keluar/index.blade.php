@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')

    <h1>Surat Keluar</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Perihal</th>
                <th>Judul</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suratkeluar as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat['nomor_surat'] }}</td>
                    <td>{{ $surat['tanggal'] }}</td>
                    <td>{{ $surat['tujuan'] }}</td>
                    <td>{{ $surat['perihal'] }}</td>
                    <td>
                        <a href="/surat-keluar/{{ $surat['id'] }}">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

