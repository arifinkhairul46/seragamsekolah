<?php

namespace App\Http\Controllers;

use App\Models\DetailOrderSeragam;
use App\Models\Lokasi;
use App\Models\ProdukSeragam;
use App\Models\Seragam;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SeragamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::where('status', 1)->get();
        $produk_seragam = ProdukSeragam::all();
        return view('seragam.index', compact('lokasi', 'produk_seragam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seragam  $seragam
     * @return \Illuminate\Http\Response
     */
    public function show(Seragam $seragam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seragam  $seragam
     * @return \Illuminate\Http\Response
     */
    public function edit(Seragam $seragam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seragam  $seragam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seragam $seragam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seragam  $seragam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seragam $seragam)
    {
        //
    }

    public function invoice(Request $request, $id) {

        $pemesan = Seragam::where('no_pemesanan', $id)->first();
        // dd($pemesan);
        $detail_pesan = DetailOrderSeragam::where('no_pemesanan', $id)->get();

        // $pdf = Pdf::loadView('invoice.index', ['data' => $pemesan, $detail_pesan]);
     
        return view('invoice.index', compact('pemesan', 'detail_pesan'));
    }
}
