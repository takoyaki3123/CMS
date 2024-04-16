<?php

namespace App\Http\Controllers;

use App\Models\SuggestClassModel;
use App\Http\Requests\StoreSuggestClassRequest;
use App\Http\Requests\UpdateSuggestClassRequest;
use Illuminate\Http\Request;

class SuggestClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $suggest = SuggestClassModel::all(['id','CLASS_ID','DESC','IMG_SRC']);
      return $suggest;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SuggestClassModel $suggestClassModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuggestClassModel $suggestClassModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuggestClassRequest $request, SuggestClassModel $suggestClassModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuggestClassModel $suggestClassModel)
    {
        //
    }
}
