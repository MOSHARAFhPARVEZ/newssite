@extends('layouts\dashboard\dashboardmaster')

@section('content')

{{-- pages title part  --}}
<div class="col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
    </ol>
</div>
{{-- pages title part  --}}

{{-- all error part  --}}
@if($errors->all())
<div class="col-lg-12">
    <div class="alert alert-danger solid alert-dismissible fade show">
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>
</div>
@endif
{{-- all error part  --}}

{{-- all success msg --}}
{{-- Pp success msg  --}}
<div class="col-lg-12">
    @if(session('success'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{session('success')}}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
</div>
{{-- Pp success msg  --}}
{{-- cover photo success msg  --}}
<div class="col-lg-12">
    @if(session('successcover'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{session('successcover')}}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
</div>
{{-- cover photo success msg  --}}
{{-- Password Change success msg  --}}
<div class="col-lg-12">
    @if(session('successpass'))
    <div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="mr-2">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg>
        <strong>Success!</strong> {{session('successpass')}}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
</div>
{{-- Password Change success msg  --}}
{{-- all success msg --}}

{{-- profile and cover view part --}}
<div class="col-lg-12">
    <div class="profile card card-body px-3 pt-3 pb-0">
        <div class="profile-head">
            <div class="photo-content">
                <div class="cover-photo">
                    @if (auth()->user()->cover_photo)
                    <img src="{{ asset('uploads/cover_photo') }}/{{ auth()->user()->cover_photo }}"
                        class="img-fluid" alt="">
                    @else
                    <img src="{{ asset('dashboard_assets') }}/images/defaultcover.jpg"
                        class="img-fluid" alt="">
                    @endif
                </div>
            </div>
            <div class="profile-info">
                <div class="profile-photo">
                    @if (auth()->user()->profile_photo)
                    <img src="{{ asset('uploads/profile_photo') }}/{{ auth()->user()->profile_photo }}"
                        class="img-fluid rounded-circle" alt="">
                    @else
                    <img src="{{ asset('dashboard_assets') }}/images/defaultprofile.jpg"
                        class="img-fluid rounded-circle" alt="">
                    @endif
                </div>
                <div class="profile-details">
                    <div class="profile-name px-3 pt-2">
                        <h4 class="text-primary mb-0">{{ auth()->user()->name }}</h4>
                        <p>UX / UI Designer</p>
                    </div>
                    <div class="profile-email px-2 pt-2">
                        <h4 class="text-muted mb-0">{{ auth()->user()->email }}</h4>
                        <p>Email</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- profile and cover view part --}}


{{-- profile part start  --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile Photo Change</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('profilechg') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="profile_photo">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- profile part end  --}}

{{-- cover photo part start  --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Cover Photo Change</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('coverchg') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cover_photo">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- cover photo part end  --}}


{{-- password part start  --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Password Change</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('passwordchg') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Old Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Old Password" name="old_password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- password part end  --}}

@endsection
