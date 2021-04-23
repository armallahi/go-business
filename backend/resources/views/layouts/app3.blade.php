<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- plugins:css -->
            <link rel="stylesheet" href="{{ asset('assets/css/dropzone.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-1to10.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-horizontal.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-movie.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-pill.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-reversed.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bars-square.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-stars.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css-stars.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/examples.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars-o.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/asColorPicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-editable.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/dropify.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/uploadfile.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/jquery.tagsinput.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/css/tempusdominus-bootstrap-4.min.css') }}">
            <!-- End plugin css for this page -->
            <!-- inject:css -->
            <link rel="stylesheet" href="./assets/css/style.css">
              <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                  integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    </head>
    <body>

        <div class="container-scroller">
            @yield('content')
        </div>
       
        <script src="{{ asset('assets/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <script src="{{ asset('assets/js/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-asColor.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-asGradient.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-asColorPicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-editable.min.js') }}"></script>
        <script src="{{ asset('assets/js/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/js/tempusdominus-bootstrap-4.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/dropify/dropify.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.uploadfile.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.tagsinput.min.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone/dropzone.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.repeater.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.inputmask.bundle.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/js/template.js') }}"></script>
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('assets/js/formpickers.js') }}"></script>
        <script src="{{ asset('assets/js/form-addons.js') }}"></script>
        <script src="{{ asset('assets/js/x-editable.js') }}"></script>
        <script src="{{ asset('assets/js/dropify.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-file-upload.js') }}"></script>
        <script src="{{ asset('assets/js/formpickers.js') }}"></script>
        <script src="{{ asset('assets/js/form-repeater.js') }}"></script>
        <script src="{{ asset('assets/js/inputmask.js') }}"></script>


    </body>
</html>
