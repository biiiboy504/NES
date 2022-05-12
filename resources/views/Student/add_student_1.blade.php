@extends('nes.layout.navbar')

@section('content')

<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Information</li>
    <li>Family Background</li>
    <li>Educational Background</li>
    <li>Activities</li>
    <li>Health Condition</li>
  </ul>

  <!------------------------ START of Personal Information --------------------->

  <fieldset>
    <h1 class="fs-title">Personal Information</h1>
    <h3 class="fs-subtitle">Step 1</h3>
        <div class="row">
            <div class="col-4">
                <label for=""><b>Firstname:</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="first_name" class="form-control mb-4" placeholder="Firstname . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Middlename:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="middle_name" class="form-control mb-4" placeholder="Middlename . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Lastname:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="last_name" class="form-control mb-4" placeholder="Lastname . . .">
                    </div>
                    <div class="col-8">
                        <label for=""><b>Complete Address:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="address" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Zip Code:</b></label>
                        <input type="text" name="zip_code" class="form-control mb-4" placeholder="Zip Code . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('contact_num') }}</div>
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
                        <div class="alert-danger pl-2">{{ $errors->first('gender') }}</div>
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
                        <div class="alert-danger pl-2">{{ $errors->first('birth_date') }}</div>
                        <input type="date" name="birth_date" class="form-control mb-4">
                    </div>
                    <div class="col-2 ">
                        <label for=""><b>Age:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('age') }}</div>
                        <input type="number" name="age" class="form-control mb-4" placeholder="Age . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Batch No.</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('batch_num') }}</div>
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
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="f_name" class="form-control mb-4" placeholder="Father's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="f_occupation" class="form-control mb-4" placeholder="Father's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="f_income" class="form-control mb-4" placeholder="Father's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Mother's Name:</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="m_name" class="form-control mb-4" placeholder="Mother's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="m_occupation" class="form-control mb-4" placeholder="Mother's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="m_income" class="form-control mb-4" placeholder="Mother's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Guardian's Name:</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="g_name" class="form-control mb-4" placeholder="Guardian's Name . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="g_occupation" class="form-control mb-4" placeholder="Guardian's Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="g_income" class="form-control mb-4" placeholder="Guardian's Monthly Income . . .">
                    </div>
                    <div class="col-4">
                    <label for=""><b>Spouse Name:</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                    <input type="text" name="s_name" class="form-control mb-4" placeholder="Spouse Name. . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Occupation:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                        <input type="text" name="s_occupation" class="form-control mb-4" placeholder="Spouse Occupation . . .">
                    </div>
                    <div class="col-4">
                        <label for=""><b>Ave. Monthly Income:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                        <input type="text" name="s_income" class="form-control mb-4" placeholder="Spouse Monthly Income . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Address of Parents/Guardian/Spouse:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="f_address" class="form-control mb-4" placeholder="Complete Address . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Contact Number (Mobile)</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('contact_num') }}</div>
                        <input type="text" name="f_contact" class="form-control mb-4" placeholder="Mobile Number . . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Landline:</b></label>
                        <input type="text" name="f_landline" class="form-control mb-4" placeholder="Landline Number . . .">
                    </div>
                    <div class="col-12">
                        <label for="" style="font-size: 16px;" class="content-cent"><b>IN CASE OF EMERGENCY, PLEASE CONTACT:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="e_name" class="form-control mb-4" placeholder="Name. . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Address:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="e_address" class="form-control mb-4" placeholder="Address. . .">
                    </div>
                    <div class="col-6">
                        <label for=""><b>Contact No.:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="text" name="e_contact" class="form-control mb-4" placeholder="Contact Number . . .">
                    </div>
                    <div class="col-12">
                        <label for=""><b>Email Address:</b></label>
                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                        <input type="email" name="e_email" class="form-control mb-4" placeholder="Email Address. . .">
                    </div>
                </div>
                <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
                <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" /> 
  </fieldset>



  
<!------------------------------- END of Family Background ---------------------------->




<!------------------------------- Start of Educational Background ------------------------------->

  <fieldset>
    <h2 class="fs-title">Educational Background</h2>
    <h3 class="fs-subtitle">Step 3</h3>
        <div class="row pt-2 px-4 mb-2">
            <div class="col">
                    <label for="" class="pl-4"><b>Level</b></label>
                </div>
                <div class="col-6" style="text-align: center; ">
                    <label for=""><b>Name of School</b></label>
                </div>
                <div class="col-3" >
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







    <!-------------------------------------- START of Activities ---------------------------------->
  <fieldset>
    <h2 class="fs-title">Activities and Hobbies</h2>
    <h3 class="fs-subtitle">Step 4</h3>
        <div class="row">
            <div>
                <label class= "mt-4" style="font-size: 16px;"><b>HOBBIES AND LEISURE TIME ACTIVITIES: Do you enjoy/engage in:</b></label>
            </div>
            <ul class="ks-cboxtags">
                <li><input type="checkbox" id="checkboxOne" value="Movies"><label for="checkboxOne">Movies</label></li>
                <li><input type="checkbox" id="checkboxTwo" value="Computer Games"><label for="checkboxTwo">Computer Games</label></li>
                <li><input type="checkbox" id="checkboxThree" value="Singing"><label for="checkboxThree">Singing</label></li>
                <li><input type="checkbox" id="checkboxFour" value="Dancing"><label for="checkboxFour">Dancing</label></li>
                <li><input type="checkbox" id="checkboxFive" value="Parties"><label for="checkboxFive">Parties</label></li>
                <li><input type="checkbox" id="checkboxSix" value="Alcoholic Drinks"><label for="checkboxSix">Alcoholic Drinks</label></li>
                <li><input type="checkbox" id="checkboxSeven" value="Facebook/Internet"><label for="checkboxSeven">Facebook/Internet</label></li>
                <li><input type="checkbox" id="checkboxEight" value="Sports"><label for="checkboxEight">Sports</label></li>
                <li><input type="checkbox" id="checkboxNine" value="Traveling"><label for="checkboxNine">Traveling</label></li>
                <li><input type="checkbox" id="checkboxTen" value="Reading"><label for="checkboxTen">Reading</label></li>
                <li><input type="checkbox" id="checkboxEleven" value="Speaking"><label for="checkboxEleven">Speaking</label></li>
                <li><input type="checkbox" id="checkboxTwelve" value="Cooking"><label for="checkboxTwelve">Cooking</label></li>
                <li><input type="checkbox" id="checkboxThirteen" value="Writing"><label for="checkboxThirteen">Writing</label></li>
                <li><input type="checkbox" id="checkboxFourteen" value="Painting"><label for="checkboxFourteen">Painting</label></li>
                <li><input type="checkbox" id="checkboxFifteen" value="Photography"><label for="checkboxFifteen">Photography</label></li>
                <li><input type="checkbox" id="checkboxSixteen" value="Cycling"><label for="checkboxSixteen">Cycling</label></li>
                <li><input type="checkbox" id="checkboxSeventeen" value="Hiking"><label for="checkboxSeventeen">Hiking</label></li>
                <li><input type="checkbox" id="checkboxEighteen" value="Shopping"><label for="checkboxEighteen">Shopping</label></li>
                <li><input type="checkbox" id="checkboxNineteen" value="Video Editing"><label for="checkboxNineteen">Video Editing</label></li>
                <li><input type="checkbox" id="checkboxTwenty" value="Computer Programming"><label for="checkboxTwenty">Computer Programming</label></li>
            </ul>
                <div class="col-12 mt-3">
                    <label for=""><b>Others (Please Specify):</b></label>
                    <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                    <input type="text" name="o_hobbies" class="form-control mb-4" placeholder="Other Hobbies . . .">
                </div>
            </div>
            <input style="float:right;" type="button" name="next" class="next action-button" value="Next"/>
            <input style="float:right;"  type="button" name="previous" class="previous action-button" value="Previous" />
            
  </fieldset>


<!---------------------------------- END of Activities and Hobbies -------------------------->




<!---------------------------------- START of  -------------------------->
  <fieldset>

  <input style="float:right;"  type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
  
</form>


@endsection()