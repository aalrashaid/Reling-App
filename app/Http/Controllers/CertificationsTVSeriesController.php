<?php

namespace App\Http\Controllers;

use App\Models\CertificationsTVSeries;
use App\Http\Requests\StoreCertificationsTVSeriesRequest;
use App\Http\Requests\UpdateCertificationsTVSeriesRequest;
use Illuminate\Support\Facades\Http;

class CertificationsTVSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreCertificationsTVSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCertificationsTVSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificationsTVSeries  $certificationsTVSeries
     * @return \Illuminate\Http\Response
     */
    public function show(CertificationsTVSeries $certificationsTVSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificationsTVSeries  $certificationsTVSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificationsTVSeries $certificationsTVSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCertificationsTVSeriesRequest  $request
     * @param  \App\Models\CertificationsTVSeries  $certificationsTVSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCertificationsTVSeriesRequest $request, CertificationsTVSeries $certificationsTVSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificationsTVSeries  $certificationsTVSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificationsTVSeries $certificationsTVSeries)
    {
        //
    }
}
