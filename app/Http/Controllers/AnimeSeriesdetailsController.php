<?php

namespace App\Http\Controllers;

use App\Models\AnimeSeriesdetails;
use App\Http\Requests\StoreAnimeSeriesdetailsRequest;
use App\Http\Requests\UpdateAnimeSeriesdetailsRequest;

class AnimeSeriesdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('Anime.index');
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
     * @param  \App\Http\Requests\StoreAnimeSeriesdetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimeSeriesdetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnimeSeriesdetails  $animeSeriesdetails
     * @return \Illuminate\Http\Response
     */
    public function show(AnimeSeriesdetails $animeSeriesdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnimeSeriesdetails  $animeSeriesdetails
     * @return \Illuminate\Http\Response
     */
    public function edit(AnimeSeriesdetails $animeSeriesdetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimeSeriesdetailsRequest  $request
     * @param  \App\Models\AnimeSeriesdetails  $animeSeriesdetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimeSeriesdetailsRequest $request, AnimeSeriesdetails $animeSeriesdetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnimeSeriesdetails  $animeSeriesdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnimeSeriesdetails $animeSeriesdetails)
    {
        //
    }
}
