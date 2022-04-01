@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-12 mt-5">
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
                <div class="data-tables table-responsive">
                    <table id="dataTable" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Course Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">No. of Students</th>
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
                                    <div class="btn-group" role="group" aria-label="...">
                                        <a href="/courses/{{$course->id}}" class="btn btn-info">Update</a>
                                        <form action="/courses/{{$course->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
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
@endsection()