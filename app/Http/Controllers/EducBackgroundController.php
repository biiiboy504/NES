<?php

namespace App\Http\Controllers;

use App\Models\educ_background;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class EducBackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.add_student_2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new educ_background;
        $student->elem_name = $request->elem_name;
        $student->elem_date = $request->elem_date;
        $student->hs_name = $request->hs_name;
        $student->hs_date = $request->hs_date;
        $student->voc_name = $request->voc_name;
        $student->voc_date = $request->voc_date;
        $student->college_name = $request->college_name;
        $student->college_date = $request->college_date;
        $student->course = $request->course;
        $student->units = $request->units;
        $student->post_grad = $request->post_grad;
        $student->post_date = $request->post_date;
        $student->students_id = $request->studentId;
        $student->save();

        
        return Redirect('studentlist')->with('flash_message', 'Student Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\educ_background  $educ_background
     * @return \Illuminate\Http\Response
     */
    public function show(educ_background $educ_background)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\educ_background  $educ_background
     * @return \Illuminate\Http\Response
     */
    public function edit(educ_background $educ_background)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\educ_background  $educ_background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = educ_background::find($id);
        $student->elem_name = $request->elem_name;
        $student->elem_date = $request->elem_date;
        $student->hs_name = $request->hs_name;
        $student->hs_date = $request->hs_date;
        $student->voc_name = $request->voc_name;
        $student->voc_date = $request->voc_date;
        $student->college_name = $request->college_name;
        $student->college_date = $request->college_date;
        $student->course = $request->course;
        $student->units = $request->units;
        $student->post_grad = $request->post_grad;
        $student->post_date = $request->post_date;
        $student->students_id = $request->studentId;
        $student->save();

        return Redirect('studentlist')->with('message', 'Successfully Updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\educ_background  $educ_background
     * @return \Illuminate\Http\Response
     */
    public function destroy(educ_background $educ_background)
    {
        //
    }

    public function view_student_2($id)
    {
        $student_data = Student::find($id);

        $student_data = DB::table('educ_backgrounds')
        ->where('students_id','=',$student_data->id)
        ->select('*')
        ->first();
        return view('Student.update_student_2', compact('student_data'));
    }

    public function read_2($id)
    {
        $student_data = Student::find($id);

        $student_data = DB::table('educ_backgrounds')
        ->where('students_id','=',$student_data->id)
        ->select('*')
        ->first();
        return view('Student.view_2', compact('student_data'));
    }
}
