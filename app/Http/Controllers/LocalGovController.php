<?php

namespace App\Http\Controllers;

use App\Models\LocalGov;
use App\Http\Requests\StoreLocalGovRequest;
use App\Http\Requests\UpdateLocalGovRequest;
use App\Http\Resources\LocalGovResource;

class LocalGovController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new LocalGovResource(LocalGov::all()->load('state'), 200);
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
        $local_gov = LocalGov::create([
            'name' => $request->name,
            'state_id' => $request->state_id,
        ]);

        return new LocalGovResource($local_gov, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function show(LocalGov $localGov)
    {
        return new LocalGovResource($localGov, 200);
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
           $localGov->name = $request->name;
           $localGov->state_id = $request->state_id;
           $localGov->save();

           return new LocalGovResource($localGov, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LocalGov  $localGov
     * @return \Illuminate\Http\Response
     */
    public function destroy(LocalGov $localGov)
    {
        $localGov->delete();

        return response()->json('Local Government Was Successfully Deleted !!!', 200);
    }
}
