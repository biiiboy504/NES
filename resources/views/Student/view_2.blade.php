@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
        <div class="row mt-5 mb-5">
            <div class="col-lg mx-auto">
                <div class="card">
                    <div class="card-header" style="background-color: #2B2B68;">
                        <h4 class="text-light">Educational Background</h4>
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

                    <form action="/view_2/{{$student_data->id}}" method="GET">
                        @csrf
                        <div class="card-body">
                        <div>
                        <input type="hidden" value="{{$student_data->students_id}}" name="studentId">
                        </div>
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
                                        <input type="text" name="elem_name"  value="{{$student_data->elem_name}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="elem_date"  value="{{$student_data->elem_date}}" class="form-control mb-3" placeholder="Month & Year/Year" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label for="" style="float: right;">High School:</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="hs_name"  value="{{$student_data->hs_name}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="hs_date"  value="{{$student_data->hs_date}}" class="form-control mb-3" placeholder="Month & Year/Year" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label for="" style="float: right;">Vocational:</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="voc_name"  value="{{$student_data->voc_name}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="voc_date"  value="{{$student_data->voc_date}}" class="form-control mb-3" placeholder="Month & Year/Year" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label for="" style="float: right;">College:</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="college_name"  value="{{$student_data->college_name}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="college_date"  value="{{$student_data->college_date}}" class="form-control mb-3" placeholder="Month & Year/Year" readonly>
                                    </div>
                                    <div class="col-5">
                                        <label for="">Course/Degree:</label>
                                        <input type="text" name="course"  value="{{$student_data->course}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-7">
                                        <label for="">No. of units Completed (for Undergraduate):</label>
                                        <input type="text" name="units"  value="{{$student_data->units}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <label for="" style="float: right;">Post Graduate:</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" name="post_grad"  value="{{$student_data->post_grad}}" class="form-control mb-3" readonly>
                                    </div>
                                    <div class="col-2">
                                        <input type="text" name="post_date"  value="{{$student_data->post_date}}" class="form-control mb-3" placeholder="Month & Year/Year" readonly>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card-footer">
                                <a href="/view/{{$student_data->id}}" class="btn btn-secondary">Back</a>
                        </div>
                </form>
            </div>
        </div>
</div>


@endsection()