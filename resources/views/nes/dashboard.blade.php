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
                                <h2>2,315</h2>
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
                                            <th>Name</th>
                                            <th>Section</th>
                                            <th>Date added</th>
                                            <th>Student No.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Jhon Mark del Rosario</td>
                                            <td>BSIT 4-B</td>

                                            <td>2008/11/28</td>
                                            <td>12-c0682</td>
                                        </tr>
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
                                            <th>Department</th>
                                            <th>Date added</th>
                                            <th>Students Enrolled.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BSIT</td>
                                            <td>CCS</td>
                                            <td>2008/11/28</td>
                                            <td>107</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-full mt-5">
                <div class="card-body">
                    <h4 class="header-title">Advertising & Marketing</h4>
                    <canvas id="seolinecharts" height="233"></canvas>
                     {{$test}}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection()