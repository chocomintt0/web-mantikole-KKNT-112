<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBerandaRequest;
use App\Http\Requests\UpdateBerandaRequest;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantikole.pages.beranda.index');
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
    public function store(StoreBerandaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBerandaRequest $request, Beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beranda $beranda)
    {
        //
    }
}
