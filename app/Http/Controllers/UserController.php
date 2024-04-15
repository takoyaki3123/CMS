<?php

namespace App\Http\Controllers;

use App\Http\Process\ErrorMsg;
use UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(Request $request)
    {
      $post = ($request->post())['body'];
      // $user = UserModel::all(['id','NAME','AGE','SEX','IDENTITY_ID'])
      //         ->where([
      //           ['ACCT','=',$post['acct']],
      //           ['PS','=',$post['ps']]
      //         ]);
      $user = UserModel::all(['id','ACCT','PWD','NAME','AGE','SEX','IDENTITY_ID','EMAIL'])
              ->where('ACCT','=',$post['acct'])
              ->where('PWD','=',$post['ps'])
              ->first();
      return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      // $request->validate([
      //   'name'=>['required','string'],
      //   'acct'=>['required','string'],
      //   'ps'=>['required'],
      //   'email'=>['required','string']
      // ]);
      $post = $request->post()['body'];
      try {
        //code...
        $result = UserModel::firstOrCreate(['ACCT'=>$post['acct']],[
          'NAME'=>$post['name'],
          'ACCT'=>$post['acct'],
          'PWD'=>$post['ps'],
          'SEX'=>$post['sex'],
          'EMAIL'=>$post['email'],
          'IDENTITY_ID' => $post['identity_id'],
        ]);
        $created = $result->wasRecentlyCreated;
        if($created){
          return true;
        }
        else{
          $errorMsg = new ErrorMsg;
          $errorMsg->msg = "帳號已經存在";
          $errorMsg->time = now();
          return json_encode($errorMsg);
        }
      } catch (\Throwable $th) {
        $errorMsg = new ErrorMsg;
        $errorMsg->msg = $th->getMessage();
        $errorMsg->time = date("Y-m-d H:i:s");
        // $errorMsg::settingError("testing","testingtime");
        return json_encode($errorMsg);
        // return true;
      }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $post = $request->post()['body'];
        $result = UserModel::whereId($post['id'])
                  ->first();
        return $result;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // get data model
        $post = $request->post()['body'];
        try {
          $result = UserModel::whereId($post['id'])->update([
            'PWD'=>$post['pwd'],
            'NAME'=>$post['name'],
            'SEX'=>$post['sex'],
            'EMAIL'=>$post['email'],
            'AGE'=>$post['age'],
          ]);
          return $result;
        } catch (\Throwable $th) {
          //throw $th;
          $errorMsg = new ErrorMsg;
          $errorMsg->msg = $th->getMessage();
          $errorMsg->time = date("Y-m-d H:i:s");
          // $errorMsg::settingError("testing","testingtime");
          return json_encode($errorMsg);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}
