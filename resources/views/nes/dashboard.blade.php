@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
<div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-user"></i> Students</div>
                                <h2>{{$studentCount}}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-md-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-book"></i> Courses</div>
                                <h2>3,984</h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Students Table</h4>
                            <div class="data-tables datatable-primary table-responsive">
                                <table id="dataTable" class="text-center">
                                    <thead class="text-capitalize">
                                        <tr>
                                        <th>Id</th>
                                        <th>Student</th>
                                        <th>Course</th>
                                        <th>Date Added</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->first_name}} {{$student->last_name}}</td>
                                            <td>{{$student->course}}</td>                                    
                                            <td>{{$student->created_at}}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-info">Update</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Courses Table</h4>
                            <div class="data-tables datatable-primary table-responsive">
                                <table id="dataTable2" class="text-center">
                                    <thead class="bg-success text-capitalize">
                                        <tr>
                                            <th>Course</th>
                                            <th>Date added</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                        <tr>
                                            <td>{{$course->course_name}}</td>
                                            <td>{{$course->created_at}}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-info">Update</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title">Gender</h4>
                    <canvas id="genderChart" height="233"></canvas>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection()

@section('scripts')
<script>
    var male = {!! json_encode($maleCount) !!};
    var female = {!! json_encode($femaleCount) !!};
    if ($('#genderChart').length) {
        var ctx = document.getElementById("genderChart").getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'doughnut',
            // The data for our dataset
            data: {
                labels: ["Female", "Male"],
                datasets: [{
                    backgroundColor: [           
                        "#E36D68",
                        "#8919FE"
                    ],
                    borderColor: '#fff',
                    data: [ female, male],
                }]
            },
            // Configuration options go here
            options: {
                legend: {
                    display: true
                },
                animation: {
                    easing: "easeInOutBack"
                }
            }
        });
    }
</script>
@endsection()