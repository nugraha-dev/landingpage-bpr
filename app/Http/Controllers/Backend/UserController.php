<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereNotnull('email')->get();
        return view('pages.user.index', compact('data'));
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
        $validation = $request->validate(
            [
                'email' => ['required'],
                'roles_id' => ['required'],
                'password' => ['required', 'confirmed'],
            ]
        );
        if (User::where('email', $request->input('email'))->first() == null) {
            try {
                User::create(
                    [
                        'roles_id' => $request->input('roles_id'),
                        'email' => $request->input('email'),
                        'password' => bcrypt($request->input('password')),
                    ]
                );
                return redirect()->route('admin.user')->with('success', 'Akun berhasil dibuat');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->route('admin.user')->withErrors($th->getMessage());
            }
        }
        return redirect()->route('admin.user')->withErrors('Akun sudah ada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::find($id);
        $roles = Roles::all();

        return view('pages.user.update', compact('data', 'roles'));
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
        if ($request->password == null && $request->password == '') {
            try {
                User::updateOrCreate(
                    [
                        'id' => $id,
                    ],
                    [
                        'email' => $request->email,
                        'roles_id' => $request->roles_id,
                    ]
                );
                return redirect()->route('admin.user')->with('success', 'Berhasil merubah data');
            } catch (\Throwable $th) {
                //throw $th;
                return redirect()->route('admin.user.show', $id)->withErrors('gagal');
            }
        }
        if ($request->password != null) {
            $validation = $request->validate(
                [
                    'password' => ['required', 'confirmed'],
                ],
                [
                    'required' => ':attribute tidak boleh kosong',
                    'confirmed' => 'Password tidak sama',
                ]
            );
            if ($validation) {
                try {
                    //code...
                    User::updateOrCreate(
                        [
                            'id' => $id,
                        ],
                        [
                            'email' => $request->email,
                            'roles_id' => $request->roles_id,
                            'password' => Hash::make($request->password),
                        ]
                    );
                    return redirect()->route('admin.user')->with('success', 'Anda berhasil merubah data');
                } catch (\Throwable $th) {
                    //throw $th;
                    return redirect()->route('admin.user.show', $id)->withErrors('gagal password');
                }
            }
        }
        return view('pages.user.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->id == $id) {
            return redirect()->route('admin.user')->withErrors('Tidak bisa menghapus akun anda');
        }
        try {
            User::find($id)->delete();
            return redirect()->route('admin.user')->with('success', 'Berhasil menghapus akun');
        } catch (\Throwable $th) {
            return redirect()->route('admin.user')->withErrors($th->getMessage());
        }
    }
}
