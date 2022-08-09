<?php

namespace App\Http\Controllers;

use App\Models\LocalGov;
use App\Http\Requests\StoreLocalGovRequest;
use App\Http\Requests\UpdateLocalGovRequest;

class LocalGovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreLocalGovRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalGovRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function show(LocalGov $localGov)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function edit(LocalGov $localGov)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalGovRequest  $request
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalGovRequest $request, LocalGov $localGov)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalGov $localGov)
    {
        //
    }
}
