<?php

namespace App\Http\Controllers;

use App\Models\GrupBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function cekResi(Request $request) {
        $kodeResi = $request->input('kode_resi');
        $grupBarang = null;
        $listResi = GrupBarang::all();

        if ($kodeResi) {
            $grupBarang = GrupBarang::where('kode_resi', $kodeResi)->with('barangs')->first();

            if (!$grupBarang) {
                return redirect()->back()->with('error', 'Kode resi tidak ditemukan.');
            }
        }

        return view('navPage.cek_resi', compact('grupBarang', 'listResi'));
    }
    public function cekResiPublic(Request $request) {
        $kodeResi = $request->input('kode_resi');
        $grupBarang = null;
        $listResi = GrupBarang::all();

        if ($kodeResi) {
            $grupBarang = GrupBarang::where('kode_resi', $kodeResi)->with('barangs')->first();

            if (!$grupBarang) {
                return redirect()->back()->with('error', 'Kode resi tidak ditemukan.');
            }
        }

        return view('public.cek_resi', compact('grupBarang', 'listResi'));
    }
}
