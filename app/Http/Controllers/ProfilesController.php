<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreProfilesRequest;
use App\Http\Requests\UpdateProfilesRequest;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profiles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilesRequest $request)
    {
        //
        $request->validate([
            'FirstName' => 'required|size:25' ,
            'LastName' => 'requiredsize:25',
            'Avtar' => 'required | mimes:jpg,png|file|size:512',
            'Bio' => 'required|size:225',
            'gender' => 'required ',
        ]);

        // $profiles = Profile::create([
        //     'FirstName' => $request->firstName ,
        //     'LastName' => $request-> lastName,
        //     'Avtar' => $request->file(' avtar') ,
        //     'Bio' => $request-> bio,
        //     'gender' => $request-> gender,
        // ]);

        // Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profiles $profiles)
    {
        //
        return view('profiles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiles $profiles)
    {
        //
        return view('profiles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfilesRequest  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilesRequest $request, Profiles $profiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiles $profiles)
    {
        //
    }
}
