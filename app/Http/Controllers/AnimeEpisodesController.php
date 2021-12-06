<?php

namespace App\Http\Controllers;

use App\Models\AnimeEpisodes;
use App\Http\Requests\StoreAnimeEpisodesRequest;
use App\Http\Requests\UpdateAnimeEpisodesRequest;

class AnimeEpisodesController extends Controller
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
     * @param  \App\Http\Requests\StoreAnimeEpisodesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimeEpisodesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimeEpisodes  $animeEpisodes
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeEpisodes $animeEpisodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimeEpisodes  $animeEpisodes
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeEpisodes $animeEpisodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimeEpisodesRequest  $request
     * @param  \App\Models\AnimeEpisodes  $animeEpisodes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimeEpisodesRequest $request, AnimeEpisodes $animeEpisodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimeEpisodes  $animeEpisodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeEpisodes $animeEpisodes)
    {
        //
    }
}
