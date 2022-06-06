@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-left">
                                <h4 class="header-title">Students List</h4>    
                            </div>
                            <div class="float-right mb-3">
                                <a href="/add_student_1" class="action-button" type="button">Add Student</a>
                            </div>
                        </div>
                    </div>
                    <table id="dataTable1" class="table table-bordered table-hover text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Home Address</th>
                                <th>Contact</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->contact_num}}</td>
                                <td>{{$student->course_name}}</td>                                  
                                <td>
                                    <form action="/studentlist/{{$student->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group" role="group">
                                        <a href="/view/{{$student->id}}" class="btn btn-secondary btn-xs"  data-toggle="tooltip" data-placement="top" title="VIEW"><i class="fa fa-eye"></i></a>
                                        <!-- <a href="#" class="btn btn-secondary btn-xs" ><i class="fa fa-eye"></i> </a> -->
                                        <a href="/update_student/{{$student->id}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="UPDATE"><i class="fa fa-pencil"></i> </a>
                                        <!-- <a href="#" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i> </a> -->
                                        <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this Student?');" data-toggle="tooltip" data-placement="top" title="DELETE"><i class="fa fa-trash"></i></button>
                                        <!-- <a href="/update_student/{{$student->id}}" class="btn btn-info">Update</a> -->
                                        
                                        </div>

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

@section('scripts')
<script>
    $(function () {
        $("#dataTable1").DataTable({
            "responsive": true, 
            "lengthChange": false, 
            "autoWidth": false,
            "buttons": ["csv", "pdf", "print", "colvis"],
            "bDestroy": true
        }).buttons().container().appendTo('#dataTable1_wrapper .col-md-6:eq(0)');        
    });
</script>
@endsection()