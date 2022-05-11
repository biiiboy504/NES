@extends('nes.layout.navbar')

@section('content')

    <!-- Modal -info -->
<div class="container">
<div id="modal-3" class="modal" data-modal-effect="slide-top">
  <div class="modal-content">
    <h2 class="fs-title">Score Index</h2>
    <h3 class="fs-subtitle">Getting the most out of your data</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis consectetur ligula. Morbi dapibus tellus a ipsum sollicitudin aliquet. Phasellus id est lacus. Pellentesque a elementum velit, a tempor nulla. Mauris mauris lectus, tincidunt et purus rhoncus, eleifend convallis turpis. Nunc ullamcorper bibendum diam, vitae tempus dolor hendrerit iaculis. Phasellus tellus elit, feugiat vel mi et, euismod varius augue. Nulla a porttitor sapien. Donec vestibulum ac nisl sed bibendum. Praesent neque ipsum, commodo eget venenatis vel, tempus sit amet ante. Curabitur vel odio eget urna dapibus imperdiet sit amet eget felis. Vestibulum eros velit, posuere a metus eget, aliquam euismod purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
    <input type="button" name="next" class="next action-button modal-close" value="Got it!">
  </div>
</div>
</div>

<form class="steps" accept-charset="UTF-8" enctype="multipart/form-data" novalidate="">
  <ul id="progressbar">
    <li class="active">Personal Information</li>
    <li>Family Background</li>
    <li>Educational Background</li>
    <li>Cultivation2</li>
    <li>Retention</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    <h2 class="fs-title">Personal Information</h2>
    <h2 class="fs-subtitle"></h2>
    <!-- Begin What's Your First Name Field -->
        <div class="row">
            <div class="col-lg">
                <div class="card">
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
                </form>
            </div>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
    <!-- End What's Your First Name Field -->

    <!-- End Total Number of Constituents in Your Database Field -->
    <input type="button" data-page="1" name="next" class="next action-button" value="Next" />
  </fieldset>
    


  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    
        <!-- End Calc of Total Number of Donors Fields -->
    <input type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    
        <!-- End Average Gift Size Perchent Change Field -->
    <input type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="3" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation2 FIELD SET --> 
  <fieldset>
    
    <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input type="button" data-page="4" name="next" class="next action-button" value="Next" />

  </fieldset>



  <!-- RETENTION FIELD SET -->  
  <fieldset>
    
    <input type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">

</fieldset>

@endsection()