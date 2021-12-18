<?php

namespace App\Http\Controllers;

use App\Models\Resolutions;
use App\Http\Requests\StoreResolutionsRequest;
use App\Http\Requests\UpdateResolutionsRequest;

class ResolutionsController extends Controller
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
     * @param  \App\Http\Requests\StoreResolutionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResolutionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resolutions  $resolutions
     * @return \Illuminate\Http\Response
     */
    public function show(Resolutions $resolutions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resolutions  $resolutions
     * @return \Illuminate\Http\Response
     */
    public function edit(Resolutions $resolutions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResolutionsRequest  $request
     * @param  \App\Models\Resolutions  $resolutions
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResolutionsRequest $request, Resolutions $resolutions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resolutions  $resolutions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resolutions $resolutions)
    {
        //
    }
}
