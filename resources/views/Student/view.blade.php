@extends('nes.layout.navbar')

@section('content')
    <div class="main-content-inner">
        <div class="row dataSheet">
            <div class="col-10">
                <h1 class="view-title">PERSONAL DATA SHEET</h1>
            </div>
            <div class="col-2">
                <button class="view-button fa fa-pencil">  Edit</button>
                <button class="view-button fa fa-print">    Print</button>
            </div>
            <form>
                <div class="card-body view-body">
                    <div class="row">
                        <div class="col-12">
                        <h1 class="view-subtitle">PERSONAL INFORMATION</h1>
                        </div>
                        <div class="col-12 view-label">
                            <label>Name of Trainee:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="last_name" class="view-textbox" value="{{$student_data->last_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="first_name" class="view-textbox" value="{{$student_data->first_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="middle_name" class="view-textbox" value="{{$student_data->middle_name}}" readonly>
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
                            <input type="text" name="address" class="view-textbox2" value="{{$student_data->address}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label">Zip Code:</label>
                            <input type="text" name="zip_code" class="view-textbox2" value="{{$student_data->zip_code}}" readonly>
                        </div>
                        <div class="col-sm-8">
                            <label class="view-label2">Contact Number (Mobile):</label>
                            <input type="text" name="contact_num" class="view-textbox3" style="width:78.5%;" value="{{$student_data->contact_num}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">(Landline)</label>
                            <input type="text" name="landline" class="view-textbox3" style="width:84%;"  value="{{$student_data->landline}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Civil Status:</label>
                            <input type="text" name="civil_status" class="view-textbox3" style="width:80%;"  value="{{$student_data->civil_status}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Sex:</label>
                            <input type="text" name="gender" class="view-textbox3" style="width:86%;"  value="{{$student_data->gender}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Height(ft):</label>
                            <input type="text" name="height" class="view-textbox3" style="width:65%;"  value="{{$student_data->height}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Weight(kg):</label>
                            <input type="text" name="weight" class="view-textbox3" style="width:60%;"  value="{{$student_data->weight}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Date of Birth:</label>
                            <input type="text" name="birth_date" class="view-textbox3" style="width:77%;"  value="{{$student_data->birth_date}}" readonly>
                        </div>
                        <div class="col-sm-2">
                            <label class="view-label2">Age:</label>
                            <input type="text" name="age" class="view-textbox3" style="width:50%;"  value="{{$student_data->age}}" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label2">Birth Place:</label>
                            <input type="text" name="birth_place" class="view-textbox3" style="width:75%;"  value="{{$student_data->birth_place}}" readonly>
                        </div>
                        <div class="col-sm-3">
                            <label class="view-label2">Citezenship:</label>
                            <input type="text" name="citizenship" class="view-textbox3" style="width:74%;"  value="{{$student_data->citizenship}}" readonly>
                        </div>
                        <div class="col-12 mt-5">
                            <h1 class="view-subtitle">FAMILY BACKGROUND</h1>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Father's Name:</label>
                            <input type="text" name="f_name" class="view-textbox3" style="width:74%;" value="{{$student_data->father_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="f_occupation" class="view-textbox3" style="width:74%;" value="{{$student_data->father_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="f_income" class="view-textbox3" style="width:68%;" value="{{$student_data->father_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Mother's Name:</label>
                            <input type="text" name="m_name" class="view-textbox3" style="width:74%;" value="{{$student_data->mother_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="m_occupation" class="view-textbox3" style="width:74%;" value="{{$student_data->mother_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="m_income" class="view-textbox3" style="width:68%;" value="{{$student_data->mother_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Guardian's Name:</label>
                            <input type="text" name="g_name" class="view-textbox3" style="width:70%;" value="{{$student_data->guardian_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="g_occupation" class="view-textbox3" style="width:74%;" value="{{$student_data->guardian_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="g_income" class="view-textbox3" style="width:68%;" value="{{$student_data->guardian_income}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Spouse Name:</label>
                            <input type="text" name="s_name" class="view-textbox3" style="width:74%;" value="{{$student_data->spouse_name}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Occupation:</label>
                            <input type="text" name="s_occupation" class="view-textbox3" style="width:74%;" value="{{$student_data->spouse_occupation}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">Ave. Monthly Income:</label>
                            <input type="text" name="s_income" class="view-textbox3" style="width:68%;" value="{{$student_data->spouse_income}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2">Address of Parents/Guardian/Spouse:</label>
                            <input type="text" name="f_address" class="view-textbox3" style="width:82.8%;" value="{{$student_data->guardian_address}}" readonly>
                        </div>
                        <div class="col-sm-8">
                            <label class="view-label2">Contact Number (Mobile):</label>
                            <input type="text" name="f_contact" class="view-textbox3" style="width:78.5%;" value="{{$student_data->mobile_no}}" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label class="view-label2">(Landline)</label>
                            <input type="text" name="f_landline" class="view-textbox3" style="width:84%;"  value="{{$student_data->landline}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2" style="font-size: 14px;"><b>In case of emergency, please contact:</b></label>
                            <input type="text" name="e_name" class="view-textbox3" style="width: 80%;" value="{{$student_data->emergency_name}}" readonly>
                        </div>
                        <div class="col-sm-7">
                            <label class="view-label2">Address:</label>
                            <input type="text"  name="e_address" class="view-textbox3" style="width:85%;" value="{{$student_data->emergency_address}}" readonly>
                        </div>
                        <div class="col-sm-5">
                            <label class="view-label2">Contact No.:</label>
                            <input type="text" name="e_contact" class="view-textbox3" style="width:85%;"  value="{{$student_data->emergency_contact}}" readonly>
                        </div>
                        <div class="col-sm-12">
                            <label class="view-label2">Email Address:</label>
                            <input type="text" name="e_email" class="view-textbox3" style="width:92.5%;" value="{{$student_data->emergency_email}}" readonly>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
    </div>


@endsection()