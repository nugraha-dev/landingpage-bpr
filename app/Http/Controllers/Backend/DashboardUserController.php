<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AjuanKredit;
use App\Models\Website;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.dashboardUser.index');
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
        $data = new AjuanKredit();
        $data->nama = $request->input('nama');
        $data->nomor = $request->input('nomor');
        $data->pekerjaan = $request->input('pekerjaan');
        $data->domisili = $request->input('domisili');
        $data->jenis_jaminan = $request->input('jenis_jaminan');
        $data->dokumen_jaminan = $request->input('dokumen_jaminan');
        $data->lokasi_jaminan = $request->input('lokasi_jaminan');
        $data->jumlah_pinjaman = $request->input('jumlah_pinjaman');
        $data->penghasilan = $request->input('penghasilan');
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = AjuanKredit::find($id);
        $kredit = AjuanKredit::all();

        return view('pages.dashboardUser.index', compact('data', 'kredit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            AjuanKredit::updateOrCreate(
                [
                    'id' => $id,
                ],
                [
                    'nama' => $request->nama,
                    'nomor' => $request->nomor,
                    'pekerjaan' => $request->pekerjaan,
                    'domisili' => $request->domisili,
                    'jenis_jaminan' => $request->jenis_jaminan,
                    'dokumen_jaminan' => $request->dokumen_jaminan,
                    'lokasi_jaminan' => $request->lokasi_jaminan,
                    'jumlah_pinjaman' => $request->jumlah_pinjaman,
                    'penghasilan' => $request->penghasilan,
                ]
            );
            return redirect()->route('user.dashboard')->with('success', 'Berhasil merubah data client');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('user.dashboard.show', $id)->withErrors($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            AjuanKredit::find($id)->delete();
            return redirect()->route('user.dashboard')->with('success', 'Berhasil menghapus client');
        } catch (\Throwable $th) {
            return redirect()->route('user.dashboard')->withErrors($th->getMessage());
        }
    }
}
