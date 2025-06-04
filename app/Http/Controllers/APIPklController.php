<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pkl;

class APIPklController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkl = Pkl::Get();
        return response()->json($pkl, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pkl = new Pkl();
        $pkl->guru_id = $request->guru_id;
        $pkl->siswa_id = $request->siswa_id;
        $pkl->industri_id = $request->industri_id;
        $pkl->mulai = $request->mulai;
        $pkl->selesai = $request->selesai;
        $pkl->save();
        return response()->json($pkl, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pkl = Pkl::find($id);
        return response()->json($pkl, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $pkl = Pkl::find($id);
        $pkl->guru_id = $request->guru_id;
        $pkl->siswa_id = $request->siswa_id;
        $pkl->industri_id = $request->industri_id;
        $pkl->mulai = $request->mulai;
        $pkl->selesai = $request->selesai;
        $pkl->save();
        return response()->json($pkl, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pkl::destroy($id);
        return response()->json(["message" => "Delete"], 200);
    }
}
