<?php

namespace App\Http\Controllers;

use App\Models\studentModel;
use App\Models\teacherModel;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('TeacherView');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'teachname' => ['required','string','max:100'],
            'qual' => ['required','string','max:100'],
            'address' => ['required','string','max:200']
        ]);
        $createTeacher = teacherModel::create([
            'name' => $request->teachname,
            'qualification' => $request->qual,
            'address' => $request->address
        ]);
        if($createTeacher)
        {
            return response()->json([
                'status' => 200,
                'msg' => "Teacher Created Successfully"
            ]);
        }
        else
        {
            return response()->json([
                'status' => 500,
                'msg' => "Error IN Operation Please Try Again After Some time"
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
        $teachers  = teacherModel::select("id",'name','address','qualification')->get()->all();
        return view('teacherListView',compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate([
            'teachname' => ['required','string','max:200'],
            'qual' => ['required','string','max:200'],
            'add' => ['required','string','max:200']
        ],
        [
            'teachname.required' => "please Enter The nteachname",
            'teachname.string' => "please string only no integers",
            'teachname.max' => "please ENter name less then 200 characters",
            'qual.required' => "Qualification of Teacher Cannot Be Empty",
            'qual.string' => "Please Enter The character only ",
            'qual.max' => "please Enter less then 200 characters"
        ]);
        $update = teacherModel::where('id',$id)->update([
            'name' => $request->teachname,
            'qualification' => $request->qual,
            'address' => $request->add

        ]);
        if($update)
        {
            return response()->json([
                'status' => 200,
                'msg' => 'Teacher Updated Successfully'
            ]);
        }
        else
        {
            return response()->json([
                'status' => 400,
                'msg' => 'Error In Updating Teacher Details'
            ]);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        studentModel::where('id',$id)->delete();
    }
}
