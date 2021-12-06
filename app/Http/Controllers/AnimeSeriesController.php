<?php

namespace App\Http\Controllers;

use App\Models\AnimeSeries;
use App\Http\Requests\StoreAnimeSeriesRequest;
use App\Http\Requests\UpdateAnimeSeriesRequest;

class AnimeSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreAnimeSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimeSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimeSeries  $animeSeries
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeSeries $animeSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimeSeries  $animeSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeSeries $animeSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimeSeriesRequest  $request
     * @param  \App\Models\AnimeSeries  $animeSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimeSeriesRequest $request, AnimeSeries $animeSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimeSeries  $animeSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeSeries $animeSeries)
    {
        //
    }
}
