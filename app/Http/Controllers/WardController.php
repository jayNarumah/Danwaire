<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Http\Requests\StoreWardRequest;
use App\Http\Requests\UpdateWardRequest;
use App\Http\Resources\WardResource;

class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WardResource::collection(Ward::all(), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWardRequest $request)
    {
        $ward = Ward::create([
            'name' => $request->name,
            'local_gov_id' => $request->local_gov_id,
        ]);

        return new WardResource($ward, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        return new WardResource($ward, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWardRequest  $request
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWardRequest $request, Ward $ward)
    {
        $ward->name = $request->name;
        $ward->local_gov_id = $request->local_gov_id;
        $ward->save();

        return new WardResource($ward, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        $ward->delete();
    }
}
