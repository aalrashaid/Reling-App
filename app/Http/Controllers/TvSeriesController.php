<?php

namespace App\Http\Controllers;

use App\Models\TvSeries;
use App\Http\Requests\StoreTvSeriesRequest;
use App\Http\Requests\UpdateTvSeriesRequest;

class TvSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreTvSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function show(TvSeries $tvSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(TvSeries $tvSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTvSeriesRequest  $request
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvSeriesRequest $request, TvSeries $tvSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvSeries $tvSeries)
    {
        //
    }
}
