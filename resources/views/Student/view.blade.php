@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
        <div class="row mt-5 mb-5">
            <div class="col-lg mx-auto">
                <div class="card">
                    <div class="card-header" style="background-color: #8A2BE2;">
                        <h4 class="text-light">View Student Personal Information</h4>
                    </div>

                    @if(Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    <form action="/view/{{$student_data->id}}" method="GET">
                        @csrf
                        <div class="card-body">
                        <div>
                        <input type="hidden" value="{{$student_data->id}}" name="studentId">
                        </div>
                        <div class="row">
                                <div class="col-4">
                                        <label for="">Firstname:</label>
                                        <input type="text" value="{{$student_data->first_name}}" name="first_name" class="form-control mb-3" placeholder="Firstname . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Middlename:</label>
                                        <input type="text" value="{{$student_data->middle_name}}" name="middle_name" class="form-control mb-3" placeholder="Middlename . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Lastname:</label>
                                        <input type="text" value="{{$student_data->last_name}}" name="last_name" class="form-control mb-3" placeholder="Lastname . . ." readonly>
                                    </div>
                                    <div class="col-8">
                                        <label for="">Complete Address:</label>
                                        <input type="text" value="{{$student_data->address}}" name="address" class="form-control mb-3" placeholder="Complete Address . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Zip code:</label>
                                        <input type="text" value="{{$student_data->zip_code}}" name="zip_code" class="form-control mb-3" placeholder="Zip Code . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Contact Number (Mobile):</label>
                                        <input type="text" value="{{$student_data->contact_num}}" name="contact_num" class="form-control mb-3" placeholder="Mobile Number . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">(Landline):</label>
                                        <input type="text" value="{{$student_data->landline}}" name="landline" class="form-control mb-3" placeholder="Landline Number . . ." readonly>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Civil Status:</label>
                                        <select class="form-control form-control-lg mb-3" value="{{$student_data->civil_status}}" name="civil_status" disabled>
                                        <option value="">---Select Civil Status---</option>
                                        <option {{$student_data->civil_status == 'Married' ? 'selected': ' '}}>Married</option>
                                        <option {{$student_data->civil_status == 'Single' ? 'selected': ' '}}>Single</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Gender:</label>
                                        <select class="form-control form-control-lg mb-3" value="{{$student_data->gender}}" name="gender" disabled>
                                        <option value="">-Select Gender-</option>
                                        <option {{$student_data->gender == 'Male' ? 'selected': ' '}}>Male</option>
                                        <option {{$student_data->gender == 'Female' ? 'selected': ' '}}>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Height (in):</label>
                                        <input type="text" value="{{$student_data->height}}" name="height" class="form-control mb-3" placeholder="Height . . ." readonly>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Weight (kg):</label>
                                        <input type="text" value="{{$student_data->weight}}" name="weight" class="form-control mb-3" placeholder="Weight . . ." readonly>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Citizenship:</label>
                                        <input type="text" value="{{$student_data->citizenship}}" name="citizenship" class="form-control mb-3" placeholder="Citizenship . . ." readonly>
                                    </div>
                                    <div class="col-7">
                                        <label for="">Birth Place:</label>
                                        <input type="text" value="{{$student_data->birth_place}}" name="birth_place" class="form-control mb-3" placeholder="Birth Place . . ." readonly>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Birthdate:</label>
                                        <input type="date" value="{{$student_data->birth_date}}" name="birth_date" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2 ">
                                        <label for="">Age:</label>
                                        <input type="number" value="{{$student_data->age}}" name="age" class="form-control mb-3" placeholder="Age . . ." readonly>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Batch No.</label>
                                        <input type="number" value="{{$student_data->batch_num}}" name="batch_num" class="form-control mb-3" readonly>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card-footer cfooter">
                                <a href="/studentlist" class="btn btn-secondary">Back</a>
                                <a href="/view_2/{{$student_data->id}}" class="btn btn-success" style="float:right;">Next</a>
                        </div>
                </form>
            </div>
        </div>
</div>


@endsection()