<?php

namespace App\Http\Controllers;

use App\Models\InfografisDemografis;
use App\Http\Requests\StoreInfografisDemografisRequest;
use App\Http\Requests\UpdateInfografisDemografisRequest;

class InfografisDemografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mantikole.pages.infografis.index');
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
    public function store(StoreInfografisDemografisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InfografisDemografis $infografisDemografis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfografisDemografis $infografisDemografis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfografisDemografisRequest $request, InfografisDemografis $infografisDemografis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfografisDemografis $infografisDemografis)
    {
        //
    }
}
