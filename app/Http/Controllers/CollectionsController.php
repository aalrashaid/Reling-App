<?php

namespace App\Http\Controllers;

use App\Models\Collections;
use App\Http\Requests\StoreCollectionsRequest;
use App\Http\Requests\UpdateCollectionsRequest;

class CollectionsController extends Controller
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
     * @param  \App\Http\Requests\StoreCollectionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function show(Collections $collections)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function edit(Collections $collections)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollectionsRequest  $request
     * @param  \App\Models\Collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollectionsRequest $request, Collections $collections)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collections  $collections
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collections $collections)
    {
        //
    }
}
