<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));
    }

        public function create()
    {
        return view('nilaikuliah.tambahdata');
    }

	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{

		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS,
		]);
		// alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');

	}

}
