<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswaa;
use Illuminate\Http\Request;

class MahasiswaaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mahasiswaa::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswaas',
            'jurusan' => 'required',
            'angkatan' => 'required|digits:4',
        ]);

        return Mahasiswaa::create($request->only(['nama', 'nim', 'jurusan', 'angkatan']));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Mahasiswaa::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswaa $mahasiswaa)
    {
        $mahasiswaa->update($request->all());
        return $mahasiswaa;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswaa $mahasiswaa)
    {
        $mahasiswaa->delete();
        return response()->json(null, 204);
    }
}
