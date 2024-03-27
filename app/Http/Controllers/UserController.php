<?php

namespace App\Http\Controllers;

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
      $user = UserModel::all(['id','ACCT','PWD','NAME','AGE','SEX','IDENTITY_ID'])
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
    }

    /**
     * Display the specified resource.
     */
    public function show(UserModel $userModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserModel $userModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserModel $userModel)
    {
        //
    }
}
