@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
    <div class="col-lg-10 mx-auto mt-5">
        <div class="card text-white mb-3" style="background-color:#8A2BE2;">
            <!-- Card Header -->
            <div class="card-header">
                <div class="text-center">
                    <h3>User Activity</h3>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white" style="color:#8A2BE2;">
                <div class="table-responsive">
                <table id="dataTable" class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Event</th>
                                <th>Old values</th>
                                <th>New values</th>
                                <th>URL</th>
                                <th>IP Address</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                    </table>  
                </div>
            </div>


        </div>
    </div>
</div>
@endsection()