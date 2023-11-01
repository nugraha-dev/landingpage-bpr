<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentBanner = Banner::where('tgl_awal', '<=', now())
            ->where('tgl_akhir', '>=', now())
            ->firstOrNew();

        $nextBanner = Banner::where('tgl_awal', '>', now())
            ->orderBy('tgl_awal', 'asc')
            ->first();

        return view('pages.banner.index', compact('currentBanner', 'nextBanner'));
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
        try {
            Banner::create(
                [
                    'banner_sekarang' => $request->input('banner_sekarang'),
                    'tgl_awal' => $request->input('tgl_awal'),
                    'tgl_akhir' => bcrypt($request->input('tgl_akhir')),
                    'banner_nanti' => bcrypt($request->input('banner_nanti')),
                ]
            );
            return redirect()->route('admin.banner')->with('success', 'Akun berhasil dibuat');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.banner')->withErrors($th->getMessage());
        }
        return redirect()->route('admin.banner')->withErrors('Akun sudah ada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            Banner::updateOrCreate(
                [
                    'id' => $id,
                ],
                [
                    'banner_sekarang' => $request->banner_sekarang,
                    'tgl_awal' => $request->tgl_awal,
                    'tgl_akhir' => $request->tgl_akhir,
                    'banner_nanti' => $request->banner_nanti,
                ]
            );
            return redirect()->route('admin.banner')->with('success', 'Berhasil merubah banner');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('admin.banner.show', $id)->withErrors($th->getMessage());
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
            Banner::find($id)->delete();
            return redirect()->route('admin.banner')->with('success', 'Berhasil menghapus banner');
        } catch (\Throwable $th) {
            return redirect()->route('admin.banner')->withErrors($th->getMessage());
        }
    }
}
