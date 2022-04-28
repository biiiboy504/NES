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
                                <a href="/add_student_1" class="btn text-light" type="button" style="background-color: #8A2BE2;">Add Student</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <table id="dataTable1" class="table table-bordered table-hover text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->middle_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->course}}</td>                                    
                                
                                <td>
                                    <form action="/studentlist/{{$student->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group" role="group">
                                        <button class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this Student?');"><i class="fa fa-trash"></i></button>
                                        <!-- <a href="/update_student/{{$student->id}}" class="btn btn-info">Update</a> -->
                                        <a href="/update_student/{{$student->id}}" class="btn btn-info btn-xs" ><i class="fa fa-pencil"></i> </a>
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