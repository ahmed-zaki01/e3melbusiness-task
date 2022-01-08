@extends('layouts.dashboard.app', ['title' => 'Courses'])

@push('styles')
<!-- Datatables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" integrity="sha256-yjHTqiNk8qNywdntR3vitxhS59Opi7kkdsGe/mcCSkg= sha384-XVHNoSVVnIfu4RRRsj+h8t6p+8o+eq87kb7Abav9bxpX9nNibXFocxhyLbi8/g1U sha512-ryjtnwPDaox3otqxhS/cCqCQCE7/mfHbfbfu+87WdRnn5bHxtTqti5q+TWnNUI3MHwABP98M01mT+7Ocqwk55g==" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" integrity="sha256-pkQIEVTMKPhqRv84Eia4cOsCgfGQoULkd2/wQtpdPaQ= sha384-fLjV7+NsaSQaq7wwf6edFdZ6lMzlSnar+Ml+XRqKeh5Yc4tALeExKBmzG1z4BEne sha512-SnfMfCQIQCT3DNJs0f6TCES+nz0iHF4EOQrBLPiRzvxCOZwMl/dtwRpPu7ZrJwINo5KixIBqPtm4y//Z2CX83g==" crossorigin="anonymous">
@endpush

@push('scripts')

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" integrity="sha256-yRyQT7++H8thxOTLlVs16OswPynZep91fHRPxmA6l4o= sha384-XnTxmviuqUy3cHBf+lkYWuTSDlhxCDxd9RgSo5zvzsCq93P9xNa6eENuAITCwxNh sha512-Yblu1vNh895IOJ7j81oA+g0K/Rjv09fbssEw/I7EhszcLxJRp59fe4SUBsBP/6sdJHEGSZAglqyhO1TeYHhyKw==" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" integrity="sha256-twePKUMIUbAzQl/iWsajdvr2dDTbtgoJ3iaTFz1ggwY= sha384-gMFHVk6/lyFoVtwQ8fRAxgFjBvGf3yLZ5d+bi4yLD5lx3HeHrfTcU4T92bwBHeif sha512-o3Ww93iIRaMiIccuoADDXAVmQhJT2HHOzkYeWxO9/HLgFmDUV2XNNNG+sLFD4dxZMdXSi4LgJX2S9dyoeEWULQ==" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js" integrity="sha256-ZiSVH0esRXGWapwwSJhiUlfTpxjmb5JbOF6+a8jLJEo= sha384-aY1IbPFSddYc1wRRxaLBRYz3GJtWcBQWGXS+c/Bxx0mZsYGy7RHUIp3QB2SS5sFV sha512-chtDEzABfUxE908iQCiijwkO5QaXV+RZOtDGp1aJ8w696JTmAQn8zaAqVMYuatjLH1KJPHbE/JSgdtM4xX8oww==" crossorigin="anonymous"></script>
<script src="{{asset('dashboard_files')}}/plugins/datatables/buttons.server-side.js"></script>
<script src="{{asset('dashboard_files')}}/dist/js/datatables.js"></script>

{!! $dataTable->scripts() !!}
@endpush

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Courses</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Courses</li>
                </ol>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="card-header">
    <div class="d-flex justify-content-between align-items-center">

        <h3 class="card-title">Courses Table</h3>

        <a href="{{route('dashboard.courses.create')}}" class="btn btn-primary px-4">
            <i class="fa fa-plus"></i> Add
        </a>
    </div>
    <!-- /.row -->
</div>

<!-- parking table -->
<div class="card">

    <!-- /.card-header -->
    <div class="card-body">

        {!! $dataTable->table(['class' => 'dataTable table table-hover table-bordered', 'responsive' => 'true'], true)
        !!}
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">

    </div>
</div>

@endsection
