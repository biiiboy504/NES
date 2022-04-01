@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-lg-10 mx-auto mt-5">
        <div class="card text-white mb-3" style="background-color:#8A2BE2;">
            <!-- Card Header -->
            <div class="card-header">
                <div class="float-left mt-2">
                    <h3>Course List</h3>
                </div>
                <div class="float-right">
                    <a href="/courses/create" style="font-weight:700; color:#8A2BE2;" class="btn btn-light">Add
                        Course</a>
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
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->course_name}}</td>
                                <td>{{$course->description}}</td>
                                <td>test</td>
                                <td>
                                    <form action="/courses/{{$course->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
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
@endsection()