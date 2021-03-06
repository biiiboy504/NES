<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\educ_background;
use App\Models\FamilyBackground;
use App\Models\FuturePlans;
use App\Models\StudentHealthComplication;
use App\Models\StudentHobbies;
use App\Models\WorkExperience;
use App\Models\OtherWorkExperience;
use App\Models\CommunityOrganization;
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


        // $validatedData = $request->validate([

        //     'first_name' => 'required|alpha',
        //     'middle_name' => 'required|alpha',
        //     'last_name' => 'required|alpha',
        //     'address' => 'required',
        //     'zip_code' => 'nullable',
        //     'contact_num' => 'required|numeric',
        //     'landline' => 'nullable',
        //     'civil_status' => 'nullable',
        //     'gender' => 'required',
        //     'height' => 'nullable',
        //     'weight' => 'nullable',
        //     'citizenship' => 'nullable',
        //     'birth_place' => 'nullable',
        //     'birth_date' => 'required|date_format:m-d-Y',
        //     'age' => 'required|numeric',
        //     'batch_num' => 'required|numeric'
        // ], [
        //     'first_name.required' => 'Firstname is required',
        //     'middle_name.required' => 'Middlename is required',
        //     'last_name.required' => 'Lastname is required',
        //     'address.required' => 'Address is required',
        //     'contact_num.required' => 'Contact No. is required',
        //     'gender.required' => 'Gender is required',
        //     'birth_date.required' => 'Birthdate is required',
        //     'age.required' => 'Age is required',
        //     'batch_num.required' => 'Batch No. is required'
        // ]);

        
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
        

        $family = new FamilyBackground;
        $family->father_name = $request->f_name;
        $family->father_occupation = $request->f_occupation;
        $family->father_income = $request->f_income;
        $family->mother_name = $request->m_name;
        $family->mother_occupation = $request->m_occupation;
        $family->mother_income = $request->m_income;
        $family->guardian_name = $request->g_name;
        $family->guardian_occupation = $request->g_occupation;
        $family->guardian_income = $request->g_income;
        $family->spouse_name = $request->s_name;
        $family->spouse_occupation = $request->s_occupation;
        $family->spouse_income = $request->s_income;
        $family->guardian_address = $request->f_address;
        $family->mobile_no = $request->f_contact;
        $family->landline = $request->f_landline;
        $family->emergency_name = $request->e_name;
        $family->emergency_contact = $request->e_contact;
        $family->emergency_address = $request->e_address;
        $family->emergency_email = $request->e_email;
        $family->students_id = $studentId;
        $family->save();

        $educ = new educ_background;
        $educ->elem_name = $request->elem_name;
        $educ->elem_date = $request->elem_date;
        $educ->hs_name = $request->hs_name;
        $educ->hs_date = $request->hs_date;
        $educ->voc_name = $request->voc_name;
        $educ->voc_date = $request->voc_date;
        $educ->college_name = $request->college_name;
        $educ->college_date = $request->college_date;
        $educ->course = $request->course;
        $educ->units = $request->units;
        $educ->post_grad = $request->post_grad;
        $educ->post_date = $request->post_date;
        $educ->students_id = $studentId;
        $educ->save();
        
        if($request->filled('nameOfOrganization')){
            foreach($request->nameOfOrganization as $key => $value){
                $nameOfOrganization = $request->nameOfOrganization[$key];
                $positionHeld = $request->positionHeld[$key];
                $activityDate = $request->activityDate[$key];
    
                $org = new CommunityOrganization;
                $org->organization_name = $nameOfOrganization;
                $org->possition_held = $positionHeld;
                $org->date = $activityDate;
                $org->students_id = $studentId;
                $org->save();
            }
        }
        

        $hobbies = "";
        foreach($request->hobbies as $key ){
            $hobbies .= $key.", ";

        }
        $hobby = new StudentHobbies;
        $hobby->hobbies = rtrim($hobbies,", ");
        $hobby->students_id = $studentId;
        $hobby->save();

        $health = "";
        if($request->filled('health')){ 
            foreach($request->health as $key){
                $health .= $key .", ";
            }

            $complication = new StudentHealthComplication;
            $complication->handicap = rtrim($health, ", ");
            $complication->accidents_or_sickness = $request->other_complications;
            $complication->students_id = $studentId;
            $complication->save();
        }

        if($request->filled('position')){
            foreach($request->position as $key => $value){
                $position = $request->position[$key];
                $nameofCompany = $request->nameofCompany[$key];
                $dateOfEmployment = $request->dateOfEmployment[$key];
                $monthlyEarning = $request->monthlyEarning[$key];
    
                $work = new WorkExperience;
                $work->work_possition = $position;
                $work->company_name = $nameofCompany;
                $work->employment_date = $dateOfEmployment;
                $work->monthly_earnings = $monthlyEarning;
                $work->students_id = $studentId;
                $work->save();
            }
    
        }
        
        if($request->filled('otherWorkExperience')){
            $otherWork = new OtherWorkExperience;
            $otherWork->other_work_experience = $request->otherWorkExperience;
            $otherWork->students_id = $studentId;
            $otherWork->save();
        }
        

        $careerChoice = "";
        if($request->filled('choice')){ 
            foreach($request->choice as $key){
                $careerChoice .= $key .", ";
            }
            
            $future = new FuturePlans;
            $future->course_choice = rtrim($careerChoice, ", ");
            $future->interested_occupations = $request->f_interest;

            if($request->filled('f_offense')){
                $future->crime = "Yes";
                $future->offense = $request->f_offense;
            }
            else{
                $future->crime = "No";
            }
            $future->students_id = $studentId;
            $future->save();
        }

        return Redirect('studentlist')->with('flash_message', 'Student Successfully Added!');
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

        $studentsId = DB::table('family_backgrounds')
        ->where('students_id','=',$id)->first();

        $family = FamilyBackground::find($studentsId->id);
        $family->father_name = $request->f_name;
        $family->father_occupation = $request->f_occupation;
        $family->father_income = $request->f_income;
        $family->mother_name = $request->m_name;
        $family->mother_occupation = $request->m_occupation;
        $family->mother_income = $request->m_income;
        $family->guardian_name = $request->g_name;
        $family->guardian_occupation = $request->g_occupation;
        $family->guardian_income = $request->g_income;
        $family->spouse_name = $request->s_name;
        $family->spouse_occupation = $request->s_occupation;
        $family->spouse_income = $request->s_income;
        $family->guardian_address = $request->f_address;
        $family->mobile_no = $request->f_contact;
        $family->landline = $request->f_landline;
        $family->emergency_name = $request->e_name;
        $family->emergency_contact = $request->e_contact;
        $family->emergency_address = $request->e_address;
        $family->emergency_email = $request->e_email;
        $family->save();

        $studentsId = DB::table('educ_backgrounds')
        ->where('students_id','=',$id)->first();
        $educ = educ_background::find($studentsId->id);
        $educ->elem_name = $request->elem_name;
        $educ->elem_date = $request->elem_date;
        $educ->hs_name = $request->hs_name;
        $educ->hs_date = $request->hs_date;
        $educ->voc_name = $request->voc_name;
        $educ->voc_date = $request->voc_date;
        $educ->college_name = $request->college_name;
        $educ->college_date = $request->college_date;
        $educ->course = $request->course;
        $educ->units = $request->units;
        $educ->post_grad = $request->post_grad;
        $educ->post_date = $request->post_date;
        $educ->save();

        $deleteOrgs = CommunityOrganization::where('students_id', '=', $id)->delete();

        foreach($request->nameOfOrganization as $key => $value){
            $nameOfOrganization = $request->nameOfOrganization[$key];
            $positionHeld = $request->positionHeld[$key];
            $activityDate = $request->activityDate[$key];

            $org = new CommunityOrganization;
            $org->organization_name = $nameOfOrganization;
            $org->possition_held = $positionHeld;
            $org->date = $activityDate;
            $org->students_id = $id;
            $org->save();
        }

        $hobbies = "";
        foreach($request->hobbies as $key ){
            $hobbies .= $key.", ";

        }
        $studentsId = DB::table('student_hobbies')
        ->where('students_id','=',$id)->first();
        $hobby = StudentHobbies::find($studentsId->id);
        $hobby->hobbies = rtrim($hobbies,", ");
        $hobby->students_id = $id;
        $hobby->save();

        $health = "";
        if($request->filled('health')){ 
            foreach($request->health as $key){
                $health .= $key .", ";
            }
            $studentsId = DB::table('student_health_complications')
            ->where('students_id','=',$id)->first();
            if($studentsId){
                $complication = StudentHealthComplication::find($studentsId->id);
                $complication->handicap = rtrim($health, ", ");
                $complication->accidents_or_sickness = $request->other_complications;
                $complication->students_id = $id;
                $complication->save();
            }
            else{
                $complication = new StudentHealthComplication;
                $complication->handicap = rtrim($health, ", ");
                $complication->accidents_or_sickness = $request->other_complications;
                $complication->students_id = $id;
                $complication->save();
            }
            
        }

        $deleteWork = WorkExperience::where('students_id', '=', $id)->delete();

        foreach($request->position as $key => $value){
            $position = $request->position[$key];
            $nameofCompany = $request->nameofCompany[$key];
            $dateOfEmployment = $request->dateOfEmployment[$key];
            $monthlyEarning = $request->monthlyEarning[$key];

            $work = new WorkExperience;
            $work->work_possition = $position;
            $work->company_name = $nameofCompany;
            $work->employment_date = $dateOfEmployment;
            $work->monthly_earnings = $monthlyEarning;
            $work->students_id = $id;
            $work->save();
        }

        $studentsId = DB::table('other_work_experiences')
        ->where('students_id','=',$id)->first();
        if($studentsId){
            $otherWork = OtherWorkExperience::find($studentsId->id);
            $otherWork->other_work_experience = $request->otherWorkExperience;
            $otherWork->save();
        }
        else{
            if($request->filled('otherWorkExperience')){
                $otherWork = new OtherWorkExperience;
                $otherWork->other_work_experience = $request->otherWorkExperience;
                $otherWork->students_id = $id;
                $otherWork->save();
            }
        }
        


        $careerChoice = "";
        if($request->filled('choice')){ 
            foreach($request->choice as $key){
                $careerChoice .= $key .", ";
            }
            $studentsId = DB::table('other_work_experiences')
            ->where('students_id','=',$id)->first();
            if($studentsId){
                $future = FuturePlans::find($studentsId->id);
                $future->course_choice = rtrim($careerChoice, ", ");
                $future->interested_occupations = $request->f_interest;

                if($request->filled('f_offense')){
                    $future->crime = "Yes";
                    $future->offense = $request->f_offense;
                }
                else{
                    $future->crime = "No";
                }
                $future->students_id = $id;
                $future->save();
            }
            else{
                $future = new FuturePlans;
                $future->course_choice = rtrim($careerChoice, ", ");
                $future->interested_occupations = $request->f_interest;

                if($request->filled('f_offense')){
                    $future->crime = "Yes";
                    $future->offense = $request->f_offense;
                }
                else{
                    $future->crime = "No";
                }
                $future->students_id = $id;
                $future->save();
            }
            
        }

        return Redirect('studentlist')->with('message', 'Successfully Updated!');
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

        $student_id = $id;
        $data = DB::table('students')
        ->join('family_backgrounds', 'students.id', '=', 'family_backgrounds.students_id')
        ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
        ->select('family_backgrounds.*', 'educ_backgrounds.*','students.*')
        ->where('students.id','=',$id)->first();
        

        $organizations = DB::table('community_organizations')
        ->select('community_organizations.*')
        ->where('students_id', '=', $id)
        ->get();

        $hobbies = DB::table('student_hobbies')
        ->select('student_hobbies.*')
        ->where('students_id', '=', $id)
        ->first();
        $text = $hobbies->hobbies;
        $hobbiesArr = explode(', ', $text);
        $hobbiesCheckbox = [
            'Movies',
            'Computer Games',
            'Singing',
            'Dancing',
            'Parties',
            'Alcoholic Drinks',
            'Facebook/Internet',
            'Sports',
            'Traveling',
            'Reading',
            'Speaking',
            'Cooking',
            'Writing',
            'Painting',
            'Photography',
            'Cycling',
            'Hiking',
            'Shopping',
            'Video Editing',
            'Computer Programming'
        ];
        $otherHobbies = array_diff( $hobbiesArr, $hobbiesCheckbox );

        $work_experience = DB::table('work_experiences')
        ->select('work_experiences.*')
        ->where('students_id', '=', $id)
        ->get();

        $other_work_experience = DB::table('other_work_experiences')
        ->select('other_work_experiences.*')
        ->where('students_id', '=', $id)
        ->first();

        $health = DB::table('student_health_complications')
        ->select('student_health_complications.*')
        ->where('students_id', '=', $id)
        ->first();
        $handicap = "";
        $healthArr = [];
        if($health){
            $handicap = $health->handicap;
            $healthArr = explode(', ', $handicap);
        }
        
        $futurePlan = DB::table('future_plans')
        ->select('future_plans.*')
        ->where('students_id', '=', $id)
        ->first();
        $courseChoice = "";
        $careerChoiceArr = [];
        if($futurePlan){
            $courseChoice = $futurePlan->course_choice;
            $careerChoiceArr = explode(', ', $courseChoice);
        }
        
        


        return view('Student.update_student', compact(
            'data',
            'organizations',
            'hobbiesArr',
            'work_experience',
            'other_work_experience',
            'otherHobbies',
            'healthArr',
            'health',
            'futurePlan',
            'careerChoiceArr',
            'student_id'
        ));
        
        
    }

    public function read_1($id)
    {
        $student_id = $id;
        $data = DB::table('students')
        ->join('family_backgrounds', 'students.id', '=', 'family_backgrounds.students_id')
        ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
        ->select('students.*', 'family_backgrounds.*', 'educ_backgrounds.*')
        ->where('students.id','=',$id)->first();


        $organizations = DB::table('community_organizations')
        ->select('community_organizations.*')
        ->where('students_id', '=', $id)
        ->get();

        $hobbies = DB::table('student_hobbies')
        ->select('student_hobbies.*')
        ->where('students_id', '=', $id)
        ->first();
        $text = $hobbies->hobbies;
        $hobbiesArr = explode(', ', $text);
        $hobbiesCheckbox = [
            'Movies',
            'Computer Games',
            'Singing',
            'Dancing',
            'Parties',
            'Alcoholic Drinks',
            'Facebook/Internet',
            'Sports',
            'Traveling',
            'Reading',
            'Speaking',
            'Cooking',
            'Writing',
            'Painting',
            'Photography',
            'Cycling',
            'Hiking',
            'Shopping',
            'Video Editing',
            'Computer Programming'
        ];
        $otherHobbies = array_diff( $hobbiesArr, $hobbiesCheckbox );

        $work_experience = DB::table('work_experiences')
        ->select('work_experiences.*')
        ->where('students_id', '=', $id)
        ->get();

        $health = DB::table('student_health_complications')
        ->select('student_health_complications.*')
        ->where('students_id', '=', $id)
        ->first();
        $handicap = $health->handicap;
        $healthArr = explode(', ', $handicap);

        $futurePlan = DB::table('future_plans')
        ->select('future_plans.*')
        ->where('students_id', '=', $id)
        ->first();
        $courseChoice = "";
        $careerChoiceArr = [];
        if($futurePlan){
            $courseChoice = $futurePlan->course_choice;
            $careerChoiceArr = explode(', ', $courseChoice);
        }
        

        return view('Student.view', compact(
            'data',
            'organizations',
            'hobbiesArr',
            'work_experience',
            'otherHobbies',
            'healthArr',
            'health',
            'futurePlan',
            'careerChoiceArr',
            'student_id'
        ));
    }
}
