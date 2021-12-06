<?php

namespace App\Http\Controllers;

use App\Models\CertificationsMovie;
use App\Http\Requests\StoreCertificationsMovieRequest;
use App\Http\Requests\UpdateCertificationsMovieRequest;

class CertificationsMovieController extends Controller
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
     * @param  \App\Http\Requests\StoreCertificationsMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificationsMovieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificationsMovie  $certificationsMovie
     * @return \Illuminate\Http\Response
     */
    public function show(CertificationsMovie $certificationsMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificationsMovie  $certificationsMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificationsMovie $certificationsMovie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificationsMovieRequest  $request
     * @param  \App\Models\CertificationsMovie  $certificationsMovie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificationsMovieRequest $request, CertificationsMovie $certificationsMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificationsMovie  $certificationsMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificationsMovie $certificationsMovie)
    {
        //
    }
}
