<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session('loggedUser')){
            return redirect('/login');
        }else{
            //select all students with foreign keys
            $data = DB::table('students')
            ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
            ->select('students.*', 'educ_backgrounds.course')
            ->get();

            // $data = Student::all();

            return view('nes.student_list',compact('data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nes.add_student_1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->first_name = $request->first_name;
        $student->middle_name = $request->middle_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->zip_code = $request->zip_code;
        $student->contact_num = $request->contact_num;
        $student->landline = $request->landline;
        $student->civil_status = $request->civil_status;
        $student->gender = $request->gender;
        $student->height = $request->height;
        $student->weight = $request->weight;
        $student->citizenship = $request->citizenship;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;
        $student->age = $request->age;
        $student->batch_num = $request->batch_num;
        $student->save();
        $studentId = $student->id;

        Session::put('studentId', $studentId);

        return Redirect('add_student_2')->with('flash_message', 'Student Successfully Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('nes.update_student')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->first_name = $request->first_name;
        $student->middle_name = $request->middle_name;
        $student->last_name = $request->last_name;
        $student->address = $request->address;
        $student->zip_code = $request->zip_code;
        $student->contact_num = $request->contact_num;
        $student->landline = $request->landline;
        $student->civil_status = $request->civil_status;
        $student->gender = $request->gender;
        $student->height = $request->height;
        $student->weight = $request->weight;
        $student->citizenship = $request->citizenship;
        $student->birth_place = $request->birth_place;
        $student->birth_date = $request->birth_date;
        $student->age = $request->age;
        $student->batch_num = $request->batch_num;
        $student->save();
        $studentId = $student->id;

        Session::put('studentId', $studentId);


        return Redirect('add_student_2')->with('flash_message', 'Student Successfully Added!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return Redirect('studentlist')->with('message', 'Successfully Deleted!');
    }

    public function view_student($id)
    {
        $student_data = Student::find($id);

        return view('nes.update_student', compact('student_data'));
    }

    public function save_update($id )
    {
        $student_data = Student::find($id);

        return view('nes.update_student_2', compact('student_data'));
    }
}
