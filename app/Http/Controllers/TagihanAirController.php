<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function index()
    {
        // mengambil data dari table tagihan_air
        $tagihan_air = DB::table('tagihan_air')->get();

        // mengirim data tagihan_air ke view index
        return view('tagihan_air.index', ['tagihan_air' => $tagihan_air]);
    }

    public function create()
    {
        return view('tagihan_air.create');
    }

    public function store(Request $request)
    {
        DB::table('tagihan_air')->insert([
            'nometeran' => $request->nometeran,
            'meterawal' => $request->meterawal,
            'meterakhir' => $request->meterakhir
        ]);

        //alihkan ke halaman tagihan_air
        return redirect('/eas');

    }
}
