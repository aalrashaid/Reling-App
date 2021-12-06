<?php

namespace App\Http\Controllers;

use App\Models\AnimeSeasons;
use App\Http\Requests\StoreAnimeSeasonsRequest;
use App\Http\Requests\UpdateAnimeSeasonsRequest;

class AnimeSeasonsController extends Controller
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
     * @param  \App\Http\Requests\StoreAnimeSeasonsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimeSeasonsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimeSeasons  $animeSeasons
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeSeasons $animeSeasons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimeSeasons  $animeSeasons
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeSeasons $animeSeasons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimeSeasonsRequest  $request
     * @param  \App\Models\AnimeSeasons  $animeSeasons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimeSeasonsRequest $request, AnimeSeasons $animeSeasons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimeSeasons  $animeSeasons
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeSeasons $animeSeasons)
    {
        //
    }
}
