@extends('layouts.dashboard.app', ['title' => __('dashboard.create').' '.__('dashboard.onboarding')])

@section('content')

<div class="card card-primary mt-5">
    @include('partials._errors')


    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title mt-2"><i class="fa fa-map-marker mr-1"></i> {{ __('dashboard.new_onboarding') }}</h3>
            <a href="{{ url()->previous() }}" class="btn {{ __('dashboard.lang') == 'en' ? 'btn-default text-dark': 'back-btn-ar'}}">
                <i class="fas fa-arrow-left mr-2"></i> {{ __('dashboard.back') }}
            </a>
        </div>
    </div> <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ route('dashboard.settings.onboarding.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="message_en" class="required">{{ __('dashboard.message_en') }}</label>
                        <textarea name="message_en" class="form-control" id="message_en">{{ old('message_en') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="message_ar" class="required">{{ __('dashboard.message_ar') }}</label>
                        <textarea name="message_ar" class="form-control" id="message_ar">{{ old('message_ar') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="ordering" class="required">{{ __('dashboard.ordering') }}</label>
                        <input type="number" name="ordering" value="{{ $count }}" class="form-control" id="ordering">
                    </div>
                </div>
            </div>
            <div class="row">
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
            </div>
            <button type="submit" class="btn btn-primary text-uppercase font-weight-bold">{{ __('dashboard.save') }}</button>
        </div>
        <!-- /.card-body -->
    </form>
</div>

@endsection
