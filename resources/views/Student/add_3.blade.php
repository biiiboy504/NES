@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
        <div class="row mt-5 mb-5">
            <div class="col-lg mx-auto">
                <div class="card">
                    <div class="card-header text-dark py-3" style="background-color: #66ff99; text-weight: 700;">
                        <h4>Personal Information</h4>
                    </div>
                    <form action="/create_student" method="POST">
                        @csrf
                        <div class="card-body">
                        <div class="row">
                                <div class="col-4">
                                        <label for="">Firstname:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('first_name') }}</div>
                                        <input type="text" name="first_name" class="form-control mb-3" placeholder="Firstname . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Middlename:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('middle_name') }}</div>
                                        <input type="text" name="middle_name" class="form-control mb-3" placeholder="Middlename . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Lastname:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('last_name') }}</div>
                                        <input type="text" name="last_name" class="form-control mb-3" placeholder="Lastname . . .">
                                    </div>
                                    <div class="col-8">
                                        <label for="">Complete Address:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('address') }}</div>
                                        <input type="text" name="address" class="form-control mb-3" placeholder="Complete Address . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Zip code:</label>
                                        <input type="text" name="zip_code" class="form-control mb-3" placeholder="Zip Code . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Contact Number (Mobile):</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('contact_num') }}</div>
                                        <input type="text" name="contact_num" class="form-control mb-3" placeholder="Mobile Number . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">(Landline):</label>
                                        <input type="text" name="landline" class="form-control mb-3" placeholder="Landline Number . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Civil Status:</label>
                                        <select class="form-control form-control-lg mb-3" name="civil_status">
                                        <option value="">---Select Civil Status---</option>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Gender:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('gender') }}</div>
                                        <select class="form-control form-control-lg mb-3" name="gender">
                                        <option value="">-Select Gender-</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        </select>  
                                    </div>
                                    <div class="col-3">
                                        <label for="">Height (in):</label>
                                        <input type="text" name="height" class="form-control mb-3" placeholder="Height . . .">
                                    </div>
                                      <div class="col-3">
                                        <label for="">Weight (kg):</label>
                                        <input type="text" name="weight" class="form-control mb-3" placeholder="Weight . . .">
                                    </div>
                                    <div class="col-3">
                                        <label for="">Citizenship:</label>
                                        <input type="text" name="citizenship" class="form-control mb-3" placeholder="Citizenship . . .">
                                    </div>
                                    <div class="col-7">
                                        <label for="">Birth Place:</label>
                                        <input type="text" name="birth_place" class="form-control mb-3" placeholder="Birth Place . . .">
                                    </div>
                                    <div class="col-3">
                                        <label for="">Birthdate:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('birth_date') }}</div>
                                        <input type="date" name="birth_date" class="form-control mb-3">
                                    </div>
                                    <div class="col-2 ">
                                        <label for="">Age:</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('age') }}</div>
                                        <input type="number" name="age" class="form-control" placeholder="Age . . .">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Batch No.</label>
                                        <div class="alert-danger pl-2">{{ $errors->first('batch_num') }}</div>
                                        <input type="number" name="batch_num" class="form-control">
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card-footer" style="background-color: #66ff99;" >
                                <a href="/studentlist" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn" style="float:right; background-color: #FF66CC;">Next</button>
                        </div>
                </form>
            </div>
        </div>
</div>


@endsection()