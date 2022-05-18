@extends('nes.layout.navbar')

@section('content')

<!-- multistep form -->
<form id="msform" action="/create_student" method="POST">
    @csrf
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Information</li>
    <li>Family Background</li>
    <li>In case of Emergency</li>
    <li>Educational Background</li>
    <li>Activities</li>
    <li>Hobbies</li>
    <li>Health Condition</li>
    <li>Work Experiences</li>
    <li>Future Plans</li>
    <li>Review</li>
  </ul>

  <!------------------------ START of Personal Information --------------------->

  <fieldset>
    <h1 class="fs-title">Personal Information</h1>
    <h3 class="fs-subtitle">Step 1</h3>
        <div class="row">
            <div class="col-4">
                <label for=""><b>Firstname:</b></label>
                    <div class="alert-danger pl-2"></div>
                    <input type="text" name="first_name" class="form-control mb-4" placeholder="Firstname . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Middlename:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="middle_name" class="form-control mb-4" placeholder="Middlename . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Lastname:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="last_name" class="form-control mb-4" placeholder="Lastname . . .">
                    </div>
                    <div class="col-8">
                        <label for=""><b>Complete Address:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="address" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Zip Code:</b></label>
                        <input type="text" name="zip_code" class="form-control mb-4" placeholder="Zip Code . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="contact_num" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="landline" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Civil Status:</b></label>
                        <select class="form-control form-control-lg mb-4" name="civil_status">
                        <option value="">---Select Civil Status---</option>
                        <option value="Married">Married</option>
                        <option value="Single">Single</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for=""><b>Gender:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <select class="form-control form-control-lg mb-4" name="gender">
                        <option value="">-Select Gender-</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>  
                    </div>
                    <div class="col-3">
                        <label for=""><b>Height (in):</b></label>
                        <input type="text" name="height" class="form-control mb-4" placeholder="Height . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Weight (kg)</b>:</label>
                        <input type="text" name="weight" class="form-control mb-4" placeholder="Weight . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Citizenship:</b></label>
                        <input type="text" name="citizenship" class="form-control mb-4" placeholder="Citizenship . . .">
                    </div>
                    <div class="col-7">
                        <label for=""><b>Birth Place:</b></label>
                        <input type="text" name="birth_place" class="form-control mb-4" placeholder="Birth Place . . .">
                    </div>
                    <div class="col-3">
                        <label for=""><b>Birthdate:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="date" name="birth_date" class="form-control mb-4">
                    </div>
                    <div class="col-2 ">
                        <label for=""><b>Age:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="number" name="age" class="form-control mb-4" placeholder="Age . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Batch No.</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="number" name="batch_num" class="form-control mb-4">
                    </div>
                </div>  
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next" />
  </fieldset>

<!------------------------------- END of Personal Information ---------------------------->





<!------------------------------- START of Family Background ---------------------------->
<fieldset>
  <h1 class="fs-title">Family Background</h1>
    <h3 class="fs-subtitle">Step 2</h3>
        <div class="row pt-2 px-4 mb-2">
            <div class="col-4">
                <label for=""><b>Father's Name:</b></label>
                    <div class="alert-danger pl-2"></div>
                    <input type="text" name="f_name" class="form-control mb-4" placeholder="Father's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="f_occupation" class="form-control mb-4" placeholder="Father's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="f_income" class="form-control mb-4" placeholder="Father's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Mother's Name:</b></label>
                    <div class="alert-danger pl-2"></div>
                    <input type="text" name="m_name" class="form-control mb-4" placeholder="Mother's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="m_occupation" class="form-control mb-4" placeholder="Mother's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="m_income" class="form-control mb-4" placeholder="Mother's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Guardian's Name:</b></label>
                    <div class="alert-danger pl-2"></div>
                    <input type="text" name="g_name" class="form-control mb-4" placeholder="Guardian's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="g_occupation" class="form-control mb-4" placeholder="Guardian's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="g_income" class="form-control mb-4" placeholder="Guardian's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Spouse Name:</b></label>
                    <div class="alert-danger pl-2"></div>
                    <input type="text" name="s_name" class="form-control mb-4" placeholder="Spouse Name. . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="s_occupation" class="form-control mb-4" placeholder="Spouse Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="s_income" class="form-control mb-4" placeholder="Spouse Monthly Income . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Address of Parents/Guardian/Spouse:</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="f_address" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <div class="alert-danger pl-2"></div>
                        <input type="text" name="f_contact" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="f_landline" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                </div>
                <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 
  </fieldset>



  
<!------------------------------- END of Family Background ---------------------------->




<!------------------------------- START of EMERGENCY CONTACT ---------------------------->

<fieldset>
    <h1 class="fs-title">EMERGENCY CONTACT</h1>
    <h3 class="fs-subtitle">Step 3</h3>
        <div class="row">
        <div class="col-12">
                <label for="" style="font-size: 16px;" class="content-cent"><b>IN CASE OF EMERGENCY, PLEASE CONTACT:</b></label>
                <div class="alert-danger pl-2"></div>
                <input type="text" name="e_name" class="form-control mb-4" placeholder="Name. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Address:</b></label>
                <div class="alert-danger pl-2"></div>
                <input type="text" name="e_address" class="form-control mb-4" placeholder="Address. . .">
            </div>
            <div class="col-6">
                <label for=""><b>Contact No.:</b></label>
                <div class="alert-danger pl-2"></div>
                <input type="text" name="e_contact" class="form-control mb-4" placeholder="Contact Number . . .">
            </div>
            <div class="col-12">
                <label for=""><b>Email Address:</b></label>
                <div class="alert-danger pl-2"></div>
                <input type="email" name="e_email" class="form-control mb-4" placeholder="Email Address. . .">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 

</fieldset>




<!------------------------------- END of EMERGENCY CONTACT ---------------------------->






<!------------------------------- Start of Educational Background ------------------------------->

  <fieldset>
    <h2 class="fs-title">Educational Background</h2>
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
                    <input type="text" name="elem_name" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="elem_date" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">High School:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="hs_name" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="hs_date" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Vocational:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="voc_name" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="voc_date" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">College:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="college_name" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="college_date" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
                <div class="col-5">
                    <label for="">Course/Degree:</label>
                    <input type="text" name="course" class="form-control mb-3">
                </div>
                <div class="col-7">
                    <label for="">No. of units Completed (for Undergraduate):</label>
                    <input type="text" name="units" class="form-control mb-3" >
                </div>
                <div class="col-2">
                    <label for="" style="float: right;">Post Graduate:</label>
                </div>
                <div class="col-8">
                    <input type="text" name="post_grad" class="form-control mb-3">
                </div>
                <div class="col-2">
                    <input type="text" name="post_date" class="form-control mb-3" placeholder="Month & Year/Year">
                </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;" type="button" name="previous" class="previous action-button" value="Previous" />
  </fieldset>

<!------------------------------- END of Educational Background ------------------------------->







    <!-------------------------------------- START of Activities and Hobbies ---------------------------------->
  <fieldset>
    <h2 class="fs-title">Activities</h2>
    <h3 class="fs-subtitle">Step 5</h3>
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
                <tr>
                <td>
                    <input type="text" class="form-control" id="inputName5" name="nameOfOrganization[]">
                </td>
                <td>
                    <input type="text" class="form-control" id="inputName5" name="positionHeld[]">
                </td>
                <td>
                    <input type="date" class="form-control" id="inputName5" name="activityDate[]">
                </td>
                </tr>
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


<!---------------------------------- END of Activities and Hobbies -------------------------->







<!---------------------------------- START of  Hobbies -------------------------->




    <fieldset>
    <h2 class="fs-title">Hobbies</h2>
    <h3 class="fs-subtitle">Step 6</h3>
        <div class="row">
                    <div>
                        <label class= "mt-4 ml-2" style="font-size: 16px;"><b>HOBBIES AND LEISURE TIME ACTIVITIES: Do you enjoy/engage in:</b></label>
                    </div>
                    <ul class="ks-cboxtags">
                        <li><input type="checkbox" id="checkboxOne" value="Movies" name="hobbies[]"><label for="checkboxOne">Movies</label></li>
                        <li><input type="checkbox" id="checkboxTwo" value="Computer Games" name="hobbies[]"><label for="checkboxTwo">Computer Games</label></li>
                        <li><input type="checkbox" id="checkboxThree" value="Singing" name="hobbies[]"><label for="checkboxThree">Singing</label></li>
                        <li><input type="checkbox" id="checkboxFour" value="Dancing" name="hobbies[]"><label for="checkboxFour">Dancing</label></li>
                        <li><input type="checkbox" id="checkboxFive" value="Parties" name="hobbies[]"><label for="checkboxFive">Parties</label></li>
                        <li><input type="checkbox" id="checkboxSix" value="Alcoholic Drinks" name="hobbies[]"><label for="checkboxSix">Alcoholic Drinks</label></li>
                        <li><input type="checkbox" id="checkboxSeven" value="facebook/Internet" name="hobbies[]"><label for="checkboxSeven">Facebook/Internet</label></li>
                        <li><input type="checkbox" id="checkboxEight" value="Sports" name="hobbies[]"><label for="checkboxEight">Sports</label></li>
                        <li><input type="checkbox" id="checkboxNine" value="Traveling" name="hobbies[]"><label for="checkboxNine">Traveling</label></li>
                        <li><input type="checkbox" id="checkboxTen" value="Reading" name="hobbies[]"><label for="checkboxTen">Reading</label></li>
                        <li><input type="checkbox" id="checkboxEleven" value="Speaking" name="hobbies[]"><label for="checkboxEleven">Speaking</label></li>
                        <li><input type="checkbox" id="checkboxTwelve" value="Cooking" name="hobbies[]"><label for="checkboxTwelve">Cooking</label></li>
                        <li><input type="checkbox" id="checkboxThirteen" value="Writing" name="hobbies[]"><label for="checkboxThirteen">Writing</label></li>
                        <li><input type="checkbox" id="checkboxFourteen" value="Painting" name="hobbies[]"><label for="checkboxFourteen">Painting</label></li>
                        <li><input type="checkbox" id="checkboxFifteen" value="Photography" name="hobbies[]"><label for="checkboxFifteen">Photography</label></li>
                        <li><input type="checkbox" id="checkboxSixteen" value="Cycling" name="hobbies[]"><label for="checkboxSixteen">Cycling</label></li>
                        <li><input type="checkbox" id="checkboxSeventeen" value="Hiking" name="hobbies[]"><label for="checkboxSeventeen">Hiking</label></li>
                        <li><input type="checkbox" id="checkboxEighteen" value="Shopping" name="hobbies[]"><label for="checkboxEighteen">Shopping</label></li>
                        <li><input type="checkbox" id="checkboxNineteen" value="Video Editing" name="hobbies[]"><label for="checkboxNineteen">Video Editing</label></li>
                        <li><input type="checkbox" id="checkboxTwenty" value="Computer Programming" name="hobbies[]"><label for="checkboxTwenty">Computer Programming</label></li>
                    </ul>
                        <div class="col-12 mt-3">
                            <label for=""><b>Others (Please Specify):</b></label>
                            <div class="alert-danger pl-2"></div>
                            <input type="text" name="hobbies[]" class="form-control mb-4" placeholder="Other Hobbies . . .">
                        </div>
                </div>
                    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
    </fieldset>




<!---------------------------------- END of Hobbies -------------------------->






<!---------------------------------- START of Health Contdition -------------------------->
  <fieldset>
    <h2 class="fs-title">Health Condition</h2>
    <h3 class="fs-subtitle">Step 7</h3>
        <div class="row">
            <div>
                <label class= "mt-4 ml-2 mr-5" style="font-size: 16px;"><b>HEALTH CONDITION: Do you have a handicap / difficulty in:</b></label>
                <div class="ml-5">
                <ul class="ks-cboxtags">
                    <li><input type="checkbox" name="health[]"id="h_checkboxOne" value="Physical handicap "><label for="h_checkboxOne">Physical handicap </label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxTwo" value="Hearing"><label for="h_checkboxTwo">Hearing</label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxThree" value="Eyesight "><label for="h_checkboxThree">Eyesight </label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxFour" value="Speaking"><label for="h_checkboxFour">Speaking</label></li>
                    <li><input type="checkbox" name="health[]"id="h_checkboxFive" value="Mental handicap"><label for="h_checkboxFive">Mental handicap</label></li>
                </ul>
                </div>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Do you have any serious accident or sickness?:</b></label>
                <div class="alert-danger pl-2"></div>
                <input type="text" name="other_complications" class="form-control mb-4" placeholder="">
            </div>
        </div>
        <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
        <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
        
  </fieldset>

<!------------------------------------------ END of Health Conditions ------------------------------------>






<!------------------------------------------ START of Work Experiences ------------------------------------>

  <fieldset>
    <h2 class="fs-title">Work Experiences</h2>
    <h3 class="fs-subtitle">Step 8</h3>
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
                <tr>
                    <td>
                        <input type="text" class="form-control" id="inputName5" name="position[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" id="inputName5" name="nameofCompany[]">
                    </td>
                    <td>
                        <input type="date" class="form-control" id="inputName5" name="dateOfEmployment[]">
                    </td>
                    <td>
                        <input type="text" class="form-control" id="inputName5" name="monthlyEarning[]">
                    </td>
                </tr>
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
                <input class="form-control" id="otherWorkExperience" name="otherWorkExperience" type="text">
            </div>
       
    </div>
    <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
    <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
    
  </fieldset>



<!---------------------------------------END of Work Experiences and Future Plans --------------------------------------->


<!--------------------------------------- START of Future Plans --------------------------------------->

  <fieldset>
    <h2 class="fs-title">Future plans</h2>
    <h3 class="fs-subtitle">Step 9</h3>
        <div class="row">
            <div class="col-12 mt-3">
                <label for=""><b>Course that I am taking in is the choice of:</b></label>
                <ul class="ks-cboxtags">
                        <li><input name="choice[]" type="checkbox" id="f_checkboxOne" value="My Own"><label for="f_checkboxOne">My Own </label></li>
                        <li><input name="choice[]" type="checkbox" id="f_checkboxTwo" value="My Parents"><label for="f_checkboxTwo">My Parents</label></li>
                        <li><input name="choice[]" type="checkbox" id="f_checkboxThree" value="My Peers"><label for="f_checkboxThree">My Peers </label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Occupations interested to engage in:</b></label>
                <input type="text" name="f_interest" class="form-control mb-4" placeholder="">
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>Have you ever been convicted of any crime or violation of any law, degree, ordinance or regulations by any court or tribunal?:</b></label>
                <ul class="ks-cboxtags">
                        <li><input name="crime[]" type="checkbox" id="f_checkboxFour" value="Yes"><label for="f_checkboxFour">YES </label></li>
                        <li><input name="crime[]" type="checkbox" id="f_checkboxFive" value="No"><label for="f_checkboxFive">NO</label></li>
                </ul>
            </div>
            <div class="col-12 mt-3">
                <label for=""><b>If your answer is "YES" give details of the offense:</b></label>
                <input type="text" name="f_offense" class="form-control mb-4" placeholder="">
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
    
    <button style="float:right; color:#66ff99" class="btn text-light"  type="submit" >Submit</button>
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
@endsection()