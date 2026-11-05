@extends('layouts.app')

@section('title', 'Surat Keluar')

@section('content')

    <h1>Daftar Surat Keluar</h1>

    @can('manage-letters')
        <p><a href="{{ route('surat-keluar.create') }}">+ Tambah Surat</a></p>
    @endcan

    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($suratkeluar as $surat)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $surat->nomor_surat }}</td>
                    <td>{{ $surat->tanggal }}</td>
                    <td>{{ $surat->tujuan }}</td>
                    <td>{{ $surat->perihal }}</td>
                    <td>
                        <a href="{{ route('surat-keluar.show', $surat->id) }}">Detail</a>

                        @can('manage-letters')
                            <a href="{{ route('surat-keluar.edit', $surat->id) }}">Edit</a>
                            <form method="POST" action="{{ route('surat-keluar.destroy', $surat->id) }}" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Hapus surat ini?')">Hapus</button>
                            </form>
                        @endcan
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada surat keluar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

@endsection