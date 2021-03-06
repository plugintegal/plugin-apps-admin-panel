<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Administrator Plugin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="PLUGIN, WiyataOS, Plugin Dev Tools" name="description" />
    <meta content="Plugin " name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.ico')}}">

    <!--Morris Chart-->
    <link rel="stylesheet" href="{{asset('template/libs/morris-js/morris.css')}}" />
    <link href="{{asset('template/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('template/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}"" rel="stylesheet" />
        <link href="{{asset('template/libs/switchery/switchery.min.css')}}"" rel="stylesheet" type="text/css" />

        <link href="{{asset('template/libs/multiselect/multi-select.css')}}""  rel="stylesheet" type="text/css" />
        <link href="{{asset('template/libs/select2/select2.min.css')}}"" rel="stylesheet" type="text/css" />
        <link href="{{asset('template/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}"" rel="stylesheet" />
        <link href="{{asset('template/libs/switchery/switchery.min.css')}}"" rel="stylesheet" />
        <link href="{{asset('template/libs/bootstrap-timepicker/bootstrap-timepicker.min.css')}}"" rel="stylesheet">
        <link href="{{asset('template/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}"" rel="stylesheet">
        <link href="{{asset('template/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}"" rel="stylesheet">
        <link href="{{asset('template/libs/bootstrap-daterangepicker/daterangepicker.css')}}"" rel="stylesheet">

    <link href="{{asset('template/libs/custombox/custombox.min.css')}}" rel="stylesheet">
    <!-- App css -->
    <link href="{{asset('template/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/css/app.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="app">
        <master></master>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('template/js/vendor.min.js')}}"></script>
    <script src="{{asset('template/libs/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('template/libs/morris-js/morris.min.js')}}"></script>
    <script src="{{asset('template/libs/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('template/js/pages/dashboard.init.js')}}"></script>
    <script src="{{asset('template/js/app.min.js')}}"></script>

    <script src="{{asset('template/libs/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('template/libs/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/buttons.flash.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('template/libs/datatables/dataTables.select.min.js')}}"></script>
    <script src="{{asset('template/libs/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('template/libs/pdfmake/vfs_fonts.js')}}"></script>

    <script src="{{asset('template/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{asset('template/libs/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('template/libs/multiselect/jquery.multi-select.js')}}"></script>
        <script src="{{asset('template/libs/jquery-quicksearch/jquery.quicksearch.min.js')}}"></script>

        <script src="{{asset('template/libs/select2/select2.min.js')}}"></script>
        <script src="{{asset('template/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('template/libs/jquery-mask-plugin/jquery.mask.min.js')}}"></script>
        <script src="{{asset('template/libs/moment/moment.js')}}"></script>
        <script src="{{asset('template/libs/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('template/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('template/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        {{-- <script src="{{asset('template/libs/bootstrap-daterangepicker/daterangepicker.js')}}"></script> --}}
        <script src="{{asset('template/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{asset('template/js/pages/form-advanced.init.js')}}"></script>


    <script src="{{asset('template/js/pages/datatables.init.js')}}"></script>

    <script src="{{asset('template/libs/custombox/custombox.min.js')}}"></script>


</body>

</html>
