@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-lg-10 mx-auto mt-5">
        <div class="card mb-3" style="background-color:#ffffff;">
            <!-- Card Header -->
            <div class="card-header" style="background-color:#ffffff;">
                <div class="float-left mt-2">
                    <h3>Add Course</h3>
                </div>
                <div class="float-right">
                    <a href="/courses" style="font-weight:700;" class="btn btn-secondary">Go to List</a>
                </div>
            </div>
            <!-- Card Body -->
            <form action="/courses" method="POST">
                @csrf
                <div class="card-body bg-white" style="color:#8A2BE2;">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="course_name">Course Name</label>
                            <input type="text" id="course_name" name="course_name" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control">
                        </div>
                    </div>
                    <div class="container d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-success mt-3 mb-3"
                            style="font-weight: 500; font-size: 15px;">Submit</button>
                    </div>
                </div>
            </form>


        </div>
    </div>

</div>
@endsection()