<?php

namespace App\Http\Controllers;

use App\Models\Identity;
use App\Http\Requests\StoreIdentityRequest;
use App\Http\Requests\UpdateIdentityRequest;

class IdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdentityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Identity $identity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Identity $identity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdentityRequest $request, Identity $identity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Identity $identity)
    {
        //
    }
}
