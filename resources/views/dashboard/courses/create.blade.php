@extends('layouts.dashboard.app', ['title' => 'Create Course'])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-map-marker mr-1"></i> New Course</h3>
            <a href="{{ url()->previous() }}" class="btn btn-default text-dark">
                <i class="fas fa-arrow-left mr-2"></i> Back
            </a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="category" class="required">Category:</label>
                        <select name="category_id" id="category" class="custom-select">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name" class="required">Name:</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="hours" class="required">Hours:</label>
                        <input type="number" name="hours" value="{{ old('hours') }}" class="form-control" id="hours">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="level" class="required">Level:</label>
                        <select name="level" id="level" class="custom-select">
                            <option selected disabled>Select a level</option>
                            <option value="beginner">beginner</option>
                            <option value="intermediate">intermediate</option>
                            <option value="high">high</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="description" class="required">Description:</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="4" placeholder="Enter a description..."></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="image" class="required">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input img-input" id="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-2 d-none img-preview-container">
                        <img src style="height: 100px;" class="img-thumbnail img-preview" alt="course image">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
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


            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">Save</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
