<?php

namespace App\Http\Controllers;

use App\Http\Process\ErrorMsg;
use App\Models\ClassType as ModelsClassType;
use ClassTypeModel;
use Illuminate\Http\Request;

class ClassType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ClassTypeModel::all(["id","TYPE_NAME","CODE","IMG_SRC"]);
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
    public function show(string $id)
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
          // todo: update suggest data;
          $type = ModelsClassType::find($post['id']);
          $type->TYPE_NAME = $post['typeName'];
          $type->CODE = $post['typeCode'];
          $type->MODIFIER = 'admin';

          if($post['imgName'] != ""){
            $type->IMG_SRC = '/storage/images/'.$post['imgName'];
          }
          $type->save();
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
    public function destroy(string $id)
    {
        //
    }
}
