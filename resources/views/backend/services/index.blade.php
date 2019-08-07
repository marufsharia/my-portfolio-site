@extends('backend.layouts.app')
@section('title')
    Services List |  {{config('app.name', 'BlogFolio')}}
@stop
@section('cssFile')
    <!-- DataTables CSS-->
    <link rel="stylesheet"
          href="{{asset('lib/datatables.net-bs4/css/dataTables.bootstrap4.css')}}
                  ">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet"
          href="{{asset('lib/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
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
                    <a href="{{route('services.index')}}"
                       class="btn btn-outline-dark btn-sm {{ (!isset($_GET['status']) ) ? 'active':''}}">
                        <i class="fa fa-check-circle"></i> All ({{$all_no}})
                    </a>
                    <a href="{{route('services.index',['status'=>'1'])}}"
                       class="btn btn-outline-success btn-sm
{{ (isset($_GET['status']) && (!is_null($_GET['status'])) && ($_GET['status']=='1'))  ? 'active':''}}">
                        <i class="fa fa-check-circle"></i> Active ({{$active_no}})
                    </a>
                    <a href="{{route('services.index',['status'=>'2'])}}" class="btn btn-outline-info btn-sm
                    {{ (isset($_GET['status']) && (!is_null($_GET['status'])) && ($_GET['status']=='2'))  ? 'active':''}}">
                        <i class="fa fa-tag"></i> Draft ({{$draft_no}})
                    </a>
                    <a href="{{route('services.index',['status'=>'0'])}}"
                       class="btn btn-outline-danger btn-sm {{ (isset($_GET['status']) && (!is_null($_GET['status'])) && ($_GET['status']=='0'))  ? 'active':''}}">
                        <i class="fa fa-times-circle"></i> Inactive ({{$inactive_no}})
                    </a>
                </div>
                <div class="card-body mt-0">
                    <div class="table-responsive">
                        <table id="_datatable" style="width: 100%;" class="table">
                            <thead style="border-bottom: 1px solid #ededed;">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php $count = 1;?>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td><a href="javascript:void(0)" class="text-muted">{{$service->title}}</a></td>
                                    <td><i class="{{$service->icon}} fa-2x"></i></td>
                                    <td>
                                        @if ($service->status == 2)
                                            <span class="badge badge-warning p-1 border-0 text-15">Draft</span>
                                        @elseif ($service->status == 1)
                                            <span class="badge badge-success p-1 border-0 text-15">Active</span>
                                        @elseif ($service->status == 0)
                                            <span class="badge badge-danger p-1 border-0 text-15">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{$service->created_at}}</td>
                                    <td>
                                        @if($service->status!=1)
                                            <a href="{{ route('services.edit', $service->id) }}"
                                               class="btn btn-success btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Make Active">
                                                <i class="fa fa-check-circle"></i>
                                            </a>
                                            <a href="{{ route('services.edit', $service->id) }}"
                                               class="btn btn-info btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Edit">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a href="{{ route('services.destroy', $service->id) }}"
                                               class="btn btn-danger btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        @elseif($service->status==1)
                                            <a href="{{ route('services.edit', $service->id) }}"
                                               class="btn btn-danger btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Make Inactive">
                                                <i class="fa fa-times-circle-o"></i>
                                            </a>
                                            <a href="{{ route('services.edit', $service->id) }}"
                                               class="btn btn-info btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Edit">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <button class="btn btn-danger btn-sm ml-1 disabled" data-toggle="tooltip"
                                                    data-placement="top"
                                                    title="" data-original-title="First make Inactive then delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('jsFile')
    <!-- Data Tables-->
    <script src="{{asset('lib/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('lib/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('lib/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    {{--    <script src="{{asset('js/tables-datatable.js')}}"></script>--}}
@stop

@section('ownJS')
    <script>
        $(function () {
            var e = $("#_datatable").DataTable({
                responsive: {details: !1},
                columnDefs: [{
                    'targets': [4],
                    'orderable': false,

                }],
                order: [[1, 'asc']],
            });
            $(document).on("sidebarChanged", function () {
                e.columns.adjust(), e.responsive.recalc(), e.responsive.rebuild()
            })
        });
    </script>
@stop