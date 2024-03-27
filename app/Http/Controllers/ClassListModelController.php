<?php

namespace App\Http\Controllers;

use App\Models\ClassListModel;
use App\Http\Requests\StoreClassListModelRequest;
use App\Http\Requests\UpdateClassListModelRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use TeacherDetailModel;

class ClassListModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return ClassListModel::all("id")->where("TYPE_ID","=",);
    }

    public function findByTypeID(Request $request){
        $post = $request->post();
        $dataArr = ClassListModel::all(["id","TYPE_ID","CLASS_NAME","IMG_SRC"])->where("TYPE_ID","=",$post['body']['ID'])->toArray();
        $arrVal = array_values($dataArr);
        return $arrVal;
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
    public function store(StoreClassListModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $post = $request->post();
        // $detail = ClassListModel::where("class_list.id","=",$post['body']['ID'])
        //           ->with('teacherElement')
        //           ->get();
        $detail = DB::table('class_list','CL')
                  ->join('TEACHER_DETAIL AS TD','CL.TEACHER_ID','=','TD.id')
                  ->where('CL.id','=',$post['body']['ID'])
                  ->first(['CL.id','CLASS_NAME','DESCRIBE','START_DATE','CLASS_WEEK_DAY','START_TIME','END_TIME','TD.IMG_SRC','TD.EXPERTISE','EMAIL','NAME','GRADUATED_SCHOOL']);
        return $detail;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassListModel $classListModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassListModelRequest $request, ClassListModel $classListModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClassListModel $classListModel)
    {
        //
    }
}
