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
                                <h4 class="header-title">Login/Logout</h4>    
                            </div>
                        </div>
                    </div>
                    

                    <table id="dataTable1" class="table table-bordered table-hover text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Id</th>
                                <th>User ID</th>
                                <th>Last Login At</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($logs as $log)
                        <tr>
                            <td>{{$log->id}}</td>
                            <td>{{$log->username}}</td>
                            <td>{{$log->last_login_at}}</td>
                            <td>{{$log->created_at}}</td>
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