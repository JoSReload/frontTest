@extends('chenka-crud::layouts.master')

@section('title')
    {{ $app_settings['app_name'] }}
@stop

@section('body_class')
    dash
@stop

@section('body')

    @include('chenka-crud::layouts.partials.menu_top')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                @include('chenka-crud::dashboard.partials.sidebar')
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Dashboard</h1>

                <h2 class="sub-header">Agregar Noticia</h2>
                {{ Form::open(['url' => 'posting', 'class' => '', 'role' => 'form']) }}
                    <div class="form-group">
                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Save</button>
                    </div>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1', {
                            extraPlugins: 'image2',
                            filebrowserBrowseUrl: '/browser/browse.php',
                            filebrowserUploadUrl: '/uploader/upload.php'

                        });
                    </script>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop