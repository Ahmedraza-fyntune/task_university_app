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
//        dd($request->all());
        $student = studentModel::insert([
           'fname' => $request->fname,
           'lname' => $request->lname,

           'email' => $request->email,
           'Contact' => $request->contact,

            'dob' => $request->dob,
            'address' => $request->add,
            'teacher_id' => $request->sel_teacher,
            'stream' => $request->sel_sub,
            'academicYears' => $request->academicYear
        ]);
        if($student)
        {
            return response()->json([
                'status' => 200,
                'msg' => "Student Created Successfully"
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400,
                'msg' => "Error In Adding Student"
            ]);
        }
    }

    public function UpdateStudent(Request $request,int $id)
    {
        $updarecord = studentModel::where('id',$id)->update([
            'fname' => $request->mdl_fname,
            'lname' => $request->mdl_lname,
            'email' => $request->mdl_email,
            'Contact' => $request->mdl_contact,
            'dob' => $request->mdl_dob,
            'address' => $request->mdl_add,

        ]);
        if($updarecord)
        {
            return response()->json([
                'status' => 200,
                'msg' => "Student Updated Successfully"
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400,
                'msg' => "Error In Updating Student"
            ]);
        }

    }
    public function deleteStudent(Request $request)
    {
        $delete_student  = studentModel::where('id',$request->id)->delete();
        if($delete_student)
        {
            return response()->json([
                'status' => 200,
                'msg' => "Student Deleted Successfully"
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400,
                'msg' => "Error In Deleting Student"
            ]);
        }

    }
    public function AllRecords(Request $request)
    {
        $allStudents = [];
        $allStudents = studentModel::select('studentmaster.id as stud_id','fname','lname','studentmaster.email','studentmaster.Contact','dob','studentmaster.address','studentmaster.teacher_id','stream','academicYears','teachermaster.name as teacher_name','streammaster.name as sub_name')->join('streammaster','stream','streammaster.id')->join('teachermaster','teacher_id','teachermaster.id')->orderBy('fname')->get();

        return view ("StudentListView",compact('allStudents'));
    }
    public function getStudentRecord(int $id)
    {
        $data = studentModel::where('id',$id)->first();

        return response()->json([
            'status' => 200,
            'data' => $data
        ]);
    }
}
