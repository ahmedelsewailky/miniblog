@extends('layouts.dashboard')
@section('title', 'Create user')
@section('breadcrumbs')
    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"> <a href="{{ route('users.index') }}">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Create new user</li>
@endsection
@section('content')
<div class="card mb-3">
    <div class="card-header main-color-bg">
        Create new user</span>
    </div>
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <!-- Username -->
                <div class="form-group mb-3 col-md-12">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="ex: john, peter_parker">
                </div>

                <!-- E-Mail -->
                <div class="form-group mb-3 col-md-12">
                    <label class="form-label">E-Mail Address</label>
                    <input type="email" class="form-control" placeholder="ex: peter@email.com">
                </div>

                <!-- Password -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Minimum length for password is 8 charcters">
                </div>

                <!-- Confirm Password -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm password">
                </div>

                <!-- Mobile -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" placeholder="ex: 012-34 56 78 9">
                </div>

                <!-- Address -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="ex: Egypt, Cairo">
                </div>

                <!-- Role -->
                <div class="form-group mb-3 col-md-5">
                    <label class="form-label">Role</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="0">--Selecte Role--</option>
                        <option value="1">Owner</option>
                        <option value="2">Admin</option>
                        <option value="3">Post Creator</option>
                    </select>
                </div>

                <!-- Salary -->
                <div class="form-group mb-3 col-md-5">
                    <label class="form-label">Salary</label>
                    <input type="text" class="form-control" placeholder="ex: 4020 EGP">
                </div>

                <!-- First Name -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="ex: Peter">
                </div>

                <!-- Last Name -->
                <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="ex: Parker">
                </div>

                <!-- Image Avatar -->
                <div class="form-group mb-3 col-md-8">
                    <label class="form-label">Profile Image</label>
                    <input type="file" class="form-control" placeholder="Upload Image">
                </div>

                <!-- Image Avatar Preview -->
                <div class="form-group mb-3 col-md-4 text-end">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" alt="user profile image" width="120" height="120">
                </div>

                <!-- User Resume -->
                <div class="form-group mb-3 col-md-12">
                    <label class="form-label">User BIO</label>
                    <textarea name="editor1" class="form-control" placeholder="Write a brief description of the new user">
                            
                    </textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa save"></i> Save</button>
        </form>
    </div>
</div>
@stop
