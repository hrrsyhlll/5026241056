<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KertasHVSController extends Controller
{

    public function index()
    {
        // mengambil data dari table kertashvs
        $kertashvs = DB::table('kertashvs')->get();

        // mengirim data kertashvs ke view index
        return view('KertasHVS.index', ['kertashvs' => $kertashvs]);
    }

    public function create()
    {
        return view('KertasHVS.create');
    }

    public function store(Request $request)
    {
        if ($request->stockkertashvs > 0) {
            $huruf = 'Y';
        }
        else {
            $huruf = 'N';
        }

        //insert data dari tabel kertashvs
        DB::table('kertashvs')->insert([
		'merkkertashvs' => $request->merkkertashvs,
		'stockkertashvs' => $request->stockkertashvs,
        'tersedia' => $huruf
        ]);

        //alihkan ke halaman kertashvs
        return redirect('/kertashvs');
    }

    public function edit($kodekertashvs)
    {
        //ambil data kertashvs berdasarkan kode kertas (id) yg dipilih
        $kertashvs = DB::table('kertashvs')->where('kodekertashvs',$kodekertashvs)->get();

        //passing data kertashvs yang didapat ke view edit.blade.php
        return view('KertasHVS.edit',['kertashvs' => $kertashvs]);
    }

    public function update(Request $request)
    {

        if ($request->stockkertashvs > 0) {
            $huruf = 'Y';
        }
        else {
            $huruf = 'N';
        }

        //update data tabel kertashvs
        DB::table('kertashvs')->where('kodekertashvs',$request->kodekertashvs)->update([
		'merkkertashvs' => $request->merkkertashvs,
		'stockkertashvs' => $request->stockkertashvs,
        'tersedia' => $huruf
        ]);

        //alihkan ke halaman kertashvs
        return redirect('/kertashvs');
    }

    public function delete($kodekertashvs)
    {
        //menghapus data pegawai berdasarkan kodekertashvs yang dipilih
        DB::table('kertashvs')->where('kodekertashvs',$kodekertashvs)->delete();

        //alihkan ke halaman kertashvs
        return redirect('/kertashvs');
    }
}
