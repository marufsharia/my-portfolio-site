@extends('backend.layouts.app')
@section('title')
    Add New Service |  {{config('app.name', 'BlogFolio')}}
@stop
@section('cssFile')
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('lib/fontawesome-iconpicker/css/fontawesome-iconpicker.min.css')}}">
@stop
@section('ownCSS')
    <style>
        .icon-picker-list {
            display: flex;
            flex-flow: row wrap;
            list-style: none;
            padding-left: 0;
        }

        .icon-picker-list li {
            display: flex;
            flex: 0 0 20%;
            float: left;
            width: 20%;
        }

        .icon-picker-list a {
            background-color: #f9f9f9;
            border: 1px solid #fff;
            color: black;
            display: block;
            flex: 1 1 auto;
            font-size: 12px;
            line-height: 1.4;
            min-height: 100px;
            padding: 10px;
            text-align: center;
            user-select: none;
        }

        .icon-picker-list a:hover,
        .icon-picker-list a.active {
            background-color: #009E49;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
        }

        .icon-picker-list .fa {
            font-size: 24px;
            margin-bottom: 10px;
            margin-top: 5px;
        }

        .icon-picker-list .name-class {
            display: block;
            text-align: center;
            word-wrap: break-word;
        }
    </style>

@stop
@section('content')
    <!-- Page Header-->
    <header class="page-header">
        <div class="container-fluid">
            <h2 class="no-margin-bottom">Add New Service</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">add-new-service</li>
        </ul>
    </div>
    <!-- Page Content Section-->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="card">
                <div class="card-close">
                    <div class="dropdown">
                        <button type="button" id="closeCard2" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard2" class="dropdown-menu dropdown-menu-right has-shadow"><a
                                    href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a
                                    href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                    </div>
                </div>
                <div class="card-header mb-0">
                    <p class="text-muted float-right"><span class="text-red">*</span> mark field can't be empty.</p>
                </div>
                <div class="card-body">

                        {{
                            html()->form('POST',route('services.store'))
                            ->class('form-horizontal')
                            ->open()
                        }}

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Title<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                                <input id="title" type="text" name="title" placeholder="Service Title"
                                       class="form-control form-control-warning">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Icon<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                                <div class="btn-group">
                                    <button type="button"
                                            class="icp  btn btn-outline-primary dropdown-toggle"
                                            data-toggle="dropdown" id="iconPicker">Browse Icon
                                        <span class="caret"></span>
                                    </button>
                                    <span id="test" class="ml-2 mr-2 img-thumbnail text-primary">
                                        <i class='fa fa-paper-plane fa-3x'></i>
                                    </span>
                                    <div class="dropdown-menu"></div>
                                    <input type="hidden" name="iconName" id="iconName" value="fa fa-paper-plane">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Link<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                                <input id="link" type="text" name="link" placeholder="Link"
                                       class="form-control form-control-warning">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Status<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                              {{
                                html()->select('status')
                                ->options(['2'=>'Draft','1'=>'Active'])
                                ->class('form-control')
                              }}
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <input type="submit" value="Add New Service " class="btn btn-primary">
                            </div>
                        </div>
                {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </section>



@stop
@section('jsFile')
    <script src="{{asset('lib/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js')}}"></script>
@stop
@section('ownJS')
    <script>
        $(function () {
            $('#iconPicker').iconpicker({
                title: 'Select One Icon',
                selectedCustomClass: 'label label-success',
                mustAccept: true,
                placement: 'bottomRight',
                showFooter: false,
                animation: true,
                selected: true,
                defaultValue: "fa fa-paper-plane",

            });
            $('#iconPicker').on('iconpickerSelected', function (event) {
                 $('#test').html("<i class='"+event.iconpickerValue+" fa-3x'></i>");
                 $('#iconName').val(event.iconpickerValue);
            });
            // ('#iconPicker').data('iconpicker').update("fa fa-paper-plane", true);

        });
    </script>
@stop