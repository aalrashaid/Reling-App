<?php

namespace App\Http\Controllers;

use App\Models\TvSeasons;
use App\Http\Requests\StoreTvSeasonsRequest;
use App\Http\Requests\UpdateTvSeasonsRequest;
use Illuminate\Support\Facades\Http;

class TvSeasonsController extends Controller
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
     * @param  \App\Http\Requests\StoreTvSeasonsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvSeasonsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvSeasons  $tvSeasons
     * @return \Illuminate\Http\Response
     */
    public function show(TvSeasons $tvSeasons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvSeasons  $tvSeasons
     * @return \Illuminate\Http\Response
     */
    public function edit(TvSeasons $tvSeasons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTvSeasonsRequest  $request
     * @param  \App\Models\TvSeasons  $tvSeasons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvSeasonsRequest $request, TvSeasons $tvSeasons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvSeasons  $tvSeasons
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvSeasons $tvSeasons)
    {
        //
    }
}
