@extends('nes.layout.navbar')

@section('content')
<div class="main-content-inner">
<!-- tab start -->
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-password-tab" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password" aria-selected="false">Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show-active" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Change Password') }}</div>

                                <form action="{{ route('update-password') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
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

                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-success">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">{{ __('Change Password') }}</div>

                                <form action="{{ route('update-password') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
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

                                </div>

                                <div class="card-footer">
                                    <button class="btn btn-success">Submit</button>
                                </div>

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