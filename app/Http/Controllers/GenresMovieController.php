<?php

namespace App\Http\Controllers;

use App\Models\GenresMovie;
use App\Http\Requests\StoreGenresMovieRequest;
use App\Http\Requests\UpdateGenresMovieRequest;

class GenresMovieController extends Controller
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
     * @param  \App\Http\Requests\StoreGenresMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGenresMovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenresMovie  $genresMovie
     * @return \Illuminate\Http\Response
     */
    public function show(GenresMovie $genresMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenresMovie  $genresMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(GenresMovie $genresMovie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenresMovieRequest  $request
     * @param  \App\Models\GenresMovie  $genresMovie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGenresMovieRequest $request, GenresMovie $genresMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenresMovie  $genresMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenresMovie $genresMovie)
    {
        //
    }
}
