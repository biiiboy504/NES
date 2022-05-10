@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
<!-- tab start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ti-info"></i> Contact</a>
                    </li>                
                </ul> -->
                <div class>
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h5 class="mt-2">{{ __('Change Contact') }}</h5>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-8">
                                <form action="{{ route('update-contact') }}" method="POST">
                                    @csrf
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @elseif (session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                            @endif

                                        <div class="mb-3">
                                            <label for="newContactInput" class="form-label">New Contact No.</label>
                                            <input name="new_contact" type="contact" class="form-control @error('new_contact') is-invalid @enderror" id="newContactInput"placeholder="Contact No.">
                                        @error('new_contact') 
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="newEmailInput" class="form-label">New Email Address</label>
                                            <input name="new_email" type="email" class="form-control @error('new_email') is-invalid @enderror" id="newEmailInput"placeholder="Email Address">
                                        @error('new_email') 
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    <button class="btn btn-success">Submit</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()