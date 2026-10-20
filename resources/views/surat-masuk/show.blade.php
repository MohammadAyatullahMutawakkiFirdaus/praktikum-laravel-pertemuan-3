@extends('layouts.app')

@section('title', 'Detail Surat Masuk')

@section('content')
        <h1>Dashboard</h1>
        <p>
            Selamat Datang di sistem informasi surat
        </p>
                <h1>halaman detail surat masuk</h1>
@if($surat)
    
                <p>
                    <strong>nomor surat</strong>
                    {{$surat['nomor_surat']}}
                </p>

                                <p>
                    <strong>tanggal</strong>
                    {{$surat['tanggal']}}
                </p>

                                <p>
                    <strong>pengirim</strong>
                    {{$surat['pengirim']}}
                </p>

                                <p>
                    <strong>perihal</strong>
                    {{$surat['perihal']}}
                </p>
@else
<p>surat tidak ditemukan</p>
@endif
                <a href="{{route('surat-masuk.index')}}">kembali</a>

            </body>
        </head>
@endsection