<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ !empty($title) ? $title : __('dashboard.dashboard') }}</title>
    <link rel="shortcut icon" href="{{asset('dashboard_files/dist/img/logo.png')}}" type="image/x-icon">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="{{asset('dashboard_files')}}/dist/css/adminlte.min.css">

    <!-- Noty -->
    <link rel="stylesheet" href="{{asset('dashboard_files/plugins')}}/noty/noty.min.css">
    <script src="{{asset('dashboard_files')}}/plugins/noty/noty.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Source%20Sans%20Pro%3A300%2C400%2C400i%2C700">
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{asset('dashboard_files/dist/css')}}/style.css">


    @stack('styles')

    <style>
        aside {
            overflow-x: hidden;

        }

        .main-sidebar .sidebar {
            overflow-y: scroll;
            width: 270px;
            overflow-x: hidden;
        }

        #def-table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #def-table td,
        #def-table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #def-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #def-table tr:hover {
            background-color: #ddd;
        }

        #def-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #5E2D9B;
            color: white;
        }
    </style>
</head>
