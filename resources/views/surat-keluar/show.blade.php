@extends('layouts.app')

@section('title', 'Detail Surat Keluar')

@section('content')

    <h1>Halaman Detail Surat Keluar</h1>

    @if($surat)

        <p>
            <strong>Nomor Surat:</strong>
            {{ $surat['nomor_surat'] }}
        </p>

        <p>
            <strong>Tanggal:</strong>
            {{ $surat['tanggal'] }}
        </p>

        <p>
            <strong>Tujuan:</strong>
            {{ $surat['tujuan'] }}
        </p>

        <p>
            <strong>Perihal:</strong>
            {{ $surat['perihal'] }}
        </p>

    @else

        <p>Surat tidak ditemukan</p>

    @endif

    <a href="{{ url('/surat-keluar') }}">
        Kembali
    </a>

@endsection