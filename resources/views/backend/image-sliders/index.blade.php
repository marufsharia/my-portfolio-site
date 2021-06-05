@extends('backend.layouts.app')
@section('title')
    Image Slider List |  {{config('app.name', 'BlogFolio')}}
@stop
@section('cssFile')
    <!-- DataTables CSS-->
    <link rel="stylesheet"
          href="{{asset('lib/datatables.net-bs4/css/dataTables.bootstrap4.css')}}
                  ">
    <link rel="stylesheet"
          href="{{asset('lib/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
@stop
@section('content')
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Image Slider List</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">image-slider-list</li>
        </ul>
    </div>
    <!-- Page Content Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header mb-0">
                    <a href="{{route('image-sliders.index')}}"
                       class="btn btn-outline-dark btn-sm {{ (!isset($_GET['status']) ) ? 'active':''}}">
                        <i class="fa fa-check-circle"></i> All ({{$all_no}})
                    </a>
                    <a href="{{route('image-sliders.index',['status'=>'1'])}}"
                       class="btn btn-outline-success btn-sm
{{ (isset($_GET['status']) && (!is_null($_GET['status'])) && ($_GET['status']=='1'))  ? 'active':''}}">
                        <i class="fa fa-check-circle"></i> Active ({{$active_no}})
                    </a>
                    <a href="{{route('image-sliders.index',['status'=>'2'])}}" class="btn btn-outline-info btn-sm
                    {{ (isset($_GET['status']) && (!is_null($_GET['status'])) && ($_GET['status']=='2'))  ? 'active':''}}">
                        <i class="fa fa-tag"></i> Draft ({{$draft_no}})
                    </a>
                    <a href="{{route('image-sliders.index',['status'=>'0'])}}"
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
                                <th>Image</th>
                                <th>Alt Text</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php $count = 1;?>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{$count++}}</td>
                                    <td>
                                       <img class="img-tbl"
                                            src="{{asset($slider->path)}}" > </td>
                                    <td><a href="javascript:void(0)" class="text-muted">{{
                                    Str::title($slider->alt)}}</a></td>
                                    <td>
                                        @if ($slider->status == 2)
                                            <span class="badge badge-warning p-1 border-0 text-15">Draft</span>
                                        @elseif ($slider->status == 1)
                                            <span class="badge badge-success p-1 border-0 text-15">Active</span>
                                        @elseif ($slider->status == 0)
                                            <span class="badge badge-danger p-1 border-0 text-15">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{$slider->created_at}}</td>
                                    <td>
                                        @if($slider->status!=1)
                                            <a class="btn btn-success btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Make Active"
                                               onclick="makeItemActive('{{route('image-sliders.make-active',
                                               $slider->id)}}',null)"
                                            >
                                                <i class="fa fa-check-circle text-white"></i>
                                            </a>
                                            <a href="{{ route('image-sliders.edit', $slider->id) }}"
                                               class="btn btn-info btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Edit">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a class="btn btn-danger btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Delete"
                                               onclick="deleteItem('{{route('image-sliders.destroy',
                                               $slider)}}',{'_method': 'DELETE','id':'{{$slider->id}}'})">
                                                <i class="fa fa-trash text-white"></i>
                                            </a>
                                        @elseif($slider->status==1)
                                            <a href="#"
                                               class="btn btn-danger btn-sm ml-1" data-toggle="tooltip"
                                               data-placement="top"
                                               title="" data-original-title="Make Inactive"
                                               onclick="makeItemInactive('{{route('image-sliders.make-inactive',
                                               $slider->id)}}',null)">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                            <a href="{{ route('image-sliders.edit', $slider->id) }}"
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
    <script src="{{asset('lib/datatables.net/js/jquery.dataTables.js')}}" defer></script>
    <script src="{{asset('lib/datatables.net-bs4/js/dataTables.bootstrap4.js')}}" defer></script>
    <script src="{{asset('lib/datatables.net-responsive/js/dataTables.responsive.min.js')}}" defer></script>
    <script src="{{asset('lib/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" defer></script>
    {{--    <script src="{{asset('js/tables-datatable.js')}}"></script>--}}
@stop

@section('ownJS')
    <script>
        $(function () {
            var e = $("#_datatable").DataTable({
                responsive: {details: !1},
                columnDefs: [{
                    'targets': [5],
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
