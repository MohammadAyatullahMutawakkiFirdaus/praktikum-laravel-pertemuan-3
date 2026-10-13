<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>surat masuk</title>
        <head>
            <body>
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