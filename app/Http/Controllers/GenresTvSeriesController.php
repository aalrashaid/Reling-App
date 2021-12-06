<?php

namespace App\Http\Controllers;

use App\Models\GenresTvSeries;
use App\Http\Requests\StoreGenresTvSeriesRequest;
use App\Http\Requests\UpdateGenresTvSeriesRequest;

class GenresTvSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreGenresTvSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenresTvSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenresTvSeries  $genresTvSeries
     * @return \Illuminate\Http\Response
     */
    public function show(GenresTvSeries $genresTvSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenresTvSeries  $genresTvSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(GenresTvSeries $genresTvSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenresTvSeriesRequest  $request
     * @param  \App\Models\GenresTvSeries  $genresTvSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenresTvSeriesRequest $request, GenresTvSeries $genresTvSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenresTvSeries  $genresTvSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenresTvSeries $genresTvSeries)
    {
        //
    }
}
