<?php

namespace App\Http\Controllers;

use App\Models\BoardModel;
use App\Http\Requests\StoreBoardModelRequest;
use App\Http\Requests\UpdateBoardModelRequest;

class BoardModelController extends Controller
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
    public function store(StoreBoardModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BoardModel $boardModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BoardModel $boardModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoardModelRequest $request, BoardModel $boardModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BoardModel $boardModel)
    {
        //
    }
}
