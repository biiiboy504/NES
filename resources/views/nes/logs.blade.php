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
                                <h4 class="header-title">Activity Log</h4>    
                            </div>
                        </div>
                    </div>
                    
                    
                    <table id="dataTable1" class="table table-bordered table-hover text-center">
                        <thead class="bg-light text-capitalize">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Event</th>
                                <th>IP Address</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()