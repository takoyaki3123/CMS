<?php

namespace App\Http\Controllers;

use App\Http\Process\ErrorMsg;
use App\Models\FileModel;
use App\Http\Requests\StoreFileModelRequest;
use App\Http\Requests\UpdateFileModelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FileModelController extends Controller
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
    public function store(Request $request)
    {
        //
        $vaildResult = Validator::make($request->all(),[
            'image'=>'required'
        ]);
        if(!$vaildResult->fails()){
          try{
            // todo: upload file
            $fileName = $request->file('image')->getClientOriginalName();
            // $fileType = $request->file('image')->getClientOriginalExtension();
            // $size = $request->file('image')->getSize();
            $exists = Storage::exists('public/storage/images/'.$fileName);
            if(!$exists){
              Storage::disk('public')->put($fileName,$request->file('image')->get());
            }
            // todo: create file data
            // $result = FileModel::create(['FILE_NAME'=>$fileName,'FILE_TYPE'=>$fileType,'FILE_SIZE'=>$size]);

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
        else{
          $error = $vaildResult->errors();
          $errorMsg = new ErrorMsg;
          $errorMsg->msg = "not validate data";
          $errorMsg->time = date("Y-m-d H:i:s");
          return json_encode($errorMsg);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(FileModel $fileModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileModel $fileModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileModelRequest $request, FileModel $fileModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileModel $fileModel)
    {
        //
    }
}
