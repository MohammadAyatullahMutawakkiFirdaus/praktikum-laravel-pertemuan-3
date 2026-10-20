@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')

        <h1>Dashboard</h1>
        <p>
            Selamat Datang di sistem informasi surat
        </p>


    <h1>Surat Masuk</h1>
    {{-- <p>ID Surat: {{ $id }}</p> --}}
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>nomor</th>
                <th>nomor_surat</th>
                <th>tanggal</th>
                <th>pengirim</th>
                <th>perihal</th>
                <th>judul</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($suratmasuk as $surat)
            <tr>
                <td>{{$loop->iteration }}</td>
                <td>{{$surat['nomor_surat']}}</td>
                <td>{{$surat['tanggal']}}</td>
                <td>{{$surat['pengirim']}}</td>
                <td>{{$surat['perihal']}}</td>
                <td><a href="{{route('surat-masuk.show', $surat['id'])}}">Detail</a></td>
            </tr>
             @endforeach
        </tbody>
    </table>

@endsection