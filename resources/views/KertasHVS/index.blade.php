@extends('template')
@section('title', 'Data Kertas HVS')
@section('konten')

    <h2>Data Kertas HVS</h2>

    <a href="/kertashvs/create" class="btn btn-primary">+ Tambah Data</a>
    <br />


    <table class="table table-striped table-hover table-bordered mt-3">
        <tr>
            <th>Kode Kertas</th>
            <th>Merek Kertas</th>
            <th>Stok Kertas</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @forelse ($kertashvs as $krow)
        <tr>
            @php
                if ($krow->stockkertashvs > 0) {
                    $huruf = 'Y';
                }
                else {
                    $huruf = 'N';
                }

            @endphp
            <td> {{$krow->kodekertashvs}}</td>
            <td> {{$krow->merkkertashvs}}</td>
            <td> {{$krow->stockkertashvs}}</td>
            <td> {{$huruf}}</td>
            <td>
				<a href="/kertashvs/edit/{{ $krow->kodekertashvs }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kertashvs/delete/{{ $krow->kodekertashvs }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

        @empty
            <tr>
                <td colspan="6" class="text-center">Data Kosong</td>
            </tr>

        @endforelse

    </table>

@endsection
