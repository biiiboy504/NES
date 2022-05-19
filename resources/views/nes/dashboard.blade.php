@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
<div class="row">
        <div class="col-lg-7">
            <div class="row">
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-user"></i> CSS 144</div>
                                <h2>{{$studentCount}}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg2">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-book"></i> CCS 244</div>
                                <h2>{{$courseCount}}</h2>
                            </div>
                            <canvas id="seolinechart2" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-book"></i>ELP</div>
                                <h2>{{$courseCount}}</h2>
                            </div>
                            <canvas id="seolinechart3" height="50"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mb-3">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-book"></i>2D ANIMATION</div>
                                <h2>{{$courseCount}}</h2>
                            </div>
                            <canvas id="seolinechart4" height="50"></canvas>
                        </div>
                    </div>
                </div>
            
           
            
@endsection()

