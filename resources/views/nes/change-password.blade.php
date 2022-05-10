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
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="ti-lock"></i> Password</a>
                    </li>
                    
                </ul> -->
                <!-- <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h5 class="mt-4">{{ __('Change Contact') }}</h5>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-8">
                                <form action="{{ route('update-password') }}" method="POST">
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
                    </div> -->
                    <div>
                        <h5 class="mt-2">{{ __('Change Password') }}</h5>

                        <div class="row justify-content-center mt-4">
                            <div class="col-md-8">
                                <form action="{{ route('update-password') }}" method="POST">
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
                                            <label for="oldPasswordInput" class="form-label">Old Password</label>
                                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput" placeholder="Old Password">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                    <div class="mb-3">
                                        <label for="newPasswordInput" class="form-label">New Password</label>
                                        <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                            placeholder="New Password">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                            placeholder="Confirm New Password">
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