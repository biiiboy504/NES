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
            <div class="card-body view-body">
                <div class="row">
                    <div class="col-12">
                    <h1 class="view-subtitle">PERSONAL INFORMATION</h1>
                    </div>
                    <div class="col-12 view-label">
                        <label>Name of Trainee:</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="last_name" class="view-textbox" value="{{$student_data->last_name}}">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="first_name" class="view-textbox" value="{{$student_data->first_name}}">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="middle_name" class="view-textbox" value="{{$student_data->middle_name}}">
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
                        <input type="text" name="address" class="view-textbox2" value="{{$student_data->address}}">
                    </div>
                    <div class="col-sm-2">
                        <label class="view-label">Zip Code:</label>
                        <input type="text" name="zip_code" class="view-textbox2" value="{{$student_data->zip_code}}">
                    </div>
                    <div class="col-sm-8">
                        <label class="view-label2">Contact Number (Mobile):</label>
                        <input type="text" id="contact" name="contact_num" class="view-textbox3" style="width:78.5%;" value="{{$student_data->contact_num}}">
                    </div>
                    <div class="col-sm-4">
                        <label class="view-label2">Landline:</label>
                        <input type="text" name="landline" class="view-textbox3" style="width:83%;"  value="{{$student_data->landline}}">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection()