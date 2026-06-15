@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Data Tagihan Air</h2>

    <a href="/eas/create" class="btn btn-primary">Input Tagihan Baru</a>
    <br />


    <table class="table table-striped table-hover table-bordered mt-3">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan m³</th>
            <th>Total Tagihan</th>

        </tr>

        @forelse ($tagihan_air as $t)
        @php
                $penggunaan = $t->meterakhir - $t->meterawal;
        @endphp
        <tr>

                <td>{{ $t->id }}</td>
                <td>{{ $t->nometeran }}</td>
                <td>{{ $penggunaan }}</td>
                <td>{{ number_format($penggunaan * 5000, 0, ',', '.') }}</td>
        </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">Data Kosong</td>
            </tr>

        @endforelse

    </table>

@endsection
