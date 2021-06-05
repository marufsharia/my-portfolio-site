@extends('backend.layouts.app')
@section('title')
    Protfolio Site Update |  {{config('app.name', 'BlogFolio')}}
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
            <h2 class="no-margin-bottom">Edit Protfolio Site</h2>
        </div>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">edit-protfolio-site</li>
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
                        html()->form('POST',route('site-setting.update'))
                        ->class('form-horizontal')
                        ->open()
                    }}

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Site Title<span class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('site_title')
                                       ->class('form-control form-control-warning')
                                       ->id('site_title')
                                       ->value($site_setting->site_title)
                                       ->placeholder('Site Title')
                                       ->if($errors->has('site_title'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('site_title'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('site_title') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Heading Title<span class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('header_title')
                                       ->class('form-control form-control-warning')
                                       ->id('header_title')
                                        ->value($site_setting->header_title)
                                       ->placeholder('Header Title')
                                       ->if($errors->has('header_title'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('header_title'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('header_title') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Heading Sub Title<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('header_sub_title')
                                       ->class('form-control form-control-warning')
                                       ->id('header_sub_title')
                                         ->value($site_setting->header_sub_title)
                                       ->placeholder('Header Sub Title')
                                       ->if($errors->has('header_sub_title'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('header_sub_title'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('header_sub_title') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Your Name<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('name')
                                       ->class('form-control form-control-warning')
                                       ->id('name')
                                        ->value($site_setting->name)
                                       ->placeholder('Your Name')
                                       ->if($errors->has('name'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('name'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Designation/Profession<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('designation')
                                       ->class('form-control form-control-warning')
                                       ->id('designation')
                                         ->value($site_setting->designation)
                                       ->placeholder('Designation or Profession')
                                       ->if($errors->has('designation'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('designation'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('designation') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Resume Link<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('download_link')
                                       ->class('form-control form-control-warning')
                                       ->id('download_link')
                                       ->value($site_setting->download_link)
                                       ->placeholder('Resume download link')
                                       ->if($errors->has('download_link'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('download_link'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('download_link') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Service Section Title<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('service_section_title')
                                       ->class('form-control form-control-warning')
                                       ->id('service_section_title')
                                       ->value($site_setting->service_section_title)
                                       ->placeholder('Service section title')
                                       ->if($errors->has('service_section_title'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('service_section_title'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('service_section_title') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Service Section Description<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->textarea('service_section_description')
                                       ->class('form-control form-control-warning')
                                       ->id('service_section_description')
                                        ->value($site_setting->service_section_description)
                                       ->placeholder('Service section description')
                                       ->if($errors->has('service_section_description'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('service_section_description'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('service_section_description') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Footer Text<span
                                class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                                html()->text('footer_copyright_text')
                                       ->class('form-control form-control-warning')
                                       ->id('footer_copyright_text')
                                         ->value($site_setting->footer_copyright_text)
                                       ->placeholder('Footer Text')
                                       ->if($errors->has('footer_copyright_text'),function ($e){
                                                       return $e->class('v-error');
                                                   })
                           }}
                            @if($errors->has('footer_copyright_text'))
                                <span class="v-error-text ml-2" role="alert">
                                    {{ $errors->first('footer_copyright_text') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Site Color<span class="text-red">*</span></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="primary_color">Primary Color</label>
                                    <input type="color" name="primary_color" id="primary_color" value="{{$site_setting->primary_color}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="secondary_color">Secondary Color</label>
                                    <input type="color" name="secondary_color" id="secondary_color"
                                           value="{{$site_setting->secondary_color}}"  required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Status<span class="text-red">*</span></label>
                        <div class="col-sm-9">
                            {{
                              html()->select('status')
                              ->options(['2'=>'Draft','1'=>'Active'])
                              ->value($site_setting->status)
                              ->class('form-control')
                            }}
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <input type="submit" value="Save Setting" class="btn btn-primary">
                        </div>
                    </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </section>



@stop
@section('jsFile')
    <script src="{{asset('lib/fontawesome-iconpicker/js/fontawesome-iconpicker.min.js')}}" defer></script>
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
                defaultValue: "",

            });
            $('#iconPicker').on('iconpickerSelected', function (event) {
                $('#test').html("<i class='" + event.iconpickerValue + " fa-3x'></i>");
                $('#iconName').val(event.iconpickerValue);
            });
            // ('#iconPicker').data('iconpicker').update("fa fa-paper-plane", true);

        });
    </script>
@stop
