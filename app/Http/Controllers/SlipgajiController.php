<?php

namespace App\Http\Controllers;

use App\Models\Slipgaji;
use Illuminate\Http\Request;

class SlipgajiController extends Controller
{
    function tampil() {
        $slipgaji = Slipgaji::get();
        return view('slip-gaji.slip-gaji', compact('slipgaji'));
    }
    function submit(Request $request) {
        $slipgaji = new Slipgaji();
        $slipgaji->perusahaan = $request->perusahaan;
        $slipgaji->bulan = $request->bulan;
        $slipgaji->tahun = $request->tahun;
        $slipgaji->jumlah = $request->jumlah;
        $slipgaji->keterangan = $request->keterangan;
        $slipgaji->lampiran = $request->lampiran;
        $slipgaji->save();

        return redirect()->route('slip-gaji.slip-gaji');
    }
}
