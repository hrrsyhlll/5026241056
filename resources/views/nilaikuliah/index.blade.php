@extends('template')
@section('title', 'Data Nilai Kuliah')
@section('konten')

    <h2>Data Nilai Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilaikuliah.create') }}">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilaikuliah as $n)
            @php
                if ($n->NilaiAngka <= 40) {
                    $huruf = 'D';
                } elseif ($n->NilaiAngka <= 60) {
                    $huruf = 'C';
                } elseif ($n->NilaiAngka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }

                $bobot = $n->NilaiAngka * $n->SKS;
            @endphp
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>


            </tr>
             @empty
            <tr>
                <td colspan="5">Belum ada data siswa.</td>
            </tr>
        @endforelse

    </table>
@endsection
