@extends('nes.layout.navbar')

@section('content')

<!-- multistep form -->
<form id="msform" action="/edit_student/{{$student_id}}" method="POST">
    @csrf
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal</li>
    <li>Family</li>
    <li>Emergency</li>
    <li>Education</li>
    <li>Activities</li>
    <li>Hobbies</li>
    <li>Health</li>
    <li>Experiences</li>
    <li>Future Plan</li>
    <li>Review</li>
  </ul>

  
  <!------------------------ START of Personal Information --------------------->

  <fieldset>
    <h1 class="fs-title">Update Personal Information</h1>
    <h3 class="fs-subtitle">Step 2</h3>
        <div class="row">
            <div class="col-4">
                <label for=""><b>Firstname:</b></label>
                    <input type="text" name="first_name" value="{{$data->first_name}}" class="form-control mb-4" placeholder="Firstname . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Middlename:</b></label>
                        <input type="text" name="middle_name" value="{{$data->middle_name}}" class="form-control mb-4" placeholder="Middlename . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Lastname:</b></label>
                        <input type="text" name="last_name" value="{{$data->last_name}}" class="form-control mb-4" placeholder="Lastname . . .">
                    </div>
                    <div class="col-8">
                        <label for=""><b>Complete Address:</b></label>
                        <input type="text" name="address" value="{{$data->address}}" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Zip Code:</b></label>
                        <input type="text" name="zip_code" value="{{$data->zip_code}}" class="form-control mb-4" placeholder="Zip Code . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <input type="text" name="contact_num" value="{{$data->contact_num}}" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="landline" value="{{$data->landline}}" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                    <div class="col-4">
                        <label for="">Civil Status:</label>
                        <select class="form-control form-control-lg mb-3" value="{{$data->civil_status}}" name="civil_status">
                        <option value="">---Select Civil Status---</option>
                        <option {{$data->civil_status == 'Married' ? 'selected': ' '}}>Married</option>
                        <option {{$data->civil_status == 'Single' ? 'selected': ' '}}>Single</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for=""><b>Gender:</b></label>
                        <select class="form-control form-control-lg mb-4" value="{{$data->gender}}" name="gender">
                        <option value="">-Select Gender-</option>
                        <option {{$data->gender == 'Male' ? 'selected': ' '}}>Male</option>
                        <option {{$data->gender == 'Female' ? 'selected': ' '}}>Female</option>
                        </select>  
                    </div>
                    <div class="col-3">
                        <label for=""><b>Height (in):</b></label>
                        <input type="text" name="height" value="{{$data->height}}" class="form-control mb-4" placeholder="Height . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Weight (kg)</b>:</label>
                        <input type="text" name="weight" value="{{$data->weight}}" class="form-control mb-4" placeholder="Weight . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Citizenship:</b></label>
                        <input type="text" name="citizenship" value="{{$data->citizenship}}" class="form-control mb-4" placeholder="Citizenship . . .">
                    </div>
                    <div class="col-7">
                        <label for=""><b>Birth Place:</b></label>
                        <input type="text" name="birth_place" value="{{$data->birth_place}}" class="form-control mb-4" placeholder="Birth Place . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Birthdate:</b></label>
                        <input type="date" name="birth_date" value="{{$data->birth_date}}" class="form-control mb-4">
                    </div>
                    <div class="col-2 ">
                        <label for=""><b>Age:</b></label>
                        <input type="number" name="age" value="{{$data->age}}" class="form-control mb-4" placeholder="Age . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Batch No.</b></label>
                        <input type="number" name="batch_num" value="{{$data->batch_num}}" class="form-control mb-4">
                    </div>
                </div>  
                <input style="float:right;" type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!------------------------------- END of Personal Information ---------------------------->





<!------------------------------- START of Family Background ---------------------------->
<fieldset>
  <h1 class="fs-title">Update Family Background</h1>
    <h3 class="fs-subtitle">Step 3</h3>
        <div class="row pt-2 px-4 mb-2">
            <div class="col-4">
                <label for=""><b>Father's Name:</b></label>
                    <input type="text" name="f_name" value="{{$data->father_name}}" class="form-control mb-4" placeholder="Father's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="f_occupation" value="{{$data->father_occupation}}" class="form-control mb-4" placeholder="Father's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="f_income" value="{{$data->father_income}}" class="form-control mb-4" placeholder="Father's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Mother's Name:</b></label>
                    <input type="text" name="m_name" value="{{$data->mother_name}}" class="form-control mb-4" placeholder="Mother's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="m_occupation" value="{{$data->mother_occupation}}" class="form-control mb-4" placeholder="Mother's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="m_income" value="{{$data->mother_income}}" class="form-control mb-4" placeholder="Mother's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Guardian's Name:</b></label>
                    <input type="text" name="g_name" value="{{$data->guardian_name}}" class="form-control mb-4" placeholder="Guardian's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="g_occupation" value="{{$data->guardian_occupation}}" class="form-control mb-4" placeholder="Guardian's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="g_income" value="{{$data->guardian_income}}" class="form-control mb-4" placeholder="Guardian's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Spouse Name:</b></label>
                    <input type="text" name="s_name" value="{{$data->spouse_name}}" class="form-control mb-4" placeholder="Spouse Name. . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="s_occupation" value="{{$data->spouse_occupation}}" class="form-control mb-4" placeholder="Spouse Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="s_income" value="{{$data->spouse_income}}" class="form-control mb-4" placeholder="Spouse Monthly Income . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Address of Parents/Guardian/Spouse:</b></label>
                        <input type="text" name="f_address" value="{{$data->guardian_address}}" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <input type="text" name="f_contact" value="{{$data->mobile_no}}" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="f_landline" value="{{$data->landline}}" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                </div>
                <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 
  </fieldset>



  
<!------------------------------- END of Family Background ---------------------------->




<!------------------------------- START of EMERGENCY CONTACT ---------------------------->

<fieldset>
    <h1 class="fs-title">Update EMERGENCY CONTACT</h1>
    <h3 class="fs-subtitle">Step 4</h3>
        <div class="row">
        <div class="col-12">
                <label for="" style="font-size: 16px;" class="content-cent"><b>IN CASE OF EMERGENCY, PLEASE CONTACT:</b></label>
                <input type="text" name="e_name" value="{{$data->emergency_name}}" class="form-control mb-4" placeholder="Name. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Address:</b></label>
                <input type="text" name="e_address" value="{{$data->emergency_address}}" class="form-control mb-4" placeholder="Address. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Contact No.:</b></label>
                <input type="text" name="e_contact" value="{{$data->emergency_contact}}" class="form-control mb-4" placeholder="Contact Number . . .">
            </div>
            <div class="col-12">
                <label for=""><b>Email Address:</b></label>
                <input type="email" name="e_email" value="{{$data->emergency_email}}" class="form-control mb-4" placeholder="Email Address. . .">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 

</fieldset>




<!------------------------------- END of EMERGENCY CONTACT ---------------------------->






<!------------------------------- Start of Educational Background ------------------------------->

  <fieldset>
    <h2 class="fs-title">Update Educational Background</h2>
    <h3 class="fs-subtitle">Step 5</h3>
        <div class="row pt-2 px-4 mb-2">
            <div class="col-2" style="text-align: center; ">
                    <label for="" class="pl-4"><b>Level</b></label>
                </div>
                <div class="col-8" style="text-align: center; ">
                    <label for=""><b>Name of School</b></label>
                </div>
                <div class="col-2" style="text-align: center; ">
                    <label for="" class="pr-3" style="float: right;"><b>Date Graduated</b></label>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label for="" style="float: right;">Elementary:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="elem_name" value="{{$data->elem_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="elem_date" value="{{$data->elem_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">High School:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="hs_name" value="{{$data->hs_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="hs_date" value="{{$data->hs_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Vocational:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="voc_name" value="{{$data->voc_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="voc_date" value="{{$data->voc_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">College:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="college_name" value="{{$data->college_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="college_date" value="{{$data->college_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-5">
                    <label for="">Course/Degree:</label>
                    <input type="text" name="course" value="{{$data->course}}" class="form-control mb-3">
                </div>
                <div class="col-7">
                    <label for="">No. of units Completed (for Undergraduate):</label>
                    <input type="text" name="units" value="{{$data->units}}" class="form-control mb-3" >
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Post Graduate:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="post_grad" value="{{$data->post_grad}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="post_date" value="{{$data->post_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;" type="button" name="previous" class="previous action-button" value="Previous" />
  </fieldset>

<!------------------------------- END of Educational Background ------------------------------->







    <!-------------------------------------- START of Activities ---------------------------------->
    <fieldset>
    <h2 class="fs-title">Update Activities</h2>
    <h3 class="fs-subtitle">Step 6</h3>
    <div>
        <label for="" class="mt-4" style="font-size: 16px;"><b>ACTIVITIES: School and Community Organizations</b></label>
    </div>
    <div class="row my-4">
        <table class="table table-bordered" id="organizationTable" >
            <thead>
                <tr>
                    <th scope="col">Name of Organization</th>
                    <th scope="col">Position Held</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody id ="organizationTable">
                @foreach($organizations as $org)
                <tr>
                    <td>
                        <input type="text" class="form-control" id="inputName5" value= "{{$org->organization_name}}" name="nameOfOrganization[]" >
                    </td>
                    <td>
                        <input type="text" class="form-control" id="inputName5" value= "{{$org->possition_held}}" name="positionHeld[]">
                    </td>
                    <td>
                        <input type="date" class="form-control" id="inputName5" value= "{{$org->date}}" name="activityDate[]">
                    </td>
                </tr>
                @endforeach
            </tbody>
                
        </table>
        <div class="row">
            <div class="col-md-12">
            <input class="btn btn-secondary text-light" type="button" value="Add a Row" onclick="addRowActivities()">
            </div>
        </div>
            
    </div>
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
            
            
  </fieldset>


<!---------------------------------- END of Activities -------------------------->







<!---------------------------------- START of  Hobbies -------------------------->




<fieldset>
    <h2 class="fs-title">Update Hobbies</h2>
    <h3 class="fs-subtitle">Step 7</h3>
        <div class="row">

                    <div>
                        <label class= "mt-4 ml-2" style="font-size: 16px;"><b>HOBBIES AND LEISURE TIME ACTIVITIES: Do you enjoy/engage in:</b></label>
                    </div>
                    
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="Movies" name="hobbies[]" 
                            @if(in_array('Movies' , $hobbiesArr)) checked @endif><label for="checkboxOne">Movies</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="Computer Games" name="hobbies[]"
                            @if(in_array('Computer Games' , $hobbiesArr)) checked @endif><label for="checkboxTwo">Computer Games</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="Singing" name="hobbies[]"
                            @if(in_array('Singing' , $hobbiesArr)) checked @endif><label for="checkboxThree">Singing</label></li>
                        <li><input type="checkbox" id="checkboxFour" value="Dancing" name="hobbies[]"
                            @if(in_array('Dancing' , $hobbiesArr)) checked @endif><label for="checkboxFour">Dancing</label></li>
                        <li><input type="checkbox" id="checkboxFive" value="Parties" name="hobbies[]"
                            @if(in_array('Parties' , $hobbiesArr)) checked @endif><label for="checkboxFive">Parties</label></li>
                        <li><input type="checkbox" id="checkboxSix" value="Alcoholic Drinks" name="hobbies[]"
                            @if(in_array('Alcoholic Drinks' , $hobbiesArr)) checked @endif><label for="checkboxSix">Alcoholic Drinks</label></li>
                        <li><input type="checkbox" id="checkboxSeven" value="facebook/Internet" name="hobbies[]"
                            @if(in_array('Facebook/Internet' , $hobbiesArr)) checked @endif><label for="checkboxSeven">Facebook/Internet</label></li>
                        <li><input type="checkbox" id="checkboxEight" value="Sports" name="hobbies[]"
                            @if(in_array('Sports' , $hobbiesArr)) checked @endif><label for="checkboxEight">Sports</label></li>
                        <li><input type="checkbox" id="checkboxNine" value="Traveling" name="hobbies[]"
                            @if(in_array('Traveling' , $hobbiesArr)) checked @endif><label for="checkboxNine">Traveling</label></li>
                        <li><input type="checkbox" id="checkboxTen" value="Reading" name="hobbies[]"
                            @if(in_array('Reading' , $hobbiesArr)) checked @endif><label for="checkboxTen">Reading</label></li>
                        <li><input type="checkbox" id="checkboxEleven" value="Speaking" name="hobbies[]"
                            @if(in_array('Speaking' , $hobbiesArr)) checked @endif><label for="checkboxEleven">Speaking</label></li>
                        <li><input type="checkbox" id="checkboxTwelve" value="Cooking" name="hobbies[]"
                            @if(in_array('Cooking' , $hobbiesArr)) checked @endif><label for="checkboxTwelve">Cooking</label></li>
                        <li><input type="checkbox" id="checkboxThirteen" value="Writing" name="hobbies[]"
                            @if(in_array('Writing' , $hobbiesArr)) checked @endif><label for="checkboxThirteen">Writing</label></li>
                        <li><input type="checkbox" id="checkboxFourteen" value="Painting" name="hobbies[]"
                            @if(in_array('Painting' , $hobbiesArr)) checked @endif><label for="checkboxFourteen">Painting</label></li>
                        <li><input type="checkbox" id="checkboxFifteen" value="Photography" name="hobbies[]"
                            @if(in_array('Photography' , $hobbiesArr)) checked @endif><label for="checkboxFifteen">Photography</label></li>
                        <li><input type="checkbox" id="checkboxSixteen" value="Cycling" name="hobbies[]"
                            @if(in_array('Cycling' , $hobbiesArr)) checked @endif><label for="checkboxSixteen">Cycling</label></li>
                        <li><input type="checkbox" id="checkboxSeventeen" value="Hiking" name="hobbies[]"
                            @if(in_array('Hiking' , $hobbiesArr)) checked @endif><label for="checkboxSeventeen">Hiking</label></li>
                        <li><input type="checkbox" id="checkboxEighteen" value="Shopping" name="hobbies[]"
                            @if(in_array('Shopping' , $hobbiesArr)) checked @endif><label for="checkboxEighteen">Shopping</label></li>
                        <li><input type="checkbox" id="checkboxNineteen" value="Video Editing" name="hobbies[]"
                            @if(in_array('Video Editing' , $hobbiesArr)) checked @endif><label for="checkboxNineteen">Video Editing</label></li>
                        <li><input type="checkbox" id="checkboxTwenty" value="Computer Programming" name="hobbies[]"
                            @if(in_array('Computer Programming' , $hobbiesArr)) checked @endif><label for="checkboxTwenty">Computer Programming</label></li>
                    </ul>
                        <div class="col-12 mt-3">
                            <label for=""><b>Others (Please Specify):</b></label>
                            <div class="alert-danger pl-2"></div>
                            <input type="text" name="hobbies[]" value="{{implode(', ', $otherHobbies)}}" class="form-control mb-4" placeholder="Other Hobbies . . .">
                        </div>
                </div>
                    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
    </fieldset>




<!---------------------------------- END of Hobbies -------------------------->






<!---------------------------------- START of Health Contdition -------------------------->
<fieldset>
    <h2 class="fs-title">Update Health Condition</h2>
    <h3 class="fs-subtitle">Step 8</h3>
        <div class="row">
            <div>
                <label class= "mt-4 ml-2 mr-5" style="font-size: 16px;"><b>HEALTH CONDITION: Do you have a handicap / difficulty in:</b></label>
                <div class="ml-5">
                <ul class="ks-cboxtags">
                    <li><input type="checkbox" name="health[]"id="h_checkboxOne" value="Physical handicap"
                        @if(in_array('Physical handicap' , $healthArr)) checked @endif><label for="h_checkboxOne">Physical handicap </label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxTwo" value="Hearing"
                        @if(in_array('Hearing' , $healthArr)) checked @endif><label for="h_checkboxTwo">Hearing</label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxThree" value="Eyesight"
                        @if(in_array('Eyesight' , $healthArr)) checked @endif><label for="h_checkboxThree">Eyesight </label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxFour" value="Speaking"
                        @if(in_array('Speaking' , $healthArr)) checked @endif><label for="h_checkboxFour">Speaking</label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxFive" value="Mental handicap"
                        @if(in_array('Mental handicap' , $healthArr)) checked @endif><label for="h_checkboxFive">Mental handicap</label></li>
                </ul>
                </div>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Do you have any serious accident or sickness?:</b></label>
                <div class="alert-danger pl-2"></div>
                <input value="{{!empty($health->accidents_or_sickness) ? $health->accidents_or_sickness : ''}}" type="text" name="other_complications" class="form-control mb-4" placeholder="">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
        
  </fieldset>

<!------------------------------------------ END of Health Conditions ------------------------------------>






<!------------------------------------------ START of Work Experiences ------------------------------------>

<fieldset>
    <h2 class="fs-title">Update Work Experiences</h2>
    <h3 class="fs-subtitle">Step 9</h3>
        <div class="row my-4">
        <table class="table table-bordered" id="workExperienceTable" >
            <thead>
                <tr>
                    <th scope="col">Nature of Work/Position</th>
                    <th scope="col">Company</th>
                    <th scope="col">Date of Employment</th>
                    <th scope="col">Monthly Earning</th>
                </tr>
            </thead>
            <tbody id ="workExperienceTable">
                @foreach($work_experience as $work)
                <tr>
                    <td>
                        <input value="{{$work->work_possition}}" type="text" class="form-control" id="inputName5" name="position[]">
                    </td>
                    <td>
                        <input value="{{$work->company_name}}" type="text" class="form-control" id="inputName5" name="nameofCompany[]">
                    </td>
                    <td>
                        <input value="{{$work->employment_date}}" type="date" class="form-control" id="inputName5" name="dateOfEmployment[]">
                    </td>
                    <td>
                        <input value="{{$work->monthly_earnings}}" type="text" class="form-control" id="inputName5" name="monthlyEarning[]">
                    </td>
                </tr>
                @endforeach()
            </tbody>
                
        </table>
        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-secondary btn-sm text-light" type="button" value="Add a Row" onclick="addRowExperience()">
            </div>
        </div>
        <br>
            <div class="col-md-12">
                <label for="otherWorkExperience">Other Work Experience</label>
                <input value="{{$other_work_experience->other_work_experience}}" class="form-control" id="otherWorkExperience" name="otherWorkExperience" type="text">
            </div>
       
    </div>
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
    
  </fieldset>



<!---------------------------------------END of Work Experiences and Future Plans --------------------------------------->





<!--------------------------------------- START of Future Plans --------------------------------------->

<fieldset>
    <h2 class="fs-title">Update Future plans</h2>
    <h3 class="fs-subtitle">Step 10</h3>
        <div class="row">
            <div class="col-12 mt-3">
                <label for=""><b>Course that I am taking in is the choice of:</b></label>
                <ul class="ks-cboxtags">
                        <li><input name="choice[]" type="checkbox" id="f_checkboxOne" value="My Own"
                            @if(in_array('My Own' , $careerChoiceArr)) checked @endif><label for="f_checkboxOne">My Own </label></li>
                        <li><input name="choice[]" type="checkbox" id="f_checkboxTwo" value="My Parents"
                            @if(in_array('My Parents' , $careerChoiceArr)) checked @endif><label for="f_checkboxTwo">My Parents</label></li>
                        <li><input name="choice[]" type="checkbox" id="f_checkboxThree" value="My Peers"
                            @if(in_array('My Peers' , $careerChoiceArr)) checked @endif><label for="f_checkboxThree">My Peers </label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Occupations interested to engage in:</b></label>
                <input value="{{!empty($futurePlan->interested_occupations) ? $futurePlan->interested_occupations : ''}}" type="text" name="f_interest" class="form-control mb-4" placeholder="">
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulations by any court or tribunal?:</b></label>
                <ul class="ks-cboxtags">
                        <li><input name="crime[]" type="checkbox" id="f_checkboxFour" value="Yes"
                            @if(!empty($futurePlan->crime) && $futurePlan->crime == 'Yes') checked @endif><label for="f_checkboxFour">YES </label></li>
                        <li><input name="crime[]" type="checkbox" id="f_checkboxFive" value="No"
                            @if(!empty($futurePlan->crime) && $futurePlan->crime == 'No')  checked @endif><label for="f_checkboxFive">NO</label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>If your answer is "YES" give details of the offense:</b></label>
                <input value="{{!empty($futurePlan->offense) ? $futurePlan->offense : ''}}" type="text" name="f_offense" class="form-control mb-4" placeholder="">
            </div>
        </div>
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />

  </fieldset>

<!---------------------------------------END of Future Plans   --------------------------------------->



  <!--------------------------------------- START of Review --------------------------------------->

  <fieldset>
    <h2 class="fs-title" style="font-size: 40px;">Review!</h2>
    <h3 class="fs-subtitle">Step 11</h3>


    <h2 class="fs-subtitle" style="font-size: 20px;">Click Previous to review encoded data.</h2>

    <button style="float:right; color:#66ff99" class="action-button text-light"  type="submit" >Submit</button>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />

  </fieldset>



  <!--------------------------------------- END of Review --------------------------------------->
</form>


@endsection()

@section('scripts')
<script type="text/javascript">
    function addRowActivities() {
      var root = document.getElementById('organizationTable').getElementsByTagName('tbody')[0];
      var rows = root.getElementsByTagName('tr');
      var clone = cloneElActivity(rows[rows.length - 1]);
      cleanUpInputsActivity(clone);
      root.appendChild(clone);
    }
    function addColumnActivity() {
      var rows = document.getElementById('organizationTable').getElementsByTagName('tr'), i = 0, r, c, clone;
        while (r = rows[i++]) {
          c = r.getElementsByTagName('td');
          clone = cloneElActivity(c[c.length - 1]);
          cleanUpInputsActivity(clone);
          c[0].parentNode.appendChild(clone);
        }
    }
    function cloneElActivity(el) {
      var clo = el.cloneNode(true);
      return clo;
    }

    function cleanUpInputsActivity(obj) {
      for (var i = 0; n = obj.childNodes[i]; ++i) {
        if (n.childNodes && n.tagName != 'INPUT') {
          cleanUpInputsActivity(n);
        } else if (n.tagName == 'INPUT' && n.type == 'text') {
          n.value = '';
        }
      }  
    }

    function addRowExperience() {
      var root = document.getElementById('workExperienceTable').getElementsByTagName('tbody')[0];
      var rows = root.getElementsByTagName('tr');
      var clone = cloneElExperience(rows[rows.length - 1]);
      cleanUpInputsExperience(clone);
      root.appendChild(clone);
    }
    function addColumnExperience() {
      var rows = document.getElementById('workExperienceTable').getElementsByTagName('tr'), i = 0, r, c, clone;
        while (r = rows[i++]) {
          c = r.getElementsByTagName('td');
          clone = cloneElExperience(c[c.length - 1]);
          cleanUpInputsExperience(clone);
          c[0].parentNode.appendChild(clone);
        }
    }
    function cloneElExperience(el) {
      var clo = el.cloneNode(true);
      return clo;
    }

    function cleanUpInputsExperience(obj) {
      for (var i = 0; n = obj.childNodes[i]; ++i) {
        if (n.childNodes && n.tagName != 'INPUT') {
          cleanUpInputsExperience(n);
        } else if (n.tagName == 'INPUT' && n.type == 'text') {
          n.value = '';
        }
      }  
    }
</script>