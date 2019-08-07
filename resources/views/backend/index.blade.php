@extends('backend.layouts.app')
@section('title')
    Services List |  {{config('app.name', 'BlogFolio')}}
@stop
@section('ownCSS')

@stop
@section('cssFile')

@stop
@section('content')
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Services List</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">services-list</li>
        </ul>
    </div>
    <!-- Page Content Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header mb-0">
                    <a class="btn btn-success btn-sm text-white">
                        <i class="fa fa-check-circle"></i> Active (10)
                    </a>
                    <a class="btn btn-info btn-sm text-white">
                        <i class="fa fa-tag"></i> Draft (5)
                    </a>
                    <a class="btn btn-danger btn-sm text-white">
                        <i class="fa fa-times-circle"></i> Inactive (3)
                    </a>
                </div>
                <div class="card-body mt-0">

                </div>
            </div>
        </div>
    </section>
@stop
@section('jsFile')

@stop
@section('ownJS')

@stop