<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\SubKriteria;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $total_user = User::all()->count();
        $total_kriteria = Kriteria::all()->count();
        $total_subkriteria = SubKriteria::all()->count();
        $total_alternatif = Alternatif::all()->count();
        $total_penilaian= Penilaian::all()->count();
        return view('admin.dashboard', compact('total_user','total_kriteria','total_subkriteria','total_alternatif','total_penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
