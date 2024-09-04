<?php

namespace App\Http\Controllers;

use App\Http\Process\ErrorMsg;
use App\Models\CarouselModel;
use Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $result = CarouselModel::all(['id','IMG_SRC']);
        return $result;
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
    public function show(CarouselModel $carouselModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarouselModel $carouselModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $post = $request->post()['body'];
        try{
          // todo: update carousel data;
          $carousel = Carousel::find($post['id']);
          $carousel->IMG_SRC = '/storage/images/'.$post['imageName'];
          $carousel->save();
          return true;
        }
        catch (\Throwable $th){
          $errorMsg = new ErrorMsg;
          $errorMsg->msg = $th->getMessage();
          $errorMsg->time = date("Y-m-d H:i:s");
          return json_encode($errorMsg);
          // return true;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselModel $carouselModel)
    {
        //
    }
}
