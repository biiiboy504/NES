@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-lg-10 mx-auto mt-5">
        <div class="card text-white mb-3" style="background-color:#8A2BE2;">
            <!-- Card Header -->
            <div class="card-header">
                <div class="text-center">
                    <h3>Course List</h3>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white" style="color:#8A2BE2;">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:1in;">ID</th>
                                <th class="text-center" style="width:2in;">Course Name</th>
                                <th class="text-center" style="width:auto;">Description</th>
                                <th class="text-center" style="width:1.5in;">No. of Students</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>


        </div>
    </div>

</div>
@endsection()