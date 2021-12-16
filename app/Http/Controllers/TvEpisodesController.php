<?php

namespace App\Http\Controllers;

use App\Models\TvEpisodes;
use App\Http\Requests\StoreTvEpisodesRequest;
use App\Http\Requests\UpdateTvEpisodesRequest;
use Illuminate\Support\Facades\Http;

class TvEpisodesController extends Controller
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
     * @param  \App\Http\Requests\StoreTvEpisodesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTvEpisodesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvEpisodes  $tvEpisodes
     * @return \Illuminate\Http\Response
     */
    public function show(TvEpisodes $tvEpisodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvEpisodes  $tvEpisodes
     * @return \Illuminate\Http\Response
     */
    public function edit(TvEpisodes $tvEpisodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTvEpisodesRequest  $request
     * @param  \App\Models\TvEpisodes  $tvEpisodes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTvEpisodesRequest $request, TvEpisodes $tvEpisodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvEpisodes  $tvEpisodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvEpisodes $tvEpisodes)
    {
        //
    }
}
