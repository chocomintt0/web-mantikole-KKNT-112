<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProfilDesaRequest;
use App\Http\Requests\UpdateProfilDesaRequest;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantikole.pages.profil-desa.index');
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
    public function store(StoreProfilDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilDesaRequest $request, ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilDesa $profilDesa)
    {
        //
    }
}
