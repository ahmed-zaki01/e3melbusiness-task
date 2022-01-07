@extends('layouts.dashboard.app', ['title' => 'Edit Profile'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-user mr-1"></i>My Profile</h3>
            <a href="{{url()->previous()}}" class="btn btn-default text-dark"><i class="fas fa-arrow-left mr-2"></i> Back</a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('dashboard.update-profile', $user->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="card-body">

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" id="name">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" name="current_password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Edit</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
