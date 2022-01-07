@extends('layouts.dashboard.app', ['title' => 'Create Category'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-map-marker mr-1"></i> New Category</h3>
            <a href="{{ url()->previous() }}" class="btn btn-default text-dark">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.categories.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name" class="required">Name:</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label class="mr-4 required">Active:</label>
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="enabled" name="active" value="1" checked>
                            <label for="enabled">Yes</label>
                        </div>
                        <div class="icheck-danger ml-2 d-inline">
                            <input type="radio" id="disabled" name="active" value="0">
                            <label for="disabled">No</label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="image" class="required"> {{ __('dashboard.image') }}</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input img-input" id="image">
                                <label class="custom-file-label" for="image">{{ __('dashboard.choose_file') }}</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2 d-none img-preview-container">
                        <img src style="height: 100px;" class="img-thumbnail img-preview" alt="onboarding image">
                    </div>
                </div>
            </div> --}}
            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Save</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
