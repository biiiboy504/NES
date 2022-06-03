@extends('nes.layout.navbar')

@section('content')
    <div class="main-content-inner">
        <div class="row dataSheet">
            <div class="col-10">
                <h1 class="view-title">PERSONAL DATA SHEET</h1>
            </div>
            <form method="GET">
                <div class="card-body view-body">
                    <div class="row">
                        <div class="col-12">
                        <h1 class="view-subtitle">PERSONAL INFORMATION</h1>
                        </div>
                        <div class="col-12 view-label">
                            <label>Name of Trainee:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="last_name" class="view-textbox" value="{{$data->last_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="first_name" class="view-textbox" value="{{$data->first_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="middle_name" class="view-textbox" value="{{$data->middle_name}}" readonly>
                        </div>
                        <div class="col-4 bottom-label">
                            <label>(Last Name)</label>
                        </div>
                        <div class="col-4 bottom-label">
                        <label>(First Name)</label>
                        </div>
                        <div class="col-4 bottom-label">
                        <label>(Middle Name)</label>
                        </div>
                        <div class="col-sm-10">
                            <label class="view-label">Complete Address:</label>
                            <input type="text" name="address" class="view-textbox2" value="{{$data->address}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label">Zip Code:</label>
                            <input type="text" name="zip_code" class="view-textbox2" value="{{$data->zip_code}}" readonly>
                        </div>
                        <div class="col-sm-8">
                            <label class="view-label2">Contact Number (Mobile):</label>
                            <input type="text" name="contact_num" class="view-textbox3" style="width:78.5%;" value="{{$data->contact_num}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">(Landline)</label>
                            <input type="text" name="landline" class="view-textbox3" style="width:84%;"  value="{{$data->landline}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Civil Status:</label>
                            <input type="text" name="civil_status" class="view-textbox3" style="width:80%;"  value="{{$data->civil_status}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Sex:</label>
                            <input type="text" name="gender" class="view-textbox3" style="width:86%;"  value="{{$data->gender}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Height(ft):</label>
                            <input type="text" name="height" class="view-textbox3" style="width:65%;"  value="{{$data->height}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Weight(kg):</label>
                            <input type="text" name="weight" class="view-textbox3" style="width:60%;"  value="{{$data->weight}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Date of Birth:</label>
                            <input type="text" name="birth_date" class="view-textbox3" style="width:77%;"  value="{{$data->birth_date}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Age:</label>
                            <input type="text" name="age" class="view-textbox3" style="width:50%;"  value="{{$data->age}}" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label2">Birth Place:</label>
                            <input type="text" name="birth_place" class="view-textbox3" style="width:75%;"  value="{{$data->birth_place}}" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label2">Citezenship:</label>
                            <input type="text" name="citizenship" class="view-textbox3" style="width:74%;"  value="{{$data->citizenship}}" readonly>
                        </div>
                        <div class="col-12 mt-4">
                            <h1 class="view-subtitle">FAMILY BACKGROUND</h1>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Father's Name:</label>
                            <input type="text" name="f_name" class="view-textbox3" style="width:74%;" value="{{$data->father_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="f_occupation" class="view-textbox3" style="width:74%;" value="{{$data->father_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="f_income" class="view-textbox3" style="width:68%;" value="{{$data->father_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Mother's Name:</label>
                            <input type="text" name="m_name" class="view-textbox3" style="width:74%;" value="{{$data->mother_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="m_occupation" class="view-textbox3" style="width:74%;" value="{{$data->mother_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="m_income" class="view-textbox3" style="width:68%;" value="{{$data->mother_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Guardian's Name:</label>
                            <input type="text" name="g_name" class="view-textbox3" style="width:70%;" value="{{$data->guardian_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="g_occupation" class="view-textbox3" style="width:74%;" value="{{$data->guardian_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="g_income" class="view-textbox3" style="width:68%;" value="{{$data->guardian_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Spouse Name:</label>
                            <input type="text" name="s_name" class="view-textbox3" style="width:74%;" value="{{$data->spouse_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="s_occupation" class="view-textbox3" style="width:74%;" value="{{$data->spouse_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="s_income" class="view-textbox3" style="width:68%;" value="{{$data->spouse_income}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2">Address of Parents/Guardian/Spouse:</label>
                            <input type="text" name="f_address" class="view-textbox3" style="width:82.8%;" value="{{$data->guardian_address}}" readonly>
                        </div>
                        <div class="col-sm-8">
                            <label class="view-label2">Contact Number (Mobile):</label>
                            <input type="text" name="f_contact" class="view-textbox3" style="width:78.5%;" value="{{$data->mobile_no}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">(Landline)</label>
                            <input type="text" name="f_landline" class="view-textbox3" style="width:84%;"  value="{{$data->landline}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2" style="font-size: 14px;"><b>In case of emergency, please contact:</b></label>
                            <input type="text" name="e_name" class="view-textbox3" style="width: 80%;" value="{{$data->emergency_name}}" readonly>
                        </div>
                        <div class="col-sm-7">
                            <label class="view-label2">Address:</label>
                            <input type="text"  name="e_address" class="view-textbox3" style="width:85%;" value="{{$data->emergency_address}}" readonly>
                        </div>
                        <div class="col-sm-5">
                            <label class="view-label2">Contact No.:</label>
                            <input type="text" name="e_contact" class="view-textbox3" style="width:85%;"  value="{{$data->emergency_contact}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2">Email Address:</label>
                            <input type="text" name="e_email" class="view-textbox3" style="width: 92.7%;" value="{{$data->emergency_email}}" readonly>
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">EDUCATIONAL BACKGROUND</h1>
                        </div>
                        <div class="col-sm-12">
                            <table class="table-bordered" id="view-table">
                                <thead>
                                <tr>
                                    <th class="col-sm-2">Level</th>
                                    <th class="col-sm-8">Name of School</th>
                                    <th class="col-sm-2">Date Graduated</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Elementary</td>
                                    <td><input type="text" name="elem_name" class="view-textbox4"  value="{{$data->elem_name}}" readonly></td>
                                    <td><input type="text" name="elem_date" class="view-textbox4"  value="{{$data->elem_date}}" readonly></td>
                                </tr>
                                <tr>
                                    <td>High School</td>
                                    <td><input type="text" name="hs_name" class="view-textbox4"  value="{{$data->hs_name}}" readonly></td>
                                    <td><input type="text" name="hs_date" class="view-textbox4"  value="{{$data->hs_date}}" readonly></td>
                                </tr>
                                <tr>
                                    <td>Vocation</td>
                                    <td><input type="text" name="voc_name" class="view-textbox4" value="{{$data->voc_name}}" readonly></td>
                                    <td><input type="text" name="voc_date" class="view-textbox4"  value="{{$data->voc_date}}" readonly></td>
                                </tr>
                                <tr>
                                    <td>College</td>
                                    <td><input type="text" name="college_name" class="view-textbox4"  value="{{$data->college_name}}" readonly></td>
                                    <td><input type="text" name="college_date" class="view-textbox4"  value="{{$data->college_date}}" readonly></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                    <label>Course/Degree: </label>
                                    <input type="text" name="course" class="view-textbox4"  value="{{$data->course}}" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                    <label>No. of Units Completed(For Undergraduate): </label>
                                    <input type="text" name="units" class="view-textbox4"  value="{{$data->units}}" readonly> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>Post Graduate</td>
                                    <td><input type="text" name="post_grad" class="view-textbox4"  value="{{$data->post_grad}}" readonly></td>
                                    <td><input type="text" name="post_date" class="view-textbox4"  value="{{$data->post_date}}" readonly></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">ACTIVITIES: School and Community Organizations</h1>
                        </div>
                        <div class="col-sm-12">
                            <table class="table-bordered" id="view-table">
                                <thead>
                                <tr>
                                    <th class="col-sm-6">Name of Organization</th>
                                    <th class="col-sm-4">Position Held</th>
                                    <th class="col-sm-2">Date</th>
                                </tr>
                                </thead>
                                <tbody id="organizationTable">
                                    @foreach($organizations as $org)
                                    <tr>
                                        <td><input type="text" name="nameOfOrganization[]" class="view-textbox4"  value="{{$org->organization_name}}" readonly></td>
                                        <td><input type="text" name="positionHeld[]" class="view-textbox4"  value="{{$org->possition_held}}" readonly></td>
                                        <td><input type="text" name="activityDate[]" class="view-textbox4"  value="{{$org->date}}" readonly></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">HOBBIES AND LEISURE TIME ACTIVITIES: Do you enjoy/engage in:</h1>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Movies" 
                            @if(in_array('Movies' , $hobbiesArr)) checked @endif><label class="view-label3" >Movies</label><br>
                        </div>   
                        <div class="col-sm-2">
                         <input  type="checkbox" name="hobbies[]" value="Computer Games" 
                         @if(in_array('Computer Games' , $hobbiesArr)) checked @endif><label class="view-label3">Computer Games</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Singing" 
                            @if(in_array('Singing' , $hobbiesArr)) checked @endif><label class="view-label3">Singing</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Dancing" 
                            @if(in_array('Dancing' , $hobbiesArr)) checked @endif><label class="view-label3">Dancing</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Parties" 
                            @if(in_array('Parties' , $hobbiesArr)) checked @endif><label class="view-label3">Parties</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Alcoholic Drinks" 
                            @if(in_array('Alcoholic Drinks' , $hobbiesArr)) checked @endif><label class="view-label3">Alcoholic Drinks</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Facebook/Internet" 
                            @if(in_array('Facebook/Internet' , $hobbiesArr)) checked @endif><label class="view-label3">Facebook/Internet</label><br>
                        </div>   
                        <div class="col-sm-2">
                         <input type="checkbox" name="hobbies[]" value="Sports" 
                         @if(in_array('Sports' , $hobbiesArr)) checked @endif><label class="view-label3">Sports</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Traveling" 
                            @if(in_array('Traveling' , $hobbiesArr)) checked @endif><label class="view-label3">Traveling</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Reading" 
                            @if(in_array('Reading' , $hobbiesArr)) checked @endif><label class="view-label3">Reading</label><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Speaking" 
                            @if(in_array('Speaking' , $hobbiesArr)) checked @endif><label class="view-label3">Speaking</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Cooking" 
                            @if(in_array('Cooking' , $hobbiesArr)) checked @endif><label class="view-label3">Cooking</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Writing" 
                            @if(in_array('Writing' , $hobbiesArr)) checked @endif><label class="view-label3">Writing</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Painting" 
                            @if(in_array('Painting' , $hobbiesArr)) checked @endif><label class="view-label3">Painting</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Photography" 
                            @if(in_array('Photography' , $hobbiesArr)) checked @endif><label class="view-label3">Photography</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Cycling" 
                            @if(in_array('Cycling' , $hobbiesArr)) checked @endif><label class="view-label3">Cycling</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Hiking" 
                            @if(in_array('Hiking' , $hobbiesArr)) checked @endif><label class="view-label3">Hiking</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Shopping" 
                            @if(in_array('Shopping' , $hobbiesArr)) checked @endif><label class="view-label3">Shopping</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Video Editing" 
                            @if(in_array('Video Editing' , $hobbiesArr)) checked @endif><label class="view-label3">Video Editing</label><br>
                        </div> 
                        <div class="col-sm-2">
                            <input type="checkbox" name="hobbies[]" value="Computer Programming" 
                            @if(in_array('Computer Programming' , $hobbiesArr)) checked @endif><label class="view-label3">Computer Programming</label><br>
                        </div> 
                        <div class="col-sm-12 mt-2">
                            <label class="view-label3">Others (Please Specify):</label>
                            <input type="text" name="hobbies[]" class="view-textbox2" value="{{implode(', ', $otherHobbies)}}" readonly> 
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">HEALTH CONDITION: Do you have a handicap / difficulty in: </h1>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" name="health[]" value="Physical handicap" 
                            @if(in_array('Physical handicap' , $healthArr)) checked @endif><label class="view-label3">Physical handicap</label><br>
                        </div> 
                        <div class="col-sm-4">
                            <input type="checkbox" name="health[]" value="Mental handicap" 
                            @if(in_array('Mental handicap' , $healthArr)) checked @endif><label class="view-label3">Mental handicap</label><br>
                        </div> 
                        <div class="col-sm-4">
                            <input type="checkbox" name="health[]" value="Hearing" 
                            @if(in_array('Hearing' , $healthArr)) checked @endif><label class="view-label3">Hearing</label><br>
                        </div> 
                        <div class="col-sm-4">
                            <input type="checkbox" name="health[]" value="Eyesight" 
                            @if(in_array('Eyesight' , $healthArr)) checked @endif><label class="view-label3">Eyesight</label><br>
                        </div>
                        <div class="col-sm-4">
                            <input type="checkbox" name="health[]" value="Speaking" 
                            @if(in_array('Speaking' , $healthArr)) checked @endif><label class="view-label3">Speaking</label><br>
                        </div>  
                        <div class="col-sm-12 mt-2">
                            <label class="view-label3">Do you have any serious accident or sickness?:</label>
                            <input type="text" name="health[]" class="view-textbox2" value="{{$health->accidents_or_sickness}}" readonly>
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">WORK EXPERIENCES</h1>
                        </div>
                        <div class="col-sm-12">
                            <table class="table-bordered" id="view-table">
                                <thead>
                                <tr>
                                    <th class="col-sm-3">Nature of Work/Position</th>
                                    <th class="col-sm-3">Name of Company</th>
                                    <th class="col-sm-3">Date Of Employment </th>
                                    <th class="col-sm-3">Monthly Earnings</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($work_experience as $work)
                                <tr>
                                    <td><input type="text" name="position[]" class="view-textbox4"  value="{{$work->work_possition}}" readonly></td>
                                    <td><input type="text" name="nameofCompany[]" class="view-textbox4"  value="{{$work->company_name}}" readonly></td>
                                    <td><input type="text" name="dateOfEmployment[]" class="view-textbox4"  value="{{$work->employment_date}}" readonly></td>
                                    <td><input type="text" name="monthlyEarning[]" class="view-textbox4"  value="{{$work->monthly_earnings}}" readonly></td>
                                </tr>
                                @endforeach()
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-4 mb-2">
                            <h1 class="view-subtitle">FUTURE PLANS:</h1>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label3">Course that I am taking in is the choice of: </label>
                        </div>
                        <div class="col-sm-7">
                            <input type="checkbox" name="choice[]" value="My Own" @if(in_array('My Own' , $careerChoiceArr)) checked @endif><label class="view-label3 mr-5">My Own</label>
                            <input type="checkbox" name="choice[]" value="My Parents" @if(in_array('My Parents' , $careerChoiceArr)) checked @endif><label class="view-label3 mr-5">My Parents</label>
                            <input type="checkbox" name="choice[]" value="My Peers" @if(in_array('My Peers' , $careerChoiceArr)) checked @endif><label class="view-label3 mr-5">My Peers</label>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label3">Occupations interested to engage in:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="f_interest" class="view-textbox2" value="" readonly>
                        </div>
                        <div class="col-sm-7">
                            <label class="view-label3">Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulations by any court or tribunal?:</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="checkbox" name="crime[]" value="Yes" @if(!empty($futurePlan->crime) && $futurePlan->crime == 'Yes') checked @endif><label class="view-label3 mr-5">Yes</label>
                            <input type="checkbox" name="crime[]" value="No" @if(!empty($futurePlan->crime) && $futurePlan->crime == 'No')  checked @endif><label class="view-label3 mr-5">No</label>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label3">If your answer is <b>"YES"</b> give details of the offense:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" name="f_interest" class="view-textbox2" value="{{!empty($futurePlan->offense) ? $futurePlan->offense : ''}}" readonly>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </div>
 

@endsection()