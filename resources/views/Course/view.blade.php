@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-lg-10 mx-auto mt-5">
        <div class="card text-white mb-3" style="background-color:#8A2BE2;">
            <!-- Card Header -->
            <div class="card-header">
                <div class="float-left mt-2">
                    <h3>View Course</h3>
                </div>
                <div class="float-right">
                    <a href="/courses" style="font-weight:700; color:#8A2BE2;" class="btn btn-light">Go to List</a>
                </div>
            </div>
            <!-- Card Body -->
            <form action="" method="POST">
                @csrf
                <div class="card-body bg-white" style="color:#8A2BE2;">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" value="{{$courses->id}}" id="id" name="id" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="course_name">Course Name</label>
                            <input type="text" value="{{$courses->course_name}}" id="course_name" name="course_name"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" value="{{$courses->description}}" id="description" name="description"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="no_of_students">No. of Students</label>
                            <input type="text" value="test" id="no_of_students" name="no_of_students"
                                class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>
@endsection()