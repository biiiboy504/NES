@extends('nes.layout.navbar')

@section('content')

<!-- multistep form -->
<form id="msform">
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
    <h3 class="fs-subtitle">Step 1</h3>
        <div class="row">
            <div class="col-4">
                <label for=""><b>Firstname:</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="first_name" value="{{$student_data->first_name}}" class="form-control mb-4" placeholder="Firstname . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Middlename:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="middle_name" value="{{$student_data->middle_name}}" class="form-control mb-4" placeholder="Middlename . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Lastname:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="last_name" value="{{$student_data->last_name}}" class="form-control mb-4" placeholder="Lastname . . .">
                    </div>
                    <div class="col-8">
                        <label for=""><b>Complete Address:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="address" value="{{$student_data->address}}" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Zip Code:</b></label>
                        <input type="text" name="zip_code" value="{{$student_data->zip_code}}" class="form-control mb-4" placeholder="Zip Code . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('contact_num') }}</div>
                        <input type="text" name="contact_num" value="{{$student_data->contact_num}}" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="landline" value="{{$student_data->landline}}" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                    <div class="col-4">
                        <label for="">Civil Status:</label>
                        <select class="form-control form-control-lg mb-3" value="{{$student_data->civil_status}}" name="civil_status">
                        <option value="">---Select Civil Status---</option>
                        <option {{$student_data->civil_status == 'Married' ? 'selected': ' '}}>Married</option>
                        <option {{$student_data->civil_status == 'Single' ? 'selected': ' '}}>Single</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for=""><b>Gender:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('gender') }}</div>
                        <select class="form-control form-control-lg mb-4" value="{{$student_data->gender}}" name="gender">
                        <option value="">-Select Gender-</option>
                        <option {{$student_data->civil_status == 'Male' ? 'selected': ' '}}>Male</option>
                        <option {{$student_data->civil_status == 'Female' ? 'selected': ' '}}>Female</option>
                        </select>  
                    </div>
                    <div class="col-3">
                        <label for=""><b>Height (in):</b></label>
                        <input type="text" name="height" value="{{$student_data->height}}" class="form-control mb-4" placeholder="Height . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Weight (kg)</b>:</label>
                        <input type="text" name="weight" value="{{$student_data->weight}}" class="form-control mb-4" placeholder="Weight . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Citizenship:</b></label>
                        <input type="text" name="citizenship" value="{{$student_data->citizenship}}" class="form-control mb-4" placeholder="Citizenship . . .">
                    </div>
                    <div class="col-7">
                        <label for=""><b>Birth Place:</b></label>
                        <input type="text" name="birth_place" value="{{$student_data->birth_place}}" class="form-control mb-4" placeholder="Birth Place . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Birthdate:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('birth_date') }}</div>
                        <input type="date" name="birth_date" value="{{$student_data->birth_date}}" class="form-control mb-4">
                    </div>
                    <div class="col-2 ">
                        <label for=""><b>Age:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('age') }}</div>
                        <input type="number" name="age" value="{{$student_data->age}}" class="form-control mb-4" placeholder="Age . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Batch No.</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('batch_num') }}</div>
                        <input type="number" name="batch_num" value="{{$student_data->batch_num}}" class="form-control mb-4">
                    </div>
                </div>  
    <input style="float:right;" type="button" name="next" value="{{$student_data->post_grad}}" class="next action-button" value="Next" />
  </fieldset>

<!------------------------------- END of Personal Information ---------------------------->





<!------------------------------- START of Family Background ---------------------------->
<fieldset>
  <h1 class="fs-title">Update Family Background</h1>
    <h3 class="fs-subtitle">Step 2</h3>
        <div class="row pt-2 px-4 mb-2">
            <div class="col-4">
                <label for=""><b>Father's Name:</b></label>
                    <input type="text" name="f_name" value="{{$student_data->f_name}}" class="form-control mb-4" placeholder="Father's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="f_occupation" value="{{$student_data->f_occupation}}" class="form-control mb-4" placeholder="Father's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="f_income" value="{{$student_data->f_income}}" class="form-control mb-4" placeholder="Father's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Mother's Name:</b></label>
                    <input type="text" name="m_name" value="{{$student_data->m_name}}" class="form-control mb-4" placeholder="Mother's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="m_occupation" value="{{$student_data->m_occupation}}" class="form-control mb-4" placeholder="Mother's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="m_income" value="{{$student_data->m_income}}" class="form-control mb-4" placeholder="Mother's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Guardian's Name:</b></label>
                    <input type="text" name="g_name" value="{{$student_data->g_name}}" class="form-control mb-4" placeholder="Guardian's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="g_occupation" value="{{$student_data->g_occupation}}" class="form-control mb-4" placeholder="Guardian's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="g_income" value="{{$student_data->g_income}}" class="form-control mb-4" placeholder="Guardian's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Spouse Name:</b></label>
                    <input type="text" name="s_name" value="{{$student_data->s_name}}" class="form-control mb-4" placeholder="Spouse Name. . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <input type="text" name="s_occupation" value="{{$student_data->s_occupation}}" class="form-control mb-4" placeholder="Spouse Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <input type="text" name="s_income" value="{{$student_data->s_income}}" class="form-control mb-4" placeholder="Spouse Monthly Income . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Address of Parents/Guardian/Spouse:</b></label>
                        <input type="text" name="f_address" value="{{$student_data->f_address}}" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <input type="text" name="f_contact" value="{{$student_data->f_contact}}" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="f_landline" value="{{$student_data->f_landline}}" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                </div>
                <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 
  </fieldset>



  
<!------------------------------- END of Family Background ---------------------------->




<!------------------------------- START of EMERGENCY CONTACT ---------------------------->

<fieldset>
    <h1 class="fs-title">Update EMERGENCY CONTACT</h1>
    <h3 class="fs-subtitle">Step 3</h3>
        <div class="row">
        <div class="col-12">
                <label for="" style="font-size: 16px;" class="content-cent"><b>IN CASE OF EMERGENCY, PLEASE CONTACT:</b></label>
                <input type="text" name="e_name" value="{{$student_data->e_name}}" class="form-control mb-4" placeholder="Name. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Address:</b></label>
                <input type="text" name="e_address" value="{{$student_data->e_address}}" class="form-control mb-4" placeholder="Address. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Contact No.:</b></label>
                <input type="text" name="e_contact" value="{{$student_data->e_contact}}" class="form-control mb-4" placeholder="Contact Number . . .">
            </div>
            <div class="col-12">
                <label for=""><b>Email Address:</b></label>
                <input type="email" name="e_email" value="{{$student_data->e_email}}" class="form-control mb-4" placeholder="Email Address. . .">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 

</fieldset>




<!------------------------------- END of EMERGENCY CONTACT ---------------------------->






<!------------------------------- Start of Educational Background ------------------------------->

  <fieldset>
    <h2 class="fs-title">Update Educational Background</h2>
    <h3 class="fs-subtitle">Step 4</h3>
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
                    <input type="text" name="elem_name" value="{{$student_data->elem_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="elem_date" value="{{$student_data->elem_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">High School:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="hs_name" value="{{$student_data->hs_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="hs_date" value="{{$student_data->hs_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Vocational:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="voc_name" value="{{$student_data->voc_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="voc_date" value="{{$student_data->voc_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">College:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="college_name" value="{{$student_data->college_name}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="college_date" value="{{$student_data->college_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-5">
                    <label for="">Course/Degree:</label>
                    <input type="text" name="course" value="{{$student_data->course}}" class="form-control mb-3">
                </div>
                <div class="col-7">
                    <label for="">No. of units Completed (for Undergraduate):</label>
                    <input type="text" name="units" value="{{$student_data->units}}" class="form-control mb-3" >
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Post Graduate:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="post_grad" value="{{$student_data->post_grad}}" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="post_date" value="{{$student_data->post_date}}" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;" type="button" name="previous" class="previous action-button" value="Previous" />
  </fieldset>

<!------------------------------- END of Educational Background ------------------------------->







    <!-------------------------------------- START of Activities and Hobbies ---------------------------------->
  <fieldset>
    <h2 class="fs-title">Update Activities</h2>
    <h3 class="fs-subtitle">Step 5</h3>
        <div>
            <label for="" class="mt-4" style="font-size: 16px;"><b>ACTIVITIES: School and Community Organizations</b></label>
        </div>
        <div class="row my-4">
            <div class="col-5" style="text-align: center; ">
                    <label for="" ><b>Name of Organization</b></label>
                </div>
                <div class="col-5" style="text-align: center; ">
                    <label for=""><b>Possition Held</b></label>
                </div>
                <div class="col-2" style="text-align: center; " >
                    <label for="" ><b>Date</b></label>
                </div>
                <div class="col-5">
                    <input type="text" name="name_1" value="{{$student_data->name_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-5">
                    <input type="text" name="position_1" value="{{$student_data->position_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_1" value="{{$student_data->date_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-5">
                    <input type="text" name="name_2" value="{{$student_data->name_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-5">
                    <input type="text" name="position_2" value="{{$student_data->position_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_2" value="{{$student_data->date_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-5">
                    <input type="text" name="name_3" value="{{$student_data->name_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-5">
                    <input type="text" name="position_3" value="{{$student_data->position_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_3" value="{{$student_data->date_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-5">
                    <input type="text" name="name_4" value="{{$student_data->name_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-5">
                    <input type="text" name="position_4" value="{{$student_data->position_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_4" value="{{$student_data->date_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-5">
                    <input type="text" name="name_5" value="{{$student_data->name_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
                <div class="col-5">
                    <input type="text" name="position_5" value="{{$student_data->position_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_5" value="{{$student_data->date_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
        
            
  </fieldset>


<!---------------------------------- END of Activities and Hobbies -------------------------->







<!---------------------------------- START of  Hobbies -------------------------->




<fieldset>
    <h2 class="fs-title">Update Hobbies</h2>
    <h3 class="fs-subtitle">Step 6</h3>
        <div class="row">
                    <div>
                        <label class= "mt-4 ml-2" style="font-size: 16px;"><b>HOBBIES AND LEISURE TIME ACTIVITIES: Do you enjoy/engage in:</b></label>
                    </div>
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="{{$student_data->movies}}" name="movies"><label for="checkboxOne">Movies</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="{{$student_data->c_games}}" name="c_games"><label for="checkboxTwo">Computer Games</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="{{$student_data->singing}}" name="singing"><label for="checkboxThree">Singing</label></li>
                        <li><input type="checkbox" id="checkboxFour" value="{{$student_data->dancing}}" name="dancing"><label for="checkboxFour">Dancing</label></li>
                        <li><input type="checkbox" id="checkboxFive" value="{{$student_data->parties}}" name="parties"><label for="checkboxFive">Parties</label></li>
                        <li><input type="checkbox" id="checkboxSix" value="{{$student_data->a_drink}}" name="a_drink"><label for="checkboxSix">Alcoholic Drinks</label></li>
                        <li><input type="checkbox" id="checkboxSeven" value="{{$student_data->fb_net}}" name="fb_net"><label for="checkboxSeven">Facebook/Internet</label></li>
                        <li><input type="checkbox" id="checkboxEight" value="{{$student_data->sports}}" name="sports"><label for="checkboxEight">Sports</label></li>
                        <li><input type="checkbox" id="checkboxNine" value="{{$student_data->traveling}}" name="traveling"><label for="checkboxNine">Traveling</label></li>
                        <li><input type="checkbox" id="checkboxTen" value="{{$student_data->reading}}" name="reading"><label for="checkboxTen">Reading</label></li>
                        <li><input type="checkbox" id="checkboxEleven" value="{{$student_data->speaking}}" name="speaking"><label for="checkboxEleven">Speaking</label></li>
                        <li><input type="checkbox" id="checkboxTwelve" value="{{$student_data->cooking}}" name="cooking"><label for="checkboxTwelve">Cooking</label></li>
                        <li><input type="checkbox" id="checkboxThirteen" value="{{$student_data->writing}}" name="writing"><label for="checkboxThirteen">Writing</label></li>
                        <li><input type="checkbox" id="checkboxFourteen" value="{{$student_data->painting}}" name="painting"><label for="checkboxFourteen">Painting</label></li>
                        <li><input type="checkbox" id="checkboxFifteen" value="{{$student_data->photography}}" name="photography"><label for="checkboxFifteen">Photography</label></li>
                        <li><input type="checkbox" id="checkboxSixteen" value="{{$student_data->cycling}}" name="cycling"><label for="checkboxSixteen">Cycling</label></li>
                        <li><input type="checkbox" id="checkboxSeventeen" value="{{$student_data->hiking}}" name="hiking"><label for="checkboxSeventeen">Hiking</label></li>
                        <li><input type="checkbox" id="checkboxEighteen"value="{{$student_data->shopping}}" name="shopping"><label for="checkboxEighteen">Shopping</label></li>
                        <li><input type="checkbox" id="checkboxNineteen" value="{{$student_data->v_editing}}" name="v_editing"><label for="checkboxNineteen">Video Editing</label></li>
                        <li><input type="checkbox" id="checkboxTwenty" value="{{$student_data->c_programming}}" name="c_programming"><label for="checkboxTwenty">Computer Programming</label></li>
                    </ul>
                        <div class="col-12 mt-3">
                            <label for=""><b>Others (Please Specify):</b></label>
                            <input type="text" name="o_hobbies" value="{{$student_data->o_hobbies}}" class="form-control mb-4" placeholder="Other Hobbies . . .">
                        </div>
                </div>
                    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
</fieldset>




<!---------------------------------- END of Hobbies -------------------------->






<!---------------------------------- START of Health Contdition -------------------------->
  <fieldset>
    <h2 class="fs-title">Update Health Condition</h2>
    <h3 class="fs-subtitle">Step 7</h3>
        <div class="row">
            <div>
                <label class= "mt-4 ml-2 mr-5" style="font-size: 16px;"><b>HEALTH CONDITION: Do you have a handicap / difficulty in:</b></label>
                <div class="ml-5">
                <ul class="ks-cboxtags">
                    <li><input type="checkbox" id="h_checkboxOne" name="physical" value="{{$student_data->physical}}"><label for="h_checkboxOne">Physical handicap </label></li>
                    <li><input type="checkbox" id="h_checkboxTwo" name="hearing" value="{{$student_data->hearing}}"><label for="h_checkboxTwo">Hearing</label></li>
                    <li><input type="checkbox" id="h_checkboxThree" name="eyesight" value="{{$student_data->eyesight}}"><label for="h_checkboxThree">Eyesight </label></li>
                    <li><input type="checkbox" id="h_checkboxFour" name="speaking" value="{{$student_data->speaking}}"><label for="h_checkboxFour">Speaking</label></li>
                    <li><input type="checkbox" id="h_checkboxFive" name="mental" value="{{$student_data->mental}}"><label for="h_checkboxFive">Mental handicap</label></li>
                </ul>
                </div>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Do you have any serious accident or sickness?:</b></label>
                <input type="text" name="o_sickness" value="{{$student_data->o_sickness}}" class="form-control mb-4" placeholder="">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
        
  </fieldset>

<!------------------------------------------ END of Health Conditions ------------------------------------>






<!------------------------------------------ START of Work Experiences ------------------------------------>

  <fieldset>
    <h2 class="fs-title">Update Work Experiences</h2>
    <h3 class="fs-subtitle">Step 8</h3>
        <div class="row my-4">
            <div class="col-4" style="text-align: center; ">
                    <label for="" ><b>Nature of Work/Position</b></label>
                </div>
                <div class="col-4" style="text-align: center; ">
                    <label for=""><b>Name of Company</b></label>
                </div>
                <div class="col-2" style="text-align: center; " >
                    <label for="" ><b>Date Of Employment</b></label>
                </div>
                <div class="col-2" style="text-align: center; " >
                    <label for="" ><b>Monthly Earnings</b></label>
                </div>
                <div class="col-4">
                    <input type="text" name="cposition_1" value="{{$student_data->cposition_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cname_1" value="{{$student_data->cname_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_1" value="{{$student_data->date_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-2">
                    <input type="text" name="earnings_1" value="{{$student_data->earnings_1}}" class="form-control mb-3"  placeholder="1. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cposition_2" value="{{$student_data->cposition_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cname_2" value="{{$student_data->cname_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_2" value="{{$student_data->date_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-2">
                    <input type="text" name="earnings_2" value="{{$student_data->earnings_2}}" class="form-control mb-3"  placeholder="2. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cposition_3" value="{{$student_data->cposition_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cname_3" value="{{$student_data->cname_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_3" value="{{$student_data->date_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-2">
                    <input type="text" name="earnings_3" value="{{$student_data->earnings_3}}" class="form-control mb-3"  placeholder="3. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cposition_4" value="{{$student_data->cposition_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cname_4" value="{{$student_data->cname_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_4" value="{{$student_data->date_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-2">
                    <input type="text" name="earnings_4" value="{{$student_data->earnings_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cposition_4" value="{{$student_data->cposition_4}}" class="form-control mb-3"  placeholder="4. ">
                </div>
                <div class="col-4">
                    <input type="text" name="cname_5" value="{{$student_data->cname_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
                <div class="col-2">
                    <input type="text" name="date_5" value="{{$student_data->date_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
                <div class="col-2">
                    <input type="text" name="earnings_5" value="{{$student_data->earnings_5}}" class="form-control mb-3"  placeholder="5. ">
                </div>
                <div class="col-12 mt-3">
                            <label for=""><b>Others WORK EXPERIENCE:</b></label>
                            <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                            <input type="text" name="o_work" value="{{$student_data->o_work}}" class="form-control mb-4" placeholder="Other Work Experience . . .">
                        </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
    
  </fieldset>



<!---------------------------------------END of Work Experiences and Future Plans --------------------------------------->


<!--------------------------------------- START of Future Plans --------------------------------------->

  <fieldset>
    <h2 class="fs-title">Update Future plans</h2>
    <h3 class="fs-subtitle">Step 9</h3>
        <div class="row">
            <div class="col-12 mt-3">
                <label for=""><b>Course that I am taking in is the choice of:</b></label>
                <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="f_checkboxOne" name="own" value="{{$student_data->own}}"><label for="f_checkboxOne">My Own </label></li>
                        <li><input type="checkbox" id="f_checkboxTwo" name="parents" value="{{$student_data->parents}}"><label for="f_checkboxTwo">My Parents</label></li>
                        <li><input type="checkbox" id="f_checkboxThree" name="peers" value="{{$student_data->peers}}"><label for="f_checkboxThree">My Peers </label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Occupations interested to engage in:</b></label>
                <input type="text" name="f_interest" value="{{$student_data->f_interest}}" class="form-control mb-4" placeholder="">
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulations by any court or tribunal?:</b></label>
                <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="f_checkboxFour" name="yes" value="{{$student_data->yes}}"><label for="f_checkboxFour">YES </label></li>
                        <li><input type="checkbox" id="f_checkboxFive" name="no" value="{{$student_data->no}}"><label for="f_checkboxFive">NO</label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>If your answer is "YES" give details of the offense:</b></label>
                <input type="text" name="f_offense" value="{{$student_data->f_offense}}" class="form-control mb-4" placeholder="">
            </div>
        </div>
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />

  </fieldset>

<!---------------------------------------END of Future Plans   --------------------------------------->



  <!--------------------------------------- START of Review --------------------------------------->

  <fieldset>
    <h2 class="fs-title" style="font-size: 40px;">Review!</h2>
    <h3 class="fs-subtitle">Step 10</h3>


    <h2 class="fs-subtitle" style="font-size: 20px;">Click Previous to review encoded data.</h2>

    <input style="float:right;"  type="submit" name="submit" class="submit action-button" value="Submit" />
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />

  </fieldset>



  <!--------------------------------------- END of Review --------------------------------------->
</form>


@endsection()