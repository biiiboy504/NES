@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-12 mt-5">
        <div class="card">
            <!-- Card Body -->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <h4 class="header-title">Course List</h4>
                        </div>
                        <div class="float-right mb-3">
                            <a href="/courses/create" class="action-button" type="button">Add Course</a>
                        </div>
                    </div>
                </div>
                <table id="dataTable3" class="table table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Course Name</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->course_name}}</td>
                            <td>{{$course->description}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">

                                    <form action="/courses/{{$course->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                            <a href="/courses/{{$course->id}}" class="btn btn-info btn-xs"><i
                                                    class="fa fa-pencil"></i> </a>
                                        </div>
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
@endsection()

@section('scripts')
<script>
$(function() {
    $("#dataTable3").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["csv", "pdf", "print", "colvis"],
        "bDestroy": true
    }).buttons().container().appendTo('#dataTable3_wrapper .col-md-6:eq(0)');
});
</script>
@endsection()