@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
        <div class="row mt-5 mb-5">
            <div class="col-lg mx-auto">
                <div class="card">
                    <div class="card-header" style="background-color: #1F3363;">
                        <h4 class="text-light">Personal Information</h4>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                        <div class="row">
                                <div class="col-4">
                                        <label for="">Firstname:</label>
                                        <input type="text" name="firs_tname" class="form-control mb-3" placeholder="Firstname . . ." required>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Middlename:</label>
                                        <input type="text" name="middle_name" class="form-control mb-3" placeholder="Middlename . . ." required>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Lastname:</label>
                                        <input type="text" name="last_name" class="form-control mb-3" placeholder="Lastname . . ." required>
                                    </div>
                                    <div class="col-8">
                                        <label for="">Complete Address:</label>
                                        <input type="text" name="address" class="form-control mb-3" placeholder="Complete Address . . ." required>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Zip code:</label>
                                        <input type="text" name="zip_code" class="form-control mb-3" placeholder="Zip Code . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Contact Number (Mobile):</label>
                                        <input type="text" name="contact_num" class="form-control mb-3" placeholder="Mobile Number . . ." required>
                                    </div>
                                    <div class="col-4">
                                        <label for="">(Landline):</label>
                                        <input type="text" name="landline" class="form-control mb-3" placeholder="Landline Number . . .">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Civil Status:</label>
                                        <select class="form-control form-control-lg mb-3" name="civil_status" required>
                                        <option>---Select Civil Status---</option>
                                        <option>Married</option>
                                        <option>Single</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <label for="">Gender:</label>
                                        <select class="form-control form-control-lg mb-3" name="gender" required>
                                        <option>-Select Gender-</option>
                                        <option>Male</option>
                                        <option>Female</option>
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
                                        <input type="date" name="birth_date" class="form-control mb-3">
                                    </div>
                                    <div class="col-2 ">
                                        <label for="">Age:</label>
                                        <input type="number" name="age" class="form-control mb-3" placeholder="Age . . .">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Batch No.</label>
                                        <input type="number" name="batch_num" class="form-control mb-3">
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card-footer cfooter">
                                <a href="" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-success" style="float:right;">Next</button>
                        </div>
                </form>
            </div>
        </div>
</div>


@endsection()