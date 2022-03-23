@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
    <div class="row">
     <!-- basic table start -->
        <div class="col-lg-10 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Student List </h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Middle Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Student No.</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()