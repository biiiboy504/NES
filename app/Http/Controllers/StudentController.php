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
        return view('Student.add_student_1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'first_name' => 'required|alpha',
            'middle_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'address' => 'required',
            'zip_code' => 'nullable',
            'contact_num' => 'required|numeric',
            'landline' => 'nullable',
            'civil_status' => 'nullable',
            'gender' => 'required',
            'height' => 'nullable',
            'weight' => 'nullable',
            'citizenship' => 'nullable',
            'birth_place' => 'nullable',
            'birth_date' => 'required|date_format:m-d-Y',
            'age' => 'required|numeric',
            'batch_num' => 'required|numeric'

        ], [
            'first_name.required' => 'Firstname is required',
            'middle_name.required' => 'Middlename is required',
            'last_name.required' => 'Lastname is required',
            'address.required' => 'Address is required',
            'contact_num.required' => 'Contact No. is required',
            'gender.required' => 'Gender is required',
            'birth_date.required' => 'Birthdate is required',
            'age.required' => 'Age is required',
            'batch_num.required' => 'Batch No. is required'
            
        ]);

    return back()->with('success', 'User created successfully.');

        
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
        return view('Student.update_student')->with('student',$student);
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
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
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

        return Redirect('/update_student_2/'.$id)->with('message', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id', $id)->delete();

        return Redirect('studentlist')->with('message', 'Successfully Deleted!');
    }

    public function view_student($id)
    {
        $student_data = Student::find($id);

        return view('Student.update_student', compact('student_data'));
    }

    public function read_1($id)
    {
        $student_data = Student::find($id);

        return view('Student.view', compact('student_data'));
    }
}
