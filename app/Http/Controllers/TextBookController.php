<?php

namespace App\Http\Controllers;

use App\Models\TextBook;
use App\Http\Requests\StoreTextBookRequest;
use App\Http\Requests\UpdateTextBookRequest;

class TextBookController extends Controller
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
    public function store(StoreTextBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TextBook $textBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TextBook $textBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTextBookRequest $request, TextBook $textBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TextBook $textBook)
    {
        //
    }
}
