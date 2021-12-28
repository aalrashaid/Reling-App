<?php

namespace App\Http\Controllers;

use App\Models\RequestPosts;
use App\Http\Requests\StoreRequestPostsRequest;
use App\Http\Requests\UpdateRequestPostsRequest;

class RequestPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('RequestPosts.index');
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
     * @param  \App\Http\Requests\StoreRequestPostsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequestPostsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestPosts  $requestPosts
     * @return \Illuminate\Http\Response
     */
    public function show(RequestPosts $requestPosts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestPosts  $requestPosts
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestPosts $requestPosts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRequestPostsRequest  $request
     * @param  \App\Models\RequestPosts  $requestPosts
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequestPostsRequest $request, RequestPosts $requestPosts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestPosts  $requestPosts
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestPosts $requestPosts)
    {
        //
    }
}
