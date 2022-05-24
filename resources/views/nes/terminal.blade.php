@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">

    <div class="col-12 mt-5">
        <div class="card">
            <!-- Card Body -->
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="float-left">
                        <h4 class="header-title">Enrollment Report</h4>
                    </div>
                </div>
            </div>
            <table id="dataTable3" class="table table-bordered table-hover text-center">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Family/Last Name</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Middle Name</th>
                        <th class="text-center">Contact Number</th>
                        <th class="text-center">Complete Permanent Mailing Address</th>
                        <th class="text-center">Sex</th>
                        <th class="text-center">Birth Place</th>
                        <th class="text-center">Date of Birth</th>
                        <th class="text-center">Age</th>
                        <th class="text-center">Civil Status</th>
                        <th class="text-center">Nationality</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->middle_name}}</td>
                        <td>{{$student->contact_num}}</td>
                        <td>{{$student->address}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->birth_place}}</td>
                        <td>{{$student->birth_date}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->civil_status}}</td>
                        <td>{{$student->citizenship}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

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