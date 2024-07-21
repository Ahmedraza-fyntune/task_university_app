<?php

namespace App\Http\Controllers;

use App\Http\Requests\studentRegReq;
use App\Models\StreamMaster;
use App\Models\studentModel;
use App\Models\teacherModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $Teachers = teacherModel::select('id','name')->get()->all();
        $Subjects = StreamMaster::select('id','name')->get()->all();


        return view('StudentRegistration',compact('Teachers','Subjects'));

    }
    public function createStudent(studentRegReq $request)
    {

    }

    public function UpdateStudent(Request $request)
    {

    }
    public function deleteStudent(Request $request)
    {

    }  public function AllRecords(Request $request)
    {
        $allStudents = [];
//        $allStudents = studentModel::select('id','name')->get()->all();

        return view ("StudentListView",compact('allStudents'));
    }
}
