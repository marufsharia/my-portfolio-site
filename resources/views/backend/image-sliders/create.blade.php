@extends('backend.layouts.app')
@section('title')
    Add New Service |  {{config('app.name', 'BlogFolio')}}
@stop
@section('cssFile')

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
            <h2 class="no-margin-bottom">Add New Slider's Image</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">add-new-image</li>
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
                            html()->form('POST',route('image-sliders.store'))
                            ->class('form-horizontal')
                            ->acceptsFiles()
                            ->open()
                        }}
                    <div class="form-group mb-0">
                        <div class="col-sm-4 mx-auto  mb-0" id="divImpPreview">
                                <img src="{{asset('uploads/defaults/img_not_available.png')}}"
                                     alt="Icon Image" class="img-fluid img-thumbnail"
                                     id="imgPreview"
                                     style="min-width: 148px !important;max-width: 148px
                                             !important; min-height: 148px  !important;
                                             max-height: 148px !important;">
                        </div>
                    </div>
                        <div class="form-group row mt-0">
                            <label class="col-sm-3 form-control-label">Image<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                                {{
                                 html()->file('file')
                                        ->class('form-control form-control-warning')
                                        ->id('file')
                                        ->attributes(['required'=>'' ,'onchange'=>'previewFile()'])
                                        ->if($errors->has('file'),function ($e){
                                                        return $e->class('v-error');
                                           })
                                }}
                                @if($errors->has('file'))
                                    <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('file') }}
                                    </span>
                                @endif
                            </div>

                        </div>



                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Alt Text<span class="text-red">*</span></label>
                            <div class="col-sm-9">
                                {{
                               html()->text('alt')
                                      ->class('form-control form-control-warning')
                                      ->id('alt')
                                      ->placeholder('Image alternative text')
                                      ->if($errors->has('alt'),function ($e){
                                                      return $e->class('v-error');
                                                  })
                          }}
                                @if($errors->has('alt'))
                                    <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('alt') }}
                                </span>
                                @endif
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
                                <input type="submit" value="Add New Image Slider " class="btn btn-primary">
                            </div>
                        </div>
                {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </section>



@stop
@section('jsFile')
    <script src="{{asset('lib/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js')}}" ></script>
@stop
@section('ownJS')
    <script>
        $(function () {
            "use strict";
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

        //preview image
        function previewFile() {
            $('#divImpPreview').show();
            let preview = document.getElementById('imgPreview'); //selects the query named img
            let file = document.getElementById('file').files[0]; //sames as here
            let validExtension = ['png', 'gif','jpeg', 'jpg'];
            if (!validExtension.includes(getFileExtension(file.name).toLowerCase())) {
                Swal.fire(
                    "Attention Please",
                    "Please upload file having extensions .jpeg or .jpg or.png or .gif only.", // had a missing comma
                    "error"
                );

                $('#file').val('');
                $('#imgPreview').attr('src',"{{asset('uploads/defaults/img_not_available.png')}}");
                $('#alt').val('');
                return false;
            }
            if ((file.size/1000)>3072)
            {
                Swal.fire(
                    "Attention Please",
                    "File size will be less than 3mb.", // had a missing comma
                    "error"
                );

                $('#file').val('');
                $('#imgPreview').attr('src', "{{asset('uploads/defaults/img_not_available.png')}}");
                $('#alt').val('');
                return false;
            }
            let reader = new FileReader();
            reader.onloadend = function () {
                preview.src = reader.result;
                $('#alt').val(file.name);
            };

            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            } else {
                preview.src = "";
            }
        }

        //get file extension
        function getFileExtension(filename) {
            return filename.slice((filename.lastIndexOf(".") - 1 >>> 0) + 2);
        }
    </script>
@stop
