<?php

namespace App\Http\Controllers;

use App\Http\Process\ErrorMsg;
use App\Models\SuggestClassModel;
use Illuminate\Http\Request;
use SuggestClass;

class SuggestClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $suggest = SuggestClassModel::all(['id','CLASS_ID','DESC','IMG_SRC','CLASS_ID']);
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
    public function update(Request $request)
    {
        //
        $post = $request->post()['body'];
        try{
          // todo: update carousel data;
          $carousel = SuggestClass::find($post['id']);
          $carousel->DESC = $post['desc'];
          $carousel->CLASS_ID = $post['classID'];
          if($post['imageName'] != ""){
            $carousel->IMG_SRC = '/storage/images/'.$post['imageName'];
          }
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
    public function destroy(SuggestClassModel $suggestClassModel)
    {
        //
    }
}
