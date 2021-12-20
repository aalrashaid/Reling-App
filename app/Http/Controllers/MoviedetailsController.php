<?php

namespace App\Http\Controllers;

use App\Models\Moviedetails;
use App\Http\Requests\StoreMoviedetailsRequest;
use App\Http\Requests\UpdateMoviedetailsRequest;

use app\Models\Movie;

class MoviedetailsController extends Controller
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
     * @param  \App\Http\Requests\StoreMoviedetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMoviedetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Moviedetails  $moviedetails
     * @return \Illuminate\Http\Response
     */
    public function show(Moviedetails $moviedetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Moviedetails  $moviedetails
     * @return \Illuminate\Http\Response
     */
    public function edit(Moviedetails $moviedetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMoviedetailsRequest  $request
     * @param  \App\Models\Moviedetails  $moviedetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMoviedetailsRequest $request, Moviedetails $moviedetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Moviedetails  $moviedetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Moviedetails $moviedetails)
    {
        //
    }
}
